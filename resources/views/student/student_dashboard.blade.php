<!DOCTYPE html>
<html>
   <head>
      <title>Student Completed Orders</title>
      <meta charset="utf-8" name="viewport"content="width=device-width,initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet"type="text/css"href="{{asset('asset/css/bootstrap-grid.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-reboot.min.css')}}">
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
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
               <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
                   <a href="{{route('logout')}}" class="dropdown-item">Logout</a> 
               </div>
            </div>
            <div class="child_menu">
               <ul class="child_menu_list">
                  <li>
                     <a href="{{route('student-home')}}" class="text_black text_20 active">Dashboard</a>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Messages</a>
                  </li>
                  <li>
                     <a href="#" class="theme_color text_20">Orders</a>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Upcoming Classes</a>
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
                     <img src="{{asset('asset/images/student_img.png')}}" alt ="User images" height="180px" width="180px"class="user_image" >
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
                                 <i class="fa fa-mouse-pointer" style="margin-top: 25%;" aria-hidden="true"></i>
                                 <span class="icon_text">Tutor Service</span>
                              </div>
                              <div class="mb-3">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <span class="icon_text">Last Class</span>
                              </div>
                           </div>
                           <div class="col-6 text-left pl-5 text_17">
                              <div class="mb-3">
                                 <span class="icon_text">{{$student->address}}</span>
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
                {{$student->description}}
               </div>
            </div>
            <div class="col-7">
               <div class="course_text px-3">
                  <h5 class="text_orange mt-2">Completed Orders</h5>
               </div>
               <div class="courses_section mb-4">
                  <ul class="students_list">
                     <li>
                        <a href="#" class="text_20 text_black w-25 float-left"> New</a>
                     </li>
                     <li>
                        <a href="#" class="text_20 text_black w-25 float-left"> Active</a>
                     </li>
                     <li>
                        <a href="#" class="text_20 text_black  w-25 float-left"> Delivered</a>
                     </li>
                     <li>
                        <a href="#" class="text_20 text_orange w-25 float-left"> Completed</a>
                     </li>
                  </ul>
                  <div class="row">
                    @foreach($offer as $o) 
                     <div class="col-4 mb-4 mt-4">
                        <div class="text_orange text-center student_course_details" style="width:110%;">
                        <div class="position-relative">
                           <img src="{{$o->from_user_d->image}}" style="height:150px;width:100%;" class="img-fluid" alt="student course">
                           <span class="text_17 text-white subject_name position-absolute">Organic Chemistry</span>
                        </div>
                           <div class="form-group">
                              <span class="w-50 float-left">Amount</span>
                              <span class="w-50 float-right">{{$o->price}}</span>
                           </div>
                           <div class="form-group">
                              <span class="w-50 float-left">Duration From</span>
 



                              <span class="w-50 float-right"> {{date('Y-m-d H:i A',strtotime($o->from_offerTime))}}</span>


                               <span class="w-50 float-left">Duration To</span>
 



                              <span class="w-50 float-right"> {{date('Y-m-d H:i A',strtotime($o->to_offerTime))}}</span>
                           </div>
                           <a href="#" class="course_detailBtn mt-2 mb-2 d-inline-block bg_orange text_17 text-white">View Details</a>
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
      <!-- <script type="text/javascript"src="js/bootstrap.min.js"></script> -->
      <script type="text/javascript"src="{{asset('asset/js/popper.min.js')}}"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <!-- Script Files -->
   </body>
</html>