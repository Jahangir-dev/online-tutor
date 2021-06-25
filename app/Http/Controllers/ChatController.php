<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Models\Teacher_Gigs;
use App\Models\SentOffer;
use Auth;
use App\Lib\PusherFactory;
use App\Models\UserQuickReplies;
class ChatController extends Controller
{
	public function index(Request $request)
	{
        $gigs = Teacher_Gigs::where('tutor_id',Auth::user()->id)->orderBy('id','desc')->with('category')->get();
        if(isset($request->id)){
        $offer = SentOffer::where('uid',$request->id)->first();    

            if(Auth::user()->hasAccess(['tutor'])){
            $users = User::where('id', '!=', Auth::user()->id)->where('id',$offer->to_user)->get();
            }else{
            $users = User::where('id', '!=', Auth::user()->id)->where('id',$offer->from_user)->get();            
            }   

            $order_id = $offer->id;
        }else{
        $users = User::where('id', '!=', Auth::user()->id)->get();            
                    $order_id = NULL;
        }

        $quick_replies = UserQuickReplies::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();


        return view('chat.home', compact('users','gigs','quick_replies','order_id'));
	}

	 public function getLoadLatestMessages(Request $request)
    {

        if(!$request->user_id) {
            return;
        }
    /*    $messages = Message::where(function($query) use ($request) {
            $query->where('from_user', Auth::user()->id)->where('to_user', $request->user_id);
        })->orWhere(function ($query) use ($request) {
            $query->where('from_user', $request->user_id)->where('to_user', Auth::user()->id);
        })->orderBy('created_at', 'ASC')->get();
*/


        if($request->order_id!=NULL){
        //$message = Message::where('order_id',$request->order_id)->where($request->old_message_id)->first();
        

         $messages = Message::where('order_id',$request->order_id)->where(function($query) use ($request) {
            $query->where('from_user', Auth::user()->id)->where('to_user', $request->user_id)->where('order_id',$request->order_id);
        })->orWhere(function ($query) use ($request) {
            $query->where('from_user', $request->user_id)->where('to_user', Auth::user()->id)->where('order_id',$request->order_id);
        })->orderBy('created_at', 'ASC')->get();

        }else{
        $messages = Message::where(function($query) use ($request) {
            $query->where('from_user', Auth::user()->id)->where('to_user', $request->user_id)->where('order_id',NULL);
        })->orWhere(function ($query) use ($request) {
            $query->where('from_user', $request->user_id)->where('to_user', Auth::user()->id)->where('order_id',NULL);
        })->orderBy('created_at', 'ASC')->get();

        }   

        $return = [];
        foreach ($messages as $message) {
            $return[] = view('chat.message-line')->with('message', $message)->render();
        }
        return response()->json(['state' => 1, 'messages' => $return]);
    }

    public function postSendMessage(Request $request)
    {   

        if(!$request->to_user || !$request->message) {
            return;
        }

        $message = new Message();

        $message->from_user = Auth::user()->id;

        $message->to_user = $request->to_user;

        $message->content = $request->message;

        $message->offer_id = $request->offer_id;   

        $message->order_id = $request->order_id;                

        $message->save();

        if(isset($request->offer_id)){
        $message->content = '<div class="latest-message" data-id="'.$message->id.'">'.$request->message.'</div>';
        $message->save();    
        }    

        // prepare some data to send with the response
        $message->message_id = $message->id;        

        $message->dateTimeStr = date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString()));

        $message->dateHumanReadable = $message->created_at->diffForHumans();

        $message->fromUserName = $message->fromUser->name;

        $message->from_user_id = Auth::user()->id;

        $message->toUserName = $message->toUser->name;

        $message->to_user_id = $request->to_user;

        PusherFactory::make()->trigger('chat', 'send', ['data' => $message]);

        return response()->json(['state' => 1, 'data' => $message]);
    }

    public function getOldMessages(Request $request)
    {

        if(!$request->old_message_id || !$request->to_user)
            return;
        if($request->order_id!=NULL){
        $message = Message::where('order_id',$request->order_id)->where($request->old_message_id)->first();
        

         $lastMessages = Message::where('order_id',$request->order_id)->where(function($query) use ($request, $message) {
            $query->where('from_user', Auth::user()->id)
                ->where('to_user', $request->to_user)
                ->where('order_id',$request->order_id)
                ->where('created_at', '<', $message->created_at);
        })
            ->orWhere(function ($query) use ($request, $message) {
            $query->where('from_user', $request->to_user)
                ->where('to_user', Auth::user()->id)
                ->where('order_id',$request->order_id)
                ->where('created_at', '<', $message->created_at);
        })
            ->orderBy('created_at', 'ASC')->get();


        }else{
        $message = Message::find($request->old_message_id);  
        

        $lastMessages = Message::where(function($query) use ($request, $message) {
            $query->where('from_user', Auth::user()->id)
                ->where('to_user', $request->to_user)
                ->where('order_id',NULL)
                ->where('created_at', '<', $message->created_at);
        })
            ->orWhere(function ($query) use ($request, $message) {
            $query->where('from_user', $request->to_user)
                ->where('to_user', Auth::user()->id)
                ->where('order_id',NULL)
                ->where('created_at', '<', $message->created_at);
        })
            ->orderBy('created_at', 'ASC')->get();

        }   



     

        $return = [];

        if($lastMessages->count() > 0) {

            foreach ($lastMessages as $message) {

                $return[] = view('chat.message-line')->with('message', $message)->render();
            }

            PusherFactory::make()->trigger('chat', 'oldMsgs', ['to_user' => $request->to_user, 'data' => $return]);
        }

        return response()->json(['state' => 1, 'data' => $return]);
    }


    public function send_image(Request $request){

          if ($request->hasFile('file')) 
             {

                $destinationPath = public_path()."/chat/";
                $extension =  $request->file('file')->getClientOriginalExtension();
                $fileName = time();
                $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                if(!$request->file('file')->move($destinationPath,$fileName))
                {
                    throw new \Exception("Failed Upload");                    
                }

                $attachment = asset("chat")."/".$fileName;
                
            }

            return $attachment;

    }

}
