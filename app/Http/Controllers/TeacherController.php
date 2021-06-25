<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Tutor_Education;
use App\Models\Subjects;
use App\Models\TeacherSubjects;
use Auth;
use App\Models\SubjectCategories;
use App\Models\Teacher_Gigs;

use App\Models\SentOffer;

class TeacherController extends Controller
{
    public function tutor_gigs()
    {
        //dd('test');
        $user=User::where('id',Auth::user()->id)->first();
        $gigs=Teacher_Gigs::where('tutor_id',Auth::user()->id)->get();
        //dd($gigs);
        
        //dd($user);
        notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');
        return view('teacher.teacher_dashboard',compact('user','gigs'));
    }
   

    public function teacher_information()
    {
    	return view('teacher.teacher_info');
    }

    public function teacher_information_save(Request $request)
    {
    	//dd($request);
   $teacher='teacher';

         if ($request->hasFile('image')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('image')->move($destinationPath,$fileName))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$fileName;
                    

                }



    	$std_id=User::insertGetId([

    	 'name'=>$request->name,
         'email'=>$request->email,
         'phone_number'=>$request->phone_number,
         'father_name'=>$request->father_name,

         'address'=>$request->address,
         'cnic'=>$request->cnic,
         'image'=> $thumbnail,
         'about_yourself'=>$request->tell_about_yourselfs,
         'description'=>$request->description,
         'role'=>$teacher,


         'password'=>bcrypt($request->password)
    		]);


    	 $id=User::find($std_id);  
    	 //dd($id);      
         $role=DB::table('roles')->where('name','Tutor')->first();
         //dd($role);
             $id->roles()->attach($role->id);
             return redirect()->route('teacher-details',['id'=>$id->id]);
    }


    public function teacher_details(Request $request)
    {
        $user_id=$request->id;
        //dd($user_id);
    	return view('teacher.teacher_detail',compact('user_id'));
    }


    public function teacher_document_save(Request $request)
    {
      // dd($request);
    	$new =new Tutor_Education();
    	$new->user_id=$request->user_id;
    	$new->matric_institute=$request->matric_institute;
    	$new->matric_obt=$request->matric_obt;

    	$new->matric_total=$request->matric_total;
    	$new->Fsc_institute=$request->Fsc_institute;
    	$new->fsc_obt=$request->fsc_obt;
    	$new->fsc_total=$request->fsc_total;

    	$new->bechelor_institute=$request->bechelor_institute;

    	$new->bechelor_obt=$request->bechelor_obt;
    	$new->bechelor_total=$request->bechelor_total;
    	$new->master_institute=$request->master_institute;

    	$new->master_obt=$request->master_obt;
    	$new->master_total=$request->master_total;
    	$new->save();

         // $id=User::find($user_id); 
    	return redirect()->route('teacher-subjects',['id'=>$new->user_id]);


    }


    public function teacher_subject(Request $request)
    {
    	$user_id=$request->id;
    	//sdd($user_id);
    	$subjects=Subjects::get();
    	//dd($subjects);
    	return view('teacher.teacher_subjects',compact('user_id','subjects'));
    }


    public function teacher_subject_save(Request $request)
    {
    	//dd($request);




    	$new =new TeacherSubjects();
    	$new->user_id=$request->user_id;
    	$new->subject1_id=$request->subject1_id;
    	$new->from_subject1=$request->from_subject1;

    	$new->to_subject1=$request->to_subject1;
    	$new->subject2_id=$request->subject2_id;
    	$new->from_subject2=$request->from_subject2;
    	$new->to_subject2=$request->to_subject2;
    	$new->save();
    	return redirect()->route('login');
      
    }



    public function create_gigs()
    {
        $categories=SubjectCategories::get();
        return view('teacher.teacher_gigs',compact('categories'));
    }


    public function gigs_save(Request $request)
    {
       // dd($request);

          if ($request->hasFile('image')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('image')->move($destinationPath,$fileName))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$fileName;
                    

                }

        $uid = md5(date('Y-m-d').microtime());
        $uid = substr($uid,0,6);

        $new =new Teacher_Gigs();
        $new->uid = $uid;
        $new->tutor_id=Auth::user()->id;
        $new->gig_title=$request->gig_tittle;
        $new->category_id=$request->category_id;

        $new->search_tag=$request->search_tag;
        $new->from_time=$request->from_time;
        $new->to_time=$request->to_time;
        $new->per_hour_rate=$request->per_hour_rate;
        $new->description=$request->description;
        $new->requirement=$request->requirment;
        $new->image=$thumbnail;
        $new->save();
        return redirect()->route('tutor-gigs');


    }



    public function gigs_details(Request $request)
    {


        $categories=SubjectCategories::get();
        $gigs_details=Teacher_Gigs::where('uid',$request->uid)->first();
        //dd($gigs_details);
        return view('teacher.gigs_details',compact('gigs_details','categories'));
    }


    public function gig_update(Request $request)
    {

       
        $update=Teacher_Gigs::where('id',$request->id)->first();
        $update->gig_title=$request->gig_tittle;
        $update->category_id=$request->category_id;

        $update->search_tag=$request->search_tag;
        $update->from_time=$request->from_time;
        $update->to_time=$request->to_time;
        $update->per_hour_rate=$request->per_hour_rate;
        $update->description=$request->description;
        $update->requirement=$request->requirment;


 if ($request->hasFile('image')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('image')->move($destinationPath,$fileName))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$fileName;
        $update->image=$thumbnail;                    

                }



        $update->save();
        return redirect()->route('tutor-gigs');
    }

    public function getGigdetail(Request $request){

        $gig = Teacher_Gigs::where('id',$request->id)->with('category')->first();
        return $gig;
    }





    public function teacher_list()
    {
        $teacher=User::where('role','teacher')->paginate(10);
        //dd($teacher);
        return view('admin.teacher_list',compact('teacher'));
    }


    public function tuor_dashboard()
    {

           $user=User::where('id',Auth::user()->id)->first();
        
        notify()->success('Welcome to Tutor Dashboard ⚡️', ' Title');
        $orders = SentOffer::where('from_user',Auth::user()->id)->where('status',1)->where('active',1)->with('gig_details')->orderBy('id','desc')->get();
       // dd($orders);
       return view('teacher.dashboard',compact('user','orders'));
    }


    public function tutor_earning()
    {
        return view('teacher.tutor_earning');
    }

    public function tutor_classes()
    {
        // code...\\
        $user=User::where('id',Auth::user()->id)->first();
   return view('teacher.tutor_time_set_classes',compact('user'));
        
    }


    public function teacher_gigs_detail($id)
    {
        //dd($id);
         $user=User::where('id',$id)->first();
         //dd($user);
         
        $gigs=Teacher_Gigs::where('tutor_id',$id)->get();
       // dd($gigs);
        
        //dd($user);
        notify()->success('Welcome to Tutor Gigs ⚡️', 'Tutor Gig');
        return view('gigs_view',compact('gigs','user'));
    }


    public function user_gigs_details($id)
    {
        
        $gigs=Teacher_Gigs::where('id',$id)->with('category')->first();
        //dd($gigs);
         return view('user_gigs_view',compact('gigs'));
    }

    public function instrument_gig_view($id)
    {
        
         $gigs=Teacher_Gigs::where('id',$id)->with('category')->first();
         //dd($gigs);
         return view('instrument_gigs_view',compact('gigs'));
    }

    public function language_gigs_view($id)
    {
        $gigs=Teacher_Gigs::where('id',$id)->with('category')->first();
        //dd($gigs);
        return view('languages_gigs_view',compact('gigs'));
    }


    public function school_gigs_view($id)
    {
        $gigs=Teacher_Gigs::where('id',$id)->with('category')->first();
        //dd($gigs);
        return view('school_gigs_view',compact('gigs'));
    }


    public function new_teacher_view($id)
    {

          $user=User::where('id',$id)->first();
         //dd($user);
         
        $gigs=Teacher_Gigs::where('tutor_id',$id)->get();
         notify()->success('Welcome to Tutor Gigs ⚡️', 'Tutor Gig');

         return view('teacher_gig_view',compact('gigs','user'));
       
    }



    public function pro_teacher_gig($id)
    {
        $user=User::where('id',$id)->first();
        $gigs=Teacher_Gigs::where('tutor_id',$id)->get();
         notify()->success('Welcome to Tutor Gigs ⚡️', 'Tutor Gig');
        //dd($gigs);
        return view('proteacher_gig_view',compact('gigs','user'));
    }


    public function teacher_home_gigs($id)
    {
        
       // dd($user);
        $gigs=Teacher_Gigs::where('id',$id)->first();
         notify()->success('Welcome to Tutor Gigs ⚡️', 'Tutor Gig');
        //dd($gigs);
        return view('home_teacher_gig_view',compact('gigs'));
    }


    public function new_teacher_views($id)
    {
        $user=User::where('id',$id)->first();
         //dd($user);
         
        $gigs=Teacher_Gigs::where('tutor_id',$id)->get();
         notify()->success('Welcome to Tutor Gigs ⚡️', 'Tutor Gig');
         return view('teacher_gig_views',compact('gigs','user'));
        //dd($id);
    }

}
