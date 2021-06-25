<?php
namespace App\Http\Controllers\Tutor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SentOffer;
use App\User;
use Auth;
class TutorOrdesController extends Controller
{
	public function tutorOrders(){
		$user=User::where('id',Auth::user()->id)->first();
		$orders = SentOffer::where('from_user',Auth::user()->id)->with('gig_details')->orderBy('id','desc')->get();
		return view('teacher.orders.index',compact('orders','user'));
	}
}
