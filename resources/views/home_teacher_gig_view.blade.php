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
            
         </div>
      </div>
 





 <div class="container">

         <div class="row content_main">
           <div class="row" style="margin-left: 1%;">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong> Gigs Details:</strong> </label>

                </div>
                 
                </div>



          <div class="col-lg-12">


 
            <div class="card">
             
              <div class="card-body">
               
               <div class="row">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Overview:</strong> </label>
              
                </div>
                 
                </div>
      


                <div class="row">
                 <div class="col-lg-2">
                  <label><strong>Gig Title</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea name="gig_tittle" readonly  required class="form-control" rows="5">{{$gigs->gig_title}}</textarea>
                  
                </div> 
                </div>
                <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Category</strong> </label>

                </div>
                <div class="col-lg-10">


              <input type="text" name="category" value="{{$gigs->category->name}}" class="form-control" readonly="">

                 
                  
                </div> 
                </div>




                <div class="row mb-2" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Search Tag</strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="text" name="search_tag" readonly value="{{$gigs->search_tag}}" class="form-control" required>
                  
                </div> 
                </div>


                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                
         


                <div class="row">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Pricing:</strong> </label>

                </div>
                 
                </div>


             <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Available Timing From</strong> </label>

                </div>
                <div class="col-lg-10">
                <input type="datetime-local" readonly value="{{$gigs->from_time}}" name="from_time" class="form-control" required>
                  
                </div> 
                </div>




                <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Available Timing To </strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="datetime-local" readonly value="{{$gigs->to_time}}"  required name="to_time" class="form-control">
                  
                </div> 
                </div>




                <div class="row mb-2" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Per Hour Rate </strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="text" readonly value="{{$gigs->per_hour_rate}}"  name="per_hour_rate" class="form-control">
                  
                </div> 
                </div>


               <hr style="height:2px;border-width:0;color:gray;background-color:gray">


                <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Description@Faqs:</strong> </label>

                </div>
                 
                </div>

              <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Description</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea class="form-control" readonly required name="description" rows="5">{{$gigs->description}}</textarea>
                  
                </div> 
                </div>
        

 <hr style="height:2px;border-width:0;color:gray;background-color:gray">

           <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Requriments:</strong> </label>

                </div>
                 
                </div>




                <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Requirment</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea class="form-control" readonly  name="requirment" rows="5">{{$gigs->requirement}}</textarea>
                  
                </div> 
                </div>



                 <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Gallery:</strong> </label>

                </div>
                 
                </div>




                <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Upload Images:</strong> </label>

                </div>
                <div class="col-lg-10">
                  <img src="{{$gigs->image}}" style="width: 20%;">
                  
                  
                </div> 
                </div>


                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
 

              </div>





              </form>
              
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