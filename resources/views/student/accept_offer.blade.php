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
                     <img src="{{$student->image}}" style="border-radius: 5%; height: auto;
    width: 55%;margin-left: 6rem;" alt ="User images" height="180px" width="180px"class="user_image" >
                     <h4 class="tutor_name">{{$student->name}}</h4>
                     <div class="w-100 bg_lightgray">
                        <p class="px-2 text_orange text_15">
                           {{$student->about_yourself}}
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
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <span class="icon_text">Last Class</span>
                              </div>
                           </div>
                           <div class="col-6 text-left pl-5 text_17">
                              <div class="mb-3">
                                 <span class="icon_text" style="font-size:13px;"><strong>{{$student->address}}</strong> </span>
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
                {{$student->description}}
               </div>
            </div>
            <div class="col-7">
               <div class="courses_section">
                  <div class="course_text px-3">
                     <h5 class="text_orange mt-2" style="font-size:20px;">Recent Requests</h5>
                  </div>
                  
                     
                
                  <div class="row">
                     
                     <div class="col-4">
                        <div class="student_courseImg">
                           <img src="{{$offer->gig_details->image}}" alt="student_courseImg" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="requirements_heading">
                           <h2 class="text_orange">Requirements</h2>
                        </div>
                        <div class="requirements_text text_orange text_20">
                           <p>{{$offer->gig_details->gig_title}}</p>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-5">
                     <div class="col-6">
                        <div class="text_orange text_20 pl-lg-5">
                           <p>Budget</p>
                           <p>Expected Time period</p>
                           <p>Time Slot</p>
                           <p>Offer Status</p>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text_orange text_20 pl-lg-5">
                           <p>{{$offer->price}}</p>
                           <p>{{date ("h:i:sa",strtotime($offer->from_offerTime))}}</p>
                           <p>{{date ("h:i:sa",strtotime($offer->to_offerTime))}}</p>
                            <p>  @if($offer->status==0)<button class="btn btn-secondary">{{'Pending Offer'}}</button> 
                                @elseif ($offer->status==1) <button class="btn btn-success">{{'Approved Offer'}}</button>
                                @elseif($offer->status) <button class="btn btn-danger">{{'Declined Offer'}}</button>
                                 @endif</p>
                        </div>
                     </div>
                     @if($offer->status==0)
                     <div class="accept_reqBtn w-100 text-center mt-5">
                        <a href="{{route('accept-save',['id'=>$offer->id,'type'=>'Approve'])}}" style="background-color: steelblue;" class="btn  w-75 rounded-pill mt-3 bg_orange text-white text_20">Accept request</a>
                     </div>

                     <div class="accept_reqBtn w-100 text-center mt-5">
                        <a href="{{route('accept-save',['id'=>$offer->id,'type'=>'Decline'])}}" style="background-color: steelblue;" class="btn  w-75 rounded-pill mt-3 bg_orange text-white text_20">Reject request</a>
                     </div>
                     @else
                     <div class="accept_reqBtn w-100 text-center mt-5">
                        <a href="{{route('students-dashboard')}}" style="background-color: steelblue;" class="btn  w-75 rounded-pill mt-3 bg_orange text-white text_20">Go Back</a>
                     </div>
                     @endif


                     
                  </div>
               </div>
            </div>
            <div class=" offset-lg-5 col-7 mt-3">
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