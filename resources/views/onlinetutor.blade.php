<!DOCTYPE html>
<html>
<!-- <title>Study Space</title> -->
   <head>
      <title>Online Tutor</title>
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
      <div class="container-fluid p-0">
         <div class="bg-black d-flex p-4">
            <div class="logo">
               <a href="#">
               <img src="{{asset('asset/images/logo.png')}}">
               </a>
            </div>
            <div class="ml-auto mr-auto w-45">
               <form>
                  <div class="input-group">
                     <input class="form-control rounded-pill rounded-right headSearch" type="text" placeholder="Search by subject" id="search-subject">
                     <input class="form-control rounded-pill rounded-left pr-5" type="text" placeholder="Search Tutor by Name" id="search-tutor">
                     <a href="#" class="input-group-append searhIcon">
                     <i class="fa fa-search text-white"></i>
                     </a>
                  </div>
               </form>
            </div>
            <a href="{{route('teacher-info')}}">
            <span class="text-white mr-5" style="font-weight:bold;margin-top: 30px;">BECOME A TUTOR</span>
            </a>
            <div class="btn-group user_main">
               <a href="#" class="theme_color dropdown-toggle user_dropdown w-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-bars color-black menuIcon"></i>
               <i class="fa fa-user-circle"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 
                  <a href="{{route('login')}}" class="dropdown-item">Login</a>
               </div>
            </div>
         </div>
      </div>
      <!-- banner -->
      <div class="container-fluid">
         <span class="theme_color arrowleft">
         <i class="fa fa-arrow-left"></i>
         </span>
         <div class="row">
            <div class="col-lg-6">
               <div class="banner_text">
                  <h1 style="margin-top: 5rem;">Online <br> Tutoring</h1>
                  <p>Learn Without leaving your homes</p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="banner_img">
                  <img src="{{asset('asset/images/banner.png')}}">
               </div>
            </div>
         </div>
      </div>
      <!-- banner -->
      <!-- content -->
      <div class="container mt-lg-5">
         <div class="btn-group mr-4">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Course
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <button class="dropdown-item" type="button">Action</button>
               <button class="dropdown-item" type="button">Another action</button>
               <button class="dropdown-item" type="button">Something else here</button>
            </div>
         </div>
         <div class="btn-group mr-4">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tutor Details
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <button class="dropdown-item" type="button">Action</button>
               <button class="dropdown-item" type="button">Another action</button>
               <button class="dropdown-item" type="button">Something else here</button>
            </div>
         </div>
         <div class="btn-group mr-4">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Budget
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <button class="dropdown-item" type="button">Action</button>
               <button class="dropdown-item" type="button">Another action</button>
               <button class="dropdown-item" type="button">Something else here</button>
            </div>
         </div>
         <div class="btn-group mr-5">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Course Time
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <button class="dropdown-item" type="button">Action</button>
               <button class="dropdown-item" type="button">Another action</button>
               <button class="dropdown-item" type="button">Something else here</button>
            </div>
         </div>
         <div class="btn-group mr-4 ml-5">
            <div class="switchToggle">
               <input type="checkbox" id="switch1">
               <label for="switch1">Toggle</label>
               <span>Pro tutor</span>
            </div>
         </div>
         <div class="btn-group mr-4">
            <div class="switchToggle">
               <input type="checkbox" id="switch2">
               <label for="switch2">Toggle</label>
               <span>Local tutor</span>
            </div>
         </div>
         <div class="btn-group mr-4">
            <div class="switchToggle">
               <input type="checkbox" id="switch3">
               <label for="switch3">Toggle</label>
               <span>Online tutor</span>
            </div>
         </div>
         <div class="instrument-main mt-5">
            <div class="instrument">
               <h2>Pro tutor</h2>
            </div>
<section class="center slider">
    @foreach($proteacher as $t) 
   <div class="slider_main">
      
      <div class="slider_innerImg position-relative">

         <img src="{{$t->image}}" style="width:100%;height: 180px;" alt= "instrument-img" class="img-fluid">
        <a href="{{route('pro-teacher-gig',['id'=>$t->id])}}"> <span style="    background: hsl(0deg 0% 0% / 64%);
    color: #fff;
    padding: 2px 10px;
    border-radius: 20px;
    position: absolute;
    right: 0px;
    bottom: 5px;
    left: 10px;">{{$t->teachergigs->gig_title}}</span></a>
      </div>
      <div class="d-flex name_detials mt-1">
         <p>{{$t->name}}</p>
         <ul class="stars mb-0">
            <li>
               <a href="#">
                  <i class="fas fa-star"></i>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class="fas fa-star"></i>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class="fas fa-star"></i>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class="fas fa-star"></i>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class="fas fa-star"></i>
               </a>
            </li>
         </ul>
         <span class="ml-2">5/5</span>
      </div>

      <div class="d-flex course_detail">
         <span>Pro Tutor</span>
         <span class="ml-4">Start from {{$t->teachergigs->per_hour_rate}}</span>
      </div>
       
   </div>
   @endforeach
</section>




         </div>
         <div class="language-main mt-5">
            <div class="instrument">
               <h2>Tutors for Home</h2>
            </div>
            <section class="center slider">
               @foreach($gigs['Home'] as $i)
               <div class="slider_main">
                  <div class="slider_innerImg position-relative">
                     <img src="{{$i->image}}" style="width:100%;height:200px;" alt= "instrument-img" class="img-fluid">
                   <a href="{{route('teacher-home-gigs',['id'=>$i->id])}}">  <span style="    background: hsl(0deg 0% 0% / 64%);
    color: #fff;
    padding: 2px 10px;
    border-radius: 20px;
    position: absolute;
    right: 0px;
    bottom: 5px;
    left: 10px;">{{$i->gig_title}}</span></a>
                  </div>
                  <div class="d-flex name_detials mt-1">
                     <p>{{$i->users->name}}</p>
                     <ul class="stars mb-0">
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                     </ul>
                     <span class="ml-2">5/5</span>
                  </div>
                  <div class="d-flex course_detail">
                     <span>Pro Tutor</span>
                     <span class="ml-4">Start from {{$i->per_hour_rate}}</span>
                  </div>
               </div>
               
               
               
               
               @endforeach()
               
               
               
               
            </section>
         </div>
         <div class="school-main mt-5">
            <div class="instrument">
               <h2>New Tutors</h2>
            </div>
            <section class="center slider">
               @foreach($teacher as $t)
               <div class="slider_main">
                  <div class="slider_innerImg position-relative">
                     <img src="{{$t->image}}" style="width: 100%; height:170px;" alt= "instrument-img" class="img-fluid">
                    <a href="{{route('new-teacher-view',['id'=>$t->id])}}"><span style="    background: hsl(0deg 0% 0% / 64%);
    color: #fff;
    padding: 2px 10px;
    border-radius: 20px;
    position: absolute;
    right: 0px;
    bottom: 5px;
    left: 10px;">{{$t->about_yourself}}</span></a>
                  </div>
                  <div class="d-flex name_detials mt-1">
                     <p>{{$t->name}}</p>
                     <ul class="stars mb-0">
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           </a>
                        </li>
                     </ul>
                     <span class="ml-2">5/5</span>
                  </div>
                  
               </div>
               
               
               
               
               
               
               
               
               @endforeach()
            </section>
         </div>
         <div class="tutor-main mt-5">
            <div class="instrument">
               <h2>New Tutors This Week</h2>
            </div>
            <section class="new-tutor slider">
               
               <div class="slider_main">
                  @foreach($teacher as $t)
                  <div class="slider_innerImg tutorSlider position-relative">
                    <a href="{{route('new-teacher-view',['id'=>$t->id])}}"><img src="{{$t->image}}" style="width: 100%;
    height: 220px;" alt= "instrument-img" class="img-fluid"></a>
                  </div>
               </div>
               @endforeach
            </section>
         </div>
         <div class="tutor-experience-main mt-5 mb-4">
            <div class="instrument w-100 text-center">
               <h2 style="text-transform: uppercase;">Tutors Qualification & Experience</h2>
            </div>
            <div class="tutorImgInner">
               <img src="{{asset('asset/images/ins4.png')}}" alt= "instrument-img" class="img-fluid">
            </div>
            <p class="text-center">Hello - Have you listen to my tutor profile.</p>
         </div>
      </div>
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
      <!-- <script type="text/javascript"src="js/bootstrap.min.js"></script> -->
      <script type="text/javascript"src="{{asset('asset/js/popper.min.js')}}"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script src="{{asset('asset/js/slick.js')}}"></script>
      <script>
         $(".center").slick({
           dots: false,
           infinite: true,
           centerMode: true,
           slidesToShow: 5,
           slidesToScroll: 3
         });
         $(".new-tutor").slick({
           dots: true,
           infinite: true,
           centerMode: true,
           slidesToShow: 3,
           slidesToScroll: 3
         });
         $(".lazy").slick({
           lazyLoad: 'ondemand', // ondemand progressive anticipated
           infinite: true
         });
      </script>
   </body>
</html>