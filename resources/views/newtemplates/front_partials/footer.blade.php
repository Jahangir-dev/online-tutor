 <audio id="chat-alert-sound" style="display: none">
        <source src="{{ asset('sound/facebook_chat.mp3') }}" />
    </audio>        
        @include('notify::messages')
        <x:notify-messages />
        @notifyJs
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



       <script type="text/javascript"src="{{asset('asset/js/moment.min.js')}}"></script>
      <script type="text/javascript"src="{{asset('asset/js/custom_calendar.js')}}"></script>
      <!-- Script Files -->
   </body>
</html>