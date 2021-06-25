<!DOCTYPE html>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <meta charset="utf-8" name="viewport"content="width=device-width,initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet"type="text/css"href="{{asset('asset/css/bootstrap-grid.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-reboot.min.css')}}">
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custom.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custom_calendar.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/css/slick-theme.css')}}">
      <link rel="stylesheet"type="text/css"href="{{asset('asset/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="container-fluid p-0">
         <div class="bg-black d-flex p-4 position-relative">
            <div class="logo">
               <a href="#">
               <img src="{{asset('asset/images/logo.png')}}">
               </a>
            </div>
            <div class="ml-auto mr-auto w-40 pt-2">
              <a href="{{route('online-tutor')}}"> <p class="text-white d-inline-block mr-4 text_20">Online Tutoring</p></a>
               <p class="text-white d-inline-block mr-4 text_20">inperson Tutoring</p>
              <a href="{{route('expert-qa')}}"> <p class="text-white d-inline-block text_20">Expert Q&A</p></a>

            </div>
            <div>
            <a href="{{route('teacher-info')}}" style="margin-left: -20%;" class="text-white d-inline-block text_20">Become a Tutor</a>   
            </div>
            
            <div class="btn-group user_main">
               <a href="#" class="theme_color dropdown-toggle user_dropdown w-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-bars color-black menuIcon"></i>
               <i class="fa fa-user-circle"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
              <a href="{{route('login')}}" class="dropdown-item">Login</a> 
                </div>
            </div>
            <div class="child_menu home_child_menu p-0">
              <div class="position-relative">
               <ul class="child_menu_list d-flex">
                  <li>
                     <a href="#" class="theme_color text_20">Subjects</a>
                  </li>
                  <li class="start_date">
                     <a href="#" class="theme_color text_20">Start Date</a>
                  </li>
                  <li class="End_date">
                     <a href="#" class="theme_color text_20">End Date</a>
                  </li>
                  <li>
                     <a href="#" class="theme_color text_20">About</a>
                  </li>
                  <li>
                     <a href="#" class="theme_color text_20">Contact Us</a>
                  </li>
                  <li>
                     <a href="#" class="text-white text_20">
                      <i class="fas fa-search mr-2"></i>Search</a>
                  </li>
               </ul>
               <div class="courses_section mb-4 start_calendar position-absolute w-100">
                  <nav class="schedule_tabs">
               <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active text_black text_20" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">calendar</a>
                  <a class="nav-item nav-link text_black text_20" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">I'm Flexible</a>
               </div>
            </nav>
            <div class="tab-content pt-3" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div id="calendar"></div>
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="flexible text-center">
                     <h3>Tutor For Three Days</h3>
                     <div class="d-flex select_day">
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                     </div>
                      <div class="select_month">
                        <h4>Month of March</h4>
                      </div>
                  </div>
                  <div class="month_box d-flex">
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">March</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">April</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">May</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">June</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">July</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">August</p>
                        </div>
                      </div>
               </div>
            </div>
               </div>
               <div class="courses_section mb-4 end_calendar position-absolute w-100">
                  <nav class="schedule_tabs">
               <div class="nav nav-tabs nav-fill" id="nav-tab2" role="tablist">
                  <a class="nav-item nav-link active text_black text_20" id="nav-home-tab" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true">calendar</a>
                  <a class="nav-item nav-link text_black text_20" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile3" role="tab" aria-controls="nav-profile" aria-selected="false">I'm Flexible</a>
               </div>
            </nav>
            <div class="tab-content pt-3" id="nav-tabContent2">
               <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div id="calendar2" class="pt-0"></div>
               </div>
               <div class="tab-pane fade" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab2">
                  <div class="flexible text-center">
                     <h3>Tutor For Three Days</h3>
                     <div class="d-flex select_day">
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                       <div class="day_duration w-100 mr-2">
                         <a href="javascript:void(0)" class="text_black rounded-pill p-1 border w-100 d-inline-block flexible_days">3 days</a>
                       </div>
                     </div>
                      <div class="select_month">
                        <h4>Month of March</h4>
                      </div>
                  </div>
                  <div class="month_box d-flex">
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">March</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">April</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">May</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">June</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">July</p>
                        </div>
                        <div class="text-center month_box_inner">
                          <i class="fas fa-calendar-alt"></i>
                          <p class="text_20">August</p>
                        </div>
                      </div>
               </div>
            </div>
               </div>
             </div>
            </div>
         </div>
      </div>
      <!-- content -->
      <div class="container-fluid p-lg-0">
         <div class="home_banner position-relative">
            <div class="banner_overlay text-center">
               <div class="home_banner_text text-white">
                  <h1>Guided online tutoring through online chat and email</h1>
                  <h2 class="font-weight-bold mt-3">TUTORING MADE SIMPLE</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="home_exploreHeading mb-5 mt-5 text_orange">
            <h3>Explore Tutoring</h3>
            <p class="text_black">Learn what you need</p>
         </div>
         <div class="row">

            @foreach($categories as  $c)
           <div class="col-3">
            
                         
               <div class=" text-center">
                 <img src="{{$c->image}}" alt="offer-Image" style=" height: 250px;width: 100%;" class="img-fluid">
                 <p class="font_22">{{$c->name}}</p>
               </div>

            </div>
             @endforeach
            
            
            <div class="col-3">
               <div class="explore_offers text-center">
                 <img src="{{asset('asset/images/explore_tutor.png')}}" alt="offer-Image" class="img-fluid">
                 <a href="{{route('more-categories')}}" class="font_22">Explore more Categories</a>
                <!--  <p class="font_22">Explore more Categories</p> -->
               </div>
            </div>
         </div>
          <div class="home_exploreHeading mb-5 mt-5 text_orange">
            <h3>Explore Tutoring</h3>
            <p class="text_black text_25">Learn what you need</p>
          </div>
          <div class="row">
          @foreach($gigs as $g) 
            <div class="col-3 pr-0 mb-5">
              <div class="related_tutors float-left mr-2">
                <img src="{{$g->image}}" style="width:100%;height: 200px;" alt="home-related" class="img-fluid">
              </div>
              <div class="float-left text_25 mt-3">
               <a href="{{route('teacher-gigs-detail',['id'=>$g->tutor_id])}}"> <p class="text_orange" style="font-size: 22px;">{{$g->users->name}}</p></a>
                <p class="text_black">{{$g->teachersubject->subject->name}}</p>
              </div>
            </div>
      
            @endforeach()
            
          </div>
          <div class="home_exploreHeading mb-5 mt-5 text_orange">
            <h3>HOW IT WORKS</h3>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="how_itWorks_Text">
                <h4 class="text_black">First: <span class="text_orange">Sign in</span></h4>
                <p class="text_20">Sign in with Email with your Tutoring needs and we match the most suitably qualified tutors۔۔۔</p>
              </div>
            </div>
            <div class="col-4">
              <div class="how_itWorks_Text">
                <h4 class="text_black">Second: <span class="text_orange">Search for tutor</span></h4>
                <p class="text_20">Sign in with Email with your Tutoring needs and we match the most suitably qualified tutors۔۔۔</p>
              </div>
            </div>
            <div class="col-4">
              <div class="how_itWorks_Text">
                <h4 class="text_black">Third: <span class="text_orange">Hire a Tutor</span></h4>
                <p class="text_20">Sign in with Email with your Tutoring needs and we match the most suitably qualified tutors۔۔۔</p>
              </div>
            </div>
          </div>
          <div class="become_tutor text-white">
            <h5>Your skill is worth shairing</h5>
            <p>Become a Tutor to explore your skills </p>
            <a href="{{route('teacher-info')}}" class="tutor_btn mt-4 d-inline-block bg_orange text-white">Become a Tutor</a>
          </div>
          <div class="experience_tutor mb-5 mt-5 text_orange">
            <h5>Experience Our Tutoring</h5>
            <p class="text_black">Unique Tutoring with local and Online tutors</p>
         </div>
         <div class="row">
           <div class="col-4">
             <div class="expert_tutor">
               <img src="{{asset('asset/images/expert_img.png')}}" alt="offer-Image" class="img-fluid">
               <h6>Online Tutoring</h6>
               <p class="text_25">Explore more Categories</p>
             </div>
           </div>
           <div class="col-4">
             <div class="expert_tutor">
               <img src="{{asset('asset/images/expert_img.png')}}" alt="offer-Image" class="img-fluid">
               <h6>Inperson Tutoring</h6>
               <p class="text_25">Explore more Categories</p>
             </div>
           </div>
           <div class="col-4">
             <div class="expert_tutor">
               <img src="{{asset('asset/images/expert_img.png')}}" alt="offer-Image" class="img-fluid">
               <h6>Expert Q&A</h6>
               <p class="text_25">Explore more Categories</p>
             </div>
           </div>
         </div>
      </div>
      
      <!-- slider -->
      <div class="slider_main position-relative">
        <div class="container mt-lg-5">
           <div class="tutor-experience-main mt-5">
              <div class="instrument w-100 text-center">
                 <h2 style="text-transform: uppercase; font-weight: normal;">Tutors Qualification & Experience</h2>
              </div>
              <section class="lazy slider" data-sizes="50vw">
                <div class="tutor_imgMain">
                  <div class="tutorImgInner">
                    <img src="{{asset('asset/images/ins4.png')}}" alt= "instrument-img" class="img-fluid">
                  </div>
                  <p class="text-center">Hello - Have you listen to my tutor profile.</p>
                </div>
                <div class="tutor_imgMain">
                  <div class="tutorImgInner">
                    <img src="{{asset('asset/images/ins4.png')}}" alt= "instrument-img" class="img-fluid">
                  </div>
                  <p class="text-center">Hello - Have you listen to my tutor profile.</p>
                </div>
                <div class="tutor_imgMain">
                  <div class="tutorImgInner">
                    <img src="{{asset('asset/images/ins4.png')}}" alt= "instrument-img" class="img-fluid">
                  </div>
                  <p class="text-center">Hello - Have you listen to my tutor profile.</p>
                </div>
                <div class="tutor_imgMain">
                  <div class="tutorImgInner">
                    <img src="{{asset('asset/images/ins4.png')}}" alt= "instrument-img" class="img-fluid">
                  </div>
                  <p class="text-center">Hello - Have you listen to my tutor profile.</p>
                </div>
              </section>
           </div>
           <div class="row contact_now">
             <div class="col-6">
               <div class="video_section mt-5">
                 <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
               </div>
             </div>
             <div class="col-6">
              <div class="contact_form text-center p-5">
                <form method="post" action="{{route('contact-us-save')}}">
                  @csrf
                  <div class="formHeading">
                    <h6 class="text_20 mb-3">Contact Us Now</h6>
                  </div>
                   <div class="form-group">
                     <input type="text" name="name" required class="form-control" id="contact_name" placeholder="Name">
                   </div>
                   <div class="form-group">
                     <input type="tel" name="phone" required class="form-control" id="contact_tel" placeholder="phone Number">
                   </div>
                   <div class="form-group">
                     <input type="email" name="email" required class="form-control" id="contact_email" placeholder="E-mail">
                   </div>
                   <button type="submit" class="btn bg_green p-3 w-100 text-center text-white text_20">Submit Now</button>
                 </form>
               </div>
             </div>
           </div>
        </div>
      </div>
      <!-- slider -->

      <!-- content -->
      
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
      <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script type="text/javascript"src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript"src="{{asset('asset/js/popper.min.js')}}"></script>
      <script src="{{asset('asset/js/bootstrap.min.min.js')}}"></script>
      <script src="{{asset('asset/js/slick.js')}}"></script>
      <!-- calendar -->
      <script type="text/javascript"src="{{asset('asset/js/moment.min.js')}}"></script>
      <script type="text/javascript"src="{{asset('asset/js/custom_calendar.js')}}"></script>
      <!-- calendar -->
      <script>
        $(document).ready(function() {
            $(".home_child_menu li").click(function () {
            $(".home_child_menu li").removeClass("active_li");
            $(this).addClass("active_li");     
          });
            $(".day-number").click(function () {
            $(".day-number").removeClass("active_date");
            $(this).addClass("active_date");
          });
            $(".flexible_days").click(function () {
            $(".flexible_days").removeClass("flexible_date");
            $(this).addClass("flexible_date");    
          });
            $(".month_box_inner").click(function () {
            $(".month_box_inner").removeClass("flexible_date");
            $(this).addClass("flexible_date");    
          });
            /*$(".start_date").on('click', function() {
              alert("hi");
            $(".start_calendar").css("opacity": "1","transition": "all .25s ease-in-out");
          });*/
          $(".start_date").on('click', function(){ 
            // same as first one
            //alert("hello world");
            $(".start_calendar").show();
            $(".end_calendar").hide();
            // do your stuff
          });
          $(".End_date").on('click', function(){ 
            // same as first one
            //alert("hello world");
            $(".start_calendar").hide();
            $(".end_calendar").show();
            // do your stuff
          });
        });
         $(".lazy").slick({
           lazyLoad: 'ondemand', // ondemand progressive anticipated
           infinite: true
         });
      </script>
   </body>
</html>
<style>
  .home_child_menu li{
    padding: 20px;
    cursor: pointer;
  }
  .child_menu{
    background-color: #e8e8e8;
  }
  .home_child_menu .active_li{
    background: #fff;
    border-radius: 100px;
    box-shadow: 1px 0px 5px rgb(0 0 0 / 40%);
  }
  .home_child_menu li:last-child{
    background: #f60;
    border-radius: 100px;
    box-shadow: none;
    padding: 10px;
    margin: 10px;
    box-shadow: none;
  }
  .home_child_menu li:last-child:hover{
    box-shadow: none;
    color: #ffffff;
  }
  .home_child_menu li:last-child a:hover{
    color: #ffffff !important;
  }
  .start_calendar,.end_calendar{
    box-shadow: none;
    background-color: #fff;
    top: 80px;
    left: 0px;
    min-height: 20%;
    border-radius: 60px;
    display: none;
  }
  .details{
    display: none;
  }
  #calendar{
    height: auto;
  }
  .active_date{
        background-color: #000000;
    color: #fff;
    border-radius: 100%;
    height: 40px;
    width: 40px;
    margin: 0 auto;
  }
  .month .week:first-child .day .day-name{
    display: block;
  }
  .month .week .day .day-name{
    display: none;
  }
  .day-events{
    display: none;
  }
  #calendar2{
    padding: 20px;
  }
  .header{
    margin: 0 auto;
  }
  .flexible{
    width: 500px;
    margin: 0 auto;
  }
  .flexible_date{
    border-color: #000000 !important;
  }
  .flexible h3{
    font-size: 30px;
    margin: 20px 0;
  }
  .select_month{
    margin:60px 0;
  }
  .select_month h4{
    font-size: 30px;
  }
  .month_box_inner{
    border: 1px solid #c8c8c8;
    padding: 10px 30px;
    border-radius: 15px;
    margin-right: 10px;
  }
  .month_box_inner i{
    font-size: 48px;
  }
  .month_box {
    width: 700px;
    margin: 0 auto 30px auto;
  }
</style>