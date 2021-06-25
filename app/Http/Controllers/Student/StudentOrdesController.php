<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SentOffer;
use App\Models\SubjectCategories;
use Auth;
use App\User;
use App\Notifications\SendNotification;

class StudentOrdesController extends Controller
{
	public function studentOrders()
	{
		$orders = SentOffer::where('to_user',Auth::user()->id)->with('gig_details')->orderBy('id','desc')->get();
		return view('student.orders.index',compact('orders'));
	}

	public function gigs_details($uid)
	{
		$categories=SubjectCategories::get();
		$gigs_details = SentOffer::where('uid',$uid)->with('gig_details')->orderBy('id','desc')->first();
		return view('student.orders.gigs_details',compact('gigs_details','categories'));
	}

	public function studentOrderStatus($uid,$status)
	{

		$orders = SentOffer::where('uid',$uid)->first();
		if($status=='accept'){

		SentOffer::where('uid',$uid)->update(['active'=>1,'status'=>1]);	
        notify()->success('Offer Accepted', 'Success');		
        $message = 'Offer Accepted';
		}else{
		SentOffer::where('uid',$uid)->update(['active'=>5,'status'=>2]);
        notify()->warning('Offer Rejected', 'Rejected');				
        $message = 'Offer Denied';
		}
		$userSchema = User::where('id',$orders->from_user)->first();
  			
        $offerData = [
            'name' => $orders->name,
            'body' => $message,
            'offerUrl' => url('/'),
        ];
	  	$userSchema->notify(new SendNotification($offerData));

		return redirect()->back();	

	}

}
