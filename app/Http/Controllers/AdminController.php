<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\SubjectCategories;
use App\Models\Teacher_Gigs;
use App\User;
use App\QuestionAnswer;

class AdminController extends Controller
{
    public function home()
    {
    	return view('admin.adminhome');
    }


    public function subject_list()
    {
    	$subject=Subjects::paginate(10);
    	return view('admin.subject_list',compact('subject'));
    }

    public function add_subject(Request $request)
    {
    	$new=new Subjects();
    	$new->name=$request->subject;
    	$new->save();
    	return redirect()->route('subject-list');
    }




    public function edit_subject(Request $request)
    {
    	$edit=Subjects::where('id',$request->id)->first();
    	$edit->name=$request->subject;
    	$edit->save();
    	return redirect()->route('subject-list');
    }


   
  public function subject_delete($id)
  {

      $subject = Subjects::where('id',$id)->delete();
      return redirect()->route('subject-list');        
  }


  public function categories_list()
  {
  	   $categories=SubjectCategories::paginate(10);
     return view('admin.subject_categories',compact('categories'));
  }


  public function add_categories(Request $request)
  {



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
  	   $new=new SubjectCategories();
    	  $new->name=$request->categories;
        $new->image=$thumbnail;
    	$new->save();
    	return redirect()->route('categories-list');
  }



  public function edit_categories(Request $request)
  {
  	    $edit=SubjectCategories::where('id',$request->id)->first();
    	$edit->name=$request->categories;
    	$edit->save();
    	return redirect()->route('categories-list');
  }



    public function categories_delete($id)
  {

      $categories = SubjectCategories::where('id',$id)->delete();
      return redirect()->route('categories-list');        
  }





    public function welcome()
    { 
      
        //dd($category);
     // $school=Teacher_Gigs::where('category_id',4)->with('users')->get();
     // $languages=Teacher_Gigs::where('category_id',3)->with('users')->get();
     $gigs=Teacher_Gigs::orderBy('id','desc')->with('users','teachersubject.subject')->limit(8)->get();
        //dd($gigs);
        $categories=SubjectCategories::limit(3)->get();
        //dd($categories);
       return view('welcome',compact('categories','gigs')); 
    }



    public function more_categories()
    {
       // $school=Teacher_Gigs::where('category_id',4)->with('users')->get();
     // $languages=Teacher_Gigs::where('category_id',3)->with('users')->get();
      $name = ['Instruments','School','Languages'];
      $categories = SubjectCategories::whereIn('name',$name)->select('id')->get();
       //sdd($categories);
      $ids = [];
     
        foreach($name as $n){
            $categories = SubjectCategories::where('name',$n)->select('id')->first();
            
            $gigs = Teacher_Gigs::where('category_id',$categories->id)->with('users')->get();
                $ids[$n] = $gigs;

        }
     /* foreach($categories as $key=> $cat){
             array_push($ids,$cat->id);
        }*/

        $gigs = $ids;

          $teacher = User::where('role','teacher')->orderBy('id','desc')->get();

     // dd($teacher);
      return view('admin.index',compact('gigs','teacher'));
    }


    public function question_list()
    {
        //dd('test');
        $list=QuestionAnswer::paginate(8);
        //dd($list);
        return view('admin.question_list',compact('list'));
    }

    public function increase_level($id)
    {
        
        $edit=User::where('id',$id)->first();
        //dd($edit);
        return view('admin.increase_level',compact('edit'));
    }


    public function level_update(Request $request)
    {
        $update=User::where('id',$request->id)->first();
        //dd($update);
        $update->level=$request->level;
        $update->save();
        return redirect()->route('teacher-list');
    }


    
}



