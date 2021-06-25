<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectCategories;
use App\Models\Teacher_Gigs;
use App\User;

use App\Contactus;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function online_tutor()
    {

         $name = ['Home'];
      $categories = SubjectCategories::whereIn('name',$name)->select('id')->get();
       //dd($categories);
      $ids = [];



        foreach($name as $n){
            //dd($n);
            $categories = SubjectCategories::where('name',$n)->select('id')->first();
                // dd($categories);           
            $gigs = Teacher_Gigs::where('category_id',$categories->id)->with('users')->get();
                $ids[$n] = $gigs;

        }
     /* foreach($categories as $key=> $cat){
             array_push($ids,$cat->id);
        }*/

          $gigs = $ids;

          $teacher = User::where('role','teacher')->orderBy('id','desc')->get();
          $proteacher = User::where('level',4)->with('teachergigs')->orderBy('id','desc')->get();
          //dd($proteacher);
        return view('onlinetutor',compact('gigs','teacher','proteacher'));
    }


    public function contact_us_save(Request $request)
    {
        //dd($request);
        $new=new Contactus();
        $new->name=$request->name;
        $new->email=$request->email;
        $new->phone=$request->phone;
        $new->save();
        return redirect()->back();
    }


    public function contact_us_list()
    {
        //dd('test');
         $list=Contactus::paginate(8);
         return view('admin.contact_us',compact('list'));
    }

    public function contact_delete($id)
    {
        //dd($id);

      $contact = Contactus::where('id',$id)->delete();
      return redirect()->back();
    }
}
