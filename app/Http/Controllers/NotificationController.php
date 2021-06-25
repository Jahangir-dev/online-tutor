<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use Notification;
use App\Notifications\SendNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('product');
    }
    
    public function sendOfferNotification() {
        $userSchema = User::first();
  
        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
	  	$userSchema->notify(new SendNotification($offerData));

        /*Notification::send($userSchema, new SendNotification($offerData));*/
   
        dd('Task completed!');
    }
}