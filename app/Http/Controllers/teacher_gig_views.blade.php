<!DOCTYPE html>
<!DOCTYPE html>
<html>
   <head>
      <title>Tutor Dashboard</title>
      <meta charset="utf-8" name="viewport"content="width=device-width,initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet"type="text/css"href="{{asset('asset/css/bootstrap-grid.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-reboot.min.css')}}">
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custom.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custom-switch.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/slick-theme.css')}}">
      <link rel="stylesheet"type="text/css"href="{{asset('asset/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
   </head>
   <body>
      <!-- header --> 
      <div class="container-fluid p-0">
         <div class="bg-black d-flex p-4 position-relative">
            <div class="logo">
               <a href="#">
               <img src="{{asset('asset/images/logo.png')}}">
               </a>
            </div>
            <div class="ml-auto mr-auto w-40 pt-2">
               <p class="text-white d-inline-block mr-4 text_20">Online Tutoring</p>
               <p class="text-white d-inline-block mr-4 text_20">inperson Tutoring</p>
               <p class="text-white d-inline-block text_20">Expert Q&A</p>
            </div>
            <div class="btn-group user_main">
               <a href="#" class="theme_color dropdown-toggle user_dropdown w-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-bars color-black menuIcon"></i>
               <i class="fa fa-user-circle"></i>
               </a>
               
            </div>
            <div class="child_menu tutor_menu">
               <ul class="d-flex">
                  <li>
                     <a href="#" class=" theme_color text_20">Dashboard</a>
                  </li>
                  <li class="dropdown nav_dropdown">
                     <a class="nav-link p-0 text_black text_20" href="#">Messages</a>
                     <div class="custom_dropdown">
                        <nav class="message_tabs">
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link text_black active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-bell"></i> Notification (0)</a>
                            <a class="nav-item nav-link text_black" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="far fa-envelope"></i> Inbox (0)</a>
                          </div>
                        </nav>
                        <div class="tab-content p-2" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p> 
                                <img src="images/ins1.png" class="img-fluid float-right">
                              </div>
                            </a>
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p> 
                                <img src="images/ins1.png" class="img-fluid float-right">
                              </div>
                            </a>
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p> 
                                <img src="images/ins1.png" class="img-fluid float-right">
                              </div>
                            </a>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p>
                              </div>
                            </a>
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p>
                              </div>
                            </a>
                            <a href="#" class="d-inline-block w-100 bg_lightgray p-2 mb-2">
                              <div class="float-left notification_img mr-2">
                                <img src="images/ins1.png" class="img-fluid">
                              </div>
                              <span class="text_black">Class notification here</span>
                              <div class="from_notification">
                                <p class="float-left text_black">4 hours</p>
                              </div>
                            </a>
                          </div>
                        </div>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Orders</a>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Upcoming Classes</a>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Earning</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- header end-->
      <!-- Wrapper -->
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
    max-width: 40%;"  class="user_image" >

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
                              <div class="mb-3" style="    margin-top: 30%;">
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
                                 <span class="icon_text" style="font-size:13px;">{{$user->address}}</span>
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
               <div class="course_text px-3">
                  <h5 class="text_orange mt-2">Tutor Gigs</h5>
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
                           <a href="{{route('user-gigs-details',['id'=>$g->id])}}" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
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
      <!-- Wrapper --> 
      <!-- Footer -->
      <footer class="footer">
         <div class="container pt-lg-5">
            <div class="row">
               <div class="col-md-3">
                  <ul class="footer-linksMain">
                     <li>
                        <a href="#">Information</a>
                     </li>
                     <li>
                        <a href="#">About Us</a>
                     </li>
                     <li>
                        <a href="#">Become a Tutor</a>
                     </li>
                     <li>
                        <a href="#">Testimonial & <br> Reviews</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="footer-linksMain">
                     <li>
                        <a href="#">Home Education</a>
                     </li>
                     <li>
                        <a href="#">Adult Learning</a>
                     </li>
                     <li>
                        <a href="#">Expact students</a>
                     </li>
                     <li>
                        <a href="#">Helpful Links</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3 footer-border">
                  <ul class="footer-linksMain">
                     <li>
                        <a href="#">Schools</a>
                     </li>
                     <li>
                        <a href="#">Staying Safe Online <br> Schools</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <div class="contact_details text-right">
                     <img src="{{asset('asset/images/footerLogo.png')}}" alt="footerLogo" class="img-fluid">
                     <p>Contact Us</p>
                     <p>+11 (0) 231 000 0000</p>
                     <p>support@someone.com</p>
                     <ul class="footerIcons_link mt-lg-5 d-flex float-right">
                        <li>
                           <a href="#">
                           <i class="fab fa-facebook-f"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fab fa-google"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fab fa-youtube"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <footer class="mini-footer p-3">
         <div class="container">
            <ul class="d-flex">
               <li>
                  <a href="#" class="text-white mr-3">Privacy Policy</a>
               </li>
               <li>
                  <a href="#" class="text-white mr-3">Trust & Security</a>
               </li>
               <li class="text-right w-80 text-white">
                  Copyright © 2020
               </li>
            </ul>
         </div>
      </footer>
      <!-- Footer -->
      <!-- Script Files -->
      <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script type="text/javascript"src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript"src="{{asset('asset/js/popper.min.js')}}"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function(){
           $(".nav_dropdown").on("click", function(){
             $(".custom_dropdown").show();
             //$("body").hide();
           });
         });
      </script>
      <!-- Script Files -->
   </body>
</html>