<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SentOffer;
use Auth;
use App\Message;
use App\Models\SubjectCategories;
use App\Models\Teacher_Gigs;
use App\User;
use App\Notifications\SendNotification;
use DB;
class SentOfferController extends Controller
{
	public function send_offer(Request $r)
	{	

		$category = SubjectCategories::where('name',$r->course_sel)->first();	
		$new = new SentOffer();
		$new->uid = md5(date('Y-m-d').microtime());	
		$new->from_user	= Auth::user()->id;
		$new->to_user = $r->user_id;	
		$new->offer_id = $r->selected_gig;
		$new->description = $r->offer_dec; 	
		$new->course_sel = $category->id;	
		$new->offerDate	= $r->offerDate; 
		$new->from_offerTime = $r->from_offerTime;	
		$new->to_offerTime = $r->to_offerTime;	
		$new->price = $r->price;
		$new->save();

		notify()->success("New Offer Recieved", "New Offer");

		$offerData = [
            'name' => Auth::user()->name,
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
        $user = User::where('id',$r->user_id)->first();
	  	$user->notify(new SendNotification($offerData));

		return $new;
	}

	public function confirmOffer(Request $request)
	{


		$id = $request->id;
		$status = $request->status;		
		$user_id = $request->user_id;

		$offer = SentOffer::where('id',$id)->first();
		if($status=='approve'){
			$offer->status = 1;
		}else{
			$offer->status = 2;
		}
		$offer->save();

		$message = Message::where('id',$request->message_id)->first();
		if($status=='approve'){
			$btn = `<a class="text_20 mr-3" style="color:white;background:#0eb147">Confirmed</a>`;
		}else{
			$btn = `<a class="text_20 mr-3" style="color:white;">Declined</a>`;
		}

		$gig = Teacher_Gigs::with('category')->where('id',$offer->offer_id)->first();


		$text = '<div>
                <div class="card p-4 mt-5 colored_box">
                  <div class="row no-gutter">
                    <div class="col-3">
                      <div class="tutor_acceptedImg">
                        <img src="'.$gig->image.'" alt="confirmed_course" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="course_info text_20">
                        <span class="text-left">
                          '.$gig->category->name.'
                        </span>
                        <span class="float-right">
                          '.$gig->price.'
                        </span>
                        <p class="picked_date">
                          '.date('d/m/Y',strtotime($gig->created_at)).'
                        </p>
                        
                      </div>
                    </div>
                  </div>
                  <p class="confirmed_courseText text_20 mt-4">'.$gig->description.'</p>
                  <div class="ml-auto btn_group d-inline-block mt-3">
                      
                  '.$btn.'                     

                  </div>
                </div>
              </div>';    

              $message->content = $text;
              $message->save();
/*

 	 	$message->message_id = $message->id;        

        $message->dateTimeStr = date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString()));

        $message->dateHumanReadable = $message->created_at->diffForHumans();

        $message->fromUserName = $message->fromUser->name;

        $message->from_user_id = Auth::user()->id;

        $message->toUserName = $message->toUser->name;

        $message->to_user_id = $request->to_user;

        PusherFactory::make()->trigger('chat', 'send', ['data' => $message]);

        return response()->json(['state' => 1, 'data' => $message]);*/

			return 1;

	}

  public function adminOrdersList()
  {

    $orders = SentOffer::with('gig_details','from_user_d','to_user_d')->orderBy('id','desc')->paginate(15);
         //dd($orders);
    return view('admin.orders.index',compact('orders'));
  }

  public function adminDeleteOrder($id,$status)
  {

    $order = SentOffer::where('id',$id)->first();
    if($status=='active'){
          $order->active=5;
    }else{
          $order->active=1;
    }

    $order->save();
    return redirect()->back();
  }

  public function adminOrderChat($id,$status)
  {

    $order = SentOffer::with('gig_details')->where('id',$id)->first();    
    if($status=='order_chat'){
      $messages = Message::where('order_id',$id)->with('fromUser','toUser')->groupBy(DB::raw('Date(created_at)'))->get();
    }else{
      $messages = Message::where('from_user',$order->from_user)->where('to_user',$order->to_user)->where('order_id',NULL)->with('fromUser','toUser')->groupBy(DB::raw('Date(created_at)'))->get();
    }

    return view('admin.orders.chat',compact('order','messages'));
  }

}
