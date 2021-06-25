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
                     <img src="{{asset('asset/images/user.png')}}" alt ="User images" height="180px" width="180px"class="user_image" style="margin: 0 auto">
                     <h4 class="tutor_name">Meressa Neesham</h4>
                     <div class="w-100 bg_lightgray">
                        <p class="px-2 text_orange text_15">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </p>
                     </div>
                     <div class="w-80 mx-auto mt-4">
                        <div class="row">
                           <div class="col-6 text-left pl-5 text_17">
                              <div class="mb-3">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <span class="icon_text">From</span>
                              </div>
                              <div class="mb-3">
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
                                 <span class="icon_text">Australlia</span>
                              </div>
                              <div class="mb-3">
                                 <span class="icon_text">2 August 2020</span>
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
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in
               </div>
            </div>
            <div class="col-7">
               <div class="course_text px-3">
                  <h5 class="text_orange mt-2">Active Order</h5>
               </div>
               <div class="courses_section mb-4">
                  <nav class="student_multiTabs">
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                     <a class="nav-item nav-link text_black text_20 active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">New</a>
                     <a class="nav-item nav-link text_black text_20" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>

                     <a class="nav-item nav-link text_black text_20" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Delivered</a>
                     <a class="nav-item nav-link text_black text_20" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Completed</a>

                  </div>
               </nav>
               <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="row">
                        
                        @foreach($orders as $order)
                         
                        @if($order->active==0)
                        <div class="col-4 mb-4">
                           <div class="text_orange text-center student_course_details">
                           <div class="position-relative">
                              <img src="{{$order->gig_details->image}}" class="img-fluid" alt="student course">
                              <span class="text_17 text-white subject_name position-absolute">{{$order->gig_details->gig_title}}</span>
                           </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Amount</span>
                                 <span class="w-50 float-right">$ {{$order->price}}</span>
                              </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Duration</span>
                                 <span class="w-50 float-right">1 Month</span>
                              </div>
                              <a href="{{route('student-gigs-details',['uid'=>$order->uid])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
                           </div>
                        </div>
                        @endif
                        @endforeach

                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="row">
                        
                        @foreach($orders as $order)   
                        @if($order->active==1)
                        <div class="col-4 mb-4">
                           <div class="text_orange text-center student_course_details">
                           <div class="position-relative">
                              <img src="{{$order->gig_details->image}}" class="img-fluid" alt="student course">
                              <span class="text_17 text-white subject_name position-absolute">{{$order->gig_details->gig_title}}</span>
                           </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Amount</span>
                                 <span class="w-50 float-right">$ {{$order->price}}</span>
                              </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Duration</span>
                                 <span class="w-50 float-right">1 Month</span>
                              </div>
                                                            <a href="{{route('student-gigs-details',['uid'=>$order->uid])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
                           </div>
                        </div>
                        @endif
                        @endforeach

                     </div>

                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="row">
                           
                           @foreach($orders as $order)   
                        @if($order->active==2)
                        <div class="col-4 mb-4">
                           <div class="text_orange text-center student_course_details">
                           <div class="position-relative">
                              <img src="{{$order->gig_details->image}}" class="img-fluid" alt="student course">
                              <span class="text_17 text-white subject_name position-absolute">{{$order->gig_details->gig_title}}</span>
                           </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Amount</span>
                                 <span class="w-50 float-right">$ {{$order->price}}</span>
                              </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Duration</span>
                                 <span class="w-50 float-right">1 Month</span>
                              </div>
                                                            <a href="{{route('student-gigs-details',['uid'=>$order->uid])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
                           </div>
                        </div>
                        @endif
                        @endforeach

                     </div>

                  </div>
                  <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                     <div class="row">
                        
                        @foreach($orders as $order)   
                        @if($order->active==3)
                        <div class="col-4 mb-4">
                           <div class="text_orange text-center student_course_details">
                           <div class="position-relative">
                              <img src="{{$order->gig_details->image}}" class="img-fluid" alt="student course">
                              <span class="text_17 text-white subject_name position-absolute">{{$order->gig_details->gig_title}}</span>
                           </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Amount</span>
                                 <span class="w-50 float-right">$ {{$order->price}}</span>
                              </div>
                              <div class="form-group">
                                 <span class="w-50 float-left">Duration</span>
                                 <span class="w-50 float-right">1 Month</span>
                              </div>
                                                            <a href="{{route('student-gigs-details',['uid'=>$order->uid])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
                           </div>
                        </div>
                        @endif
                        @endforeach

                     </div>
                  </div>
                  
                  
               </div>
               </div>
               <div class="Rewrite_tutor_section mb-3">
                  <h4 class="text_orange">Reviews as Student <span class="icon_text ml-5 text_20">(16)</span></h4>
                  <p class="text_orange float-left mr-3 text_17">Communication Level<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
                  <p class="text_orange float-left mr-3 text_17">Teaching Skils<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
                  <p class="text_orange text_17">Recommended<i class="fa fa-star ml-2" aria-hidden="true"></i>4.8/8</p>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="images/user.png" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="images/flag.png"class="mt-2"style="height: 20px;">
                     <p class="text-dark d-inline-block font-weight-bold mt-2"style="position:relative;top: 5px;"> Pakistan
                     </p>
                  </div>
                  <div class="icon_text text_25 mt-3">
                     <span class="mr-3">Published</span>
                     <span class="mr-3">2 may 2017</span>
                  </div>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="images/user.png" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="images/flag.png"class="mt-2"style="height: 20px;">
                     <p class="text-dark d-inline-block font-weight-bold mt-2"style="position:relative;top: 5px;"> Pakistan
                     </p>
                  </div>
                  <div class="icon_text text_25 mt-3">
                     <span class="mr-3">Published</span>
                     <span class="mr-3">2 may 2017</span>
                  </div>
               </div>
               <div class="post_Section pb-3 mb-3 border-bottom">
                  <img src="images/user.png" height="30" width="30">
                  <span class="font-weight-bold ml-3">James</span>
                  <span><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span class="font-weight-bold">5</span>
                  <div class="text-dark font-weight-bold">
                     <img src="images/flag.png"class="mt-2"style="height: 20px;">
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