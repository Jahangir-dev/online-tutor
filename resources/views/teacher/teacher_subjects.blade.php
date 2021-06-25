<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
      <title>Become Tutor 2</title>
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
               <form class="join_tutor_form w-40 m-auto" method="post" action="{{route('teacher-subject-save')}}">
                @csrf
                <div class="theme_color text-center mt-3">
                  <h1>Become a Tutor</h1>
                  <h3 class="text-white">Subjects You Want To Teach</h3>
                </div>
                  <div class="form-group">
                     <label for="subject" class="text_20 text-white">Subject 1</label>
                     <div class="input-group mb-3">
                       <div class="dropdown w-100 subject_dropdown">
   <input type="hidden" name="user_id" value="{{$user_id}}">


                         <select name="subject1_id" style="background-color: transparent;
    color: #ada5a5 !important;
    border-color: #ced4da !important;" class="form-control">
                             <option value="{{Null}}">Choose</option>
                             @foreach($subjects as $s)
                             <option value="{{$s->id}}">{{$s->name}}</option>
                             @endforeach()
                           </select>
                         
                       </div>
                     </div>
                  </div>
                  <label class="text_20 text-white">Timings</label>
                  <div class="d-flex">
                     <div class="form-group w-50 mr-2">
                          <input type="time" name="from_subject1" id="timing" class="form-control" name="timing">
                     </div>
                     <div class="form-group w-50">
                          <input type="time" name="to_subject1" id="timing2" class="form-control" name="timing">
                     </div>
                  </div>

                  <!-- Subject 2 -->
                  <div class="form-group">
                     <label for="subject" class="text_20 text-white">Subject 2</label>
                     <div class="input-group mb-3">
                       <div class="dropdown w-100 subject_dropdown">
                        
                               <select name="subject2_id" style="background-color: transparent;
    color: #ada5a5 !important;
    border-color: #ced4da !important;" class="form-control">
                             <option value="{{Null}}">Choose</option>
                             @foreach($subjects as $s)
                             <option value="{{$s->id}}">{{$s->name}}</option>
                             @endforeach()
                           </select>
                       </div>
                     </div>
                  </div>
                  <label class="text_20 text-white">Timings</label>
                  <div class="d-flex">
                     <div class="form-group w-50 mr-2">
                          <input type="time" name="from_subject2" id="timing3" class="form-control" name="timing">
                     </div>
                     <div class="form-group w-50">
                          <input type="time" name="to_subject2" id="timing4" class="form-control" name="timing">
                     </div>
                  </div>

                  <div class="form-group text-center">
                     <button type="submit" class="explore_btn">Go to Profile</button>
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