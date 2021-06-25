<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\QuestionAnswer;
use App\Models\SentOffer;


class StudentController extends Controller
{
    public function home()
    {
    	$student=User::where('id',Auth::user()->id)->first();
    	// dd($student);
         $offer=SentOffer::where('to_user',Auth::user()->id)->with('from_user_d')->get();
         //dd($offer);
    	return view('student.student_dashboard',compact('student','offer'));
    }



    public function expert_qa()
    {
        return view('student.qa');
    }


    public function question_save(Request $request)
    {
        //dd($request);
        $new=new QuestionAnswer();
        $new->std_name=$request->std_name;
        $new->email=$request->email;
        $new->question=$request->question;
        $new->save();
        return redirect()->back();
    }


    public function students_dashboard()
    {
        $student=User::where('id',Auth::user()->id)->first();
        // dd($student);
         $offer=SentOffer::where('to_user',Auth::user()->id)->with('from_user_d','gig_details')->get();
         //dd($offer);
        return view('student.dashboard',compact('student','offer'));
        
    }

    public function accept_offer($id)
    {
        $student=User::where('id',Auth::user()->id)->first();
        $offer=SentOffer::where('id',$id)->with('from_user_d','gig_details')->first();
        //dd($offer);
        return view('student.accept_offer',compact('offer','student'));
    }


    public function accept_save($id,$type)
    {
        if ($type=='Approve') {
    //dd($type);
    $approve=SentOffer::where('id',$id)->where('to_user',Auth::user()->id)->update(['status' =>1]);
   // dd($approve);

    return redirect()->route('students-dashboard');
  }
  else if ($type=='Decline') {
     $decline=SentOffer::where('id',$id)->where('to_user',Auth::user()->id)->update(['status'=>2]);
     //dd($status);

        return redirect()->route('students-dashboard');
  }
    }
    
    
}
