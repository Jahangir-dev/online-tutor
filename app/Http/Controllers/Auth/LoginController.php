<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Models\Teacher_Gigs;
use App\Models\SubjectCategories;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


     public function login()
    {
      //dd('siodhfo;ih');

      return view('auth.login');
    }






     protected function postlogin(Request $request)
    {
        $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);
               
               $email = $request->input('email');
               $password = $request->input('password');
              // dd($request);


      $user = User::where('email',$request->input('email'))->first();
       // dd($user);

       if(!Auth::attempt($request->only(['email','password']))){
          
          return redirect()->back()->with('danger','Username & Password combination doesn\'t not match');
        
        } 


      
    // dd(Auth::user()->hasAccess(['admin']));
        if(Auth::user()->hasAccess(['admin'])){
          // dd($request);
       
          return redirect()->route('admin-home')->with('success','WELCOME'.Auth::user()->username.'...');
        
        }

         elseif(Auth::user()->hasAccess(['student'])){

                   
                 // dd('owner');
                  return redirect()->route('students-dashboard')->with('success','WELCOME '.Auth::user()->username.'...'); 
                
                }

                elseif(Auth::user()->hasAccess(['tutor'])){

               
                 // dd('owner');
                  return redirect()->route('tutors-dashboard')->with('success','WELCOME '.Auth::user()->username.'...'); 
                
                }

 

        else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 
    }



     public function register()
    {
      //dd('siodhfo;ih');

      return view('auth.register');
    }


       public function register_save(Request $request)
    {        //dd($request);
  
            $student='student';

            $user  = User::insertGetId([
                'name'=>$request->name,
                'father_name'=>$request->f_name,
                'email'=>$request->email, 
                'password'=>bcrypt($request->password),
                'phone_number'=>$request->phone,
                'address'=>$request->address,
                'role'=>$student,
                ]);

       //dd($user);
      $id=User::find($user);        
         $role=DB::table('roles')->where('name','Student')->first();
             $id->roles()->attach($role->id);
             return redirect()->route('login');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function logout(Request $request) {
        
      Auth()->logout();
     return redirect('/');
    }
}
