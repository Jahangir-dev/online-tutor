@extends('newtemplates.front_partials.default')
@section('content')
      
      <div class="container">
         <div class="row content_main">
            <div class="col-5">
               <div class="profile-section pt-4">
                  <div class="Online_status text-right pr-5">
                     <span class="user_status px-2 py-1">
                     <span><i class="fa fa-circle text-green" aria-hidden="true"></i>
                     </span>
                     <span class="text-green text-14">Online</span>
                     </span>
                  </div>
                  <div class="images-section text-center">
                     <img src="{{$user->image}}" alt ="User images" style="border-radius: 15%; height: auto;
    max-width: 40%;margin-left: 6rem;"  class="user_image" >

                     <h4 class="tutor_name">{{$user->name}}</h4>
                     <div class="w-100 bg_lightgray">
                        <p class="px-2 text_orange text_15">
                       {{$user->about_yourself}}
                        </p>
                     </div>
                     <div class="w-80 mx-auto mt-4">
                        <div class="row">
                           <div class="col-6 text-left pl-5 text_17">
                              <div class="mb-3">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <span class="icon_text">From</span>
                              </div>
                              <div class="mb-3" style="    margin-top: 33%;">
                                 <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                                 <span class="icon_text">Tutor Service</span>
                              </div>
                              <div class="mb-3">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <span class="icon_text">Last Class</span>
                              </div>
                           </div>
                           <div class="col-6 text-left pl-5 text_17">
                              <div class="mb-3">
                                 <span class="icon_text">{{$user->address}}</span>
                              </div>
                              <div class="mb-3">
              <span class="icon_text">{{date ("Y-m-d",strtotime($user->created_at))}}</span>
                              </div>
                              <div class="mb-3">
                                 <span class="icon_text">November 2020</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mt-5 font-weight-bold text_17">
            {{$user->description}}
               </div>
            </div>
            <div class="col-7">
               
                <div class="row">
                  <div class="col-lg-6">
                    <div class="course_text px-3">
                    <h5 class="text_orange mt-2">Active Orders</h5>
               </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="course_text px-3">
                      <h5 style="margin-top: 3%;"><a href="{{route('create-gigs')}}" class="text_orange mt-2">Create Gigs</a></h5>
                    
               </div>
                    
                  </div>
                  
                </div>
                  
               <div class="courses_section mb-4">
                  <div class="row">
                    @foreach($gigs as $g)
                     <div class="col-4 mb-4 mt-4">
                        <div class="text_orange text-center student_course_details">
                        <div class="position-relative">
                           <img src="{{$g->image}}" class="img-fluid" alt="student course">
                           <span class="text_17 text-white subject_name position-absolute">{{$g->gig_title}}</span>
                        </div>
                           <div class="form-group">
                              <span class="w-50 float-left">Amount</span>
                              <span class="w-50 float-right">{{$g->per_hour_rate}}</span>
                           </div>
                           <div class="form-group">
                              <span class="w-50 float-left">From Time</span>
                              <span class="w-50 float-right">{{date ("h:i:s",strtotime($g->from_time))}}</span>
                           </div>



                           <div class="form-group">
                              <span class="w-50 float-left">To Time</span>
                              <span class="w-50 float-right">{{date ("h:i:s",strtotime($g->to_time))}}</span>
                           </div>
                           <a href="{{route('gigs-details',['uid'=>$g->uid])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
                        </div>
                     </div>
                     @endforeach()
                     
                     
                     
                     
                     
                  </div>
               </div>
               <div class="Rewrite_tutor_section mb-3">
                  <h4 class="text_orange">Reviews as Student <span class="icon_text ml-5 text_20">(16)</span></h4>
                  <p class="text_orange float-left mr-3 text_17">Communication Level<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
                  <p class="text_orange float-left mr-3 text_17">Teaching Skils<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
                  <p class="text_orange text_17">Recommended<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="{{asset('asset/images/user.png')}}" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="{{asset('asset/images/flag.png')}}"class="mt-2"style="height: 20px;">
                     <p class="text-dark d-inline-block font-weight-bold mt-2"style="position:relative;top: 5px;"> Pakistan
                     </p>
                  </div>
                  <div class="icon_text text_25 mt-3">
                     <span class="mr-3">Published</span>
                     <span class="mr-3">2 may 2017</span>
                  </div>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="{{asset('asset/images/user.png')}}" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="{{asset('asset/images/flag.png')}}"class="mt-2"style="height: 20px;">
                     <p class="text-dark d-inline-block font-weight-bold mt-2"style="position:relative;top: 5px;"> Pakistan
                     </p>
                  </div>
                  <div class="icon_text text_25 mt-3">
                     <span class="mr-3">Published</span>
                     <span class="mr-3">2 may 2017</span>
                  </div>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="{{asset('asset/images/user.png')}}" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="{{asset('asset/images/flag.png')}}"class="mt-2"style="height: 20px;">
                     <p class="text-dark d-inline-block font-weight-bold mt-2"style="position:relative;top: 5px;"> Pakistan
                     </p>
                  </div>
                  <div class="icon_text text_25 mt-3">
                     <span class="mr-3">Published</span>
                     <span class="mr-3">2 may 2017</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      
      @endsection