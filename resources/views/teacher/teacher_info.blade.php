<!DOCTYPE html>
<html>
   <head>
      <title>Become Tutor1</title>
      <meta charset="utf-8" name="viewport"content="width=device-width,initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet"type="text/css"href="css/bootstrap-grid.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
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
               <img src="{{asset('asset/images/footerLogo.png')}}">
               </a>
            </div>
            <div class="ml-auto mr-auto">
               <div class="tutorHeading text-white">
                 <h1>Join To Explore</h1>
               </div>
            </div>
            <div class="btn-group user_main">
               <a href="#" class="theme_color dropdown-toggle user_dropdown w-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-bars color-black menuIcon"></i>
               <i class="fa fa-user-circle"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
               </div>
            </div>
         </div>
      </div>
      <!-- content -->
      <div class="container-fluid p-lg-0">
         <div class="tutor_banner position-relative">
            <div class="join_banner_overlay">
               <form class="join_tutor_form w-40 m-auto" method="post" action="{{route('teacher-save-info')}}" enctype="multipart/form-data">
                  @csrf
                <div class="theme_color text-center mt-3">
                  <h1>Become a Tutor</h1>
                  <h3 class="text-white">Personal Information</h3>
                </div>
                  <div class="form-group">
                     <label for="subject" class="text_20 text-white">Name</label>
                     <input type="text" name="name" class="form-control" id="student_name" placeholder="Name">
                  </div>
                  <div class="form-group">
                     <label for="student_name" class="text_20 text-white">Father;s Name</label>
                     <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father Name">
                  </div>
                  <div class="form-group">
                     <label for="student_email" class="text_20 text-white">Email</label>
                     <input type="email" name="email" class="form-control" id="student_email" placeholder="email...">
                  </div>



                  <div class="form-group">
                     <label for="password" class="text_20 text-white">Password</label>
                     <input type="password" name="password" class="form-control"  placeholder="Password.......">
                  </div>
                  <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">CNIC ID</label>
                     <input type="text" name="cnic" class="form-control" id="cnic_id2" placeholder="0909999900000...">
                  </div>
                  <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">Address</label>
                     <input type="text" name="address" class="form-control" id="cnic_id" placeholder="Address...">
                  </div>
                   <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">Phone No</label>
                     <input type="text" name="phone_number" class="form-control" id="cnic_id" placeholder="Address...">
                  </div>


                  <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">Upload Image</label>
                     <input type="file" name="image" class="form-control" >
                  </div>



                  <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">Tell About Yourself:</label>
                     <input type="text" name="tell_about_yourselfs" maxlength="40" class="form-control"  placeholder="Tell About Yourself...">
                  </div>



                  <div class="form-group">
                     <label for="tutor_id" class="text_20 text-white">Description</label>
                     <textarea class="form-control" style="    background-color: transparent;
    color: #cecece !important;
    border-color: #ced4da !important;" rows="5" maxlength="100" name="description"></textarea>
                  </div>
                  <div class="form-group text-center">
                     <button type="submit" class="explore_btn">Continue</button>
                  </div>
               </form>
            </div>
         </div>
      </div>






      <!-- content -->
      <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script type="text/javascript"src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript"src="{{asset('asset/js/popper.min.js')}}"></script>
      <script src="{{asset('asset/js/bootstrap.min.min.js')}}"></script>
      <script src="{{asset('asset/js/slick.js')}}"></script>
      <script>
         $(".lazy").slick({
           lazyLoad: 'ondemand', // ondemand progressive anticipated
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         });
      </script>
   </body>
</html>