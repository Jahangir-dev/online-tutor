      @if(auth()->user()->hasAccess(['tutor']))
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
                  

                   <a href="{{route('tutor-gigs')}}" class="dropdown-item">Tutor Gigs</a>
                   <a href="{{route('logout')}}" class="dropdown-item">Logout</a> 
               </div>
            </div>




<div class="child_menu tutor_menu">
               <ul class="d-flex">
                  <li>
                     <a href="{{route('tutors-dashboard')}}" class="a text_20">Dashboard</a>
                  </li>
                  <li class="dropdown nav_dropdown">
                     <a class="nav-link a p-0 text_black text_20" href="{{route('messages')}}">Messages</a>
                     <div class="custom_dropdown">
                        
                        
                  </li>
                  <li>
                     <a href="{{route('tutor-orders')}}" class="text_black text_20">Orders</a>
                  </li>
                  <li>
                     <a href="{{route('tutor-classes')}}" class="text_black text_20">Upcoming Classes</a>
                  </li>
                  <li>
                     <a href="{{route('tutor-earning')}}" class="text_black text_20">Earning</a>
                  </li>
               </ul>
            </div>

   
           
         </div>
      </div>
      @elseif(auth()->user()->hasAccess(['student']))

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
                     <a href="{{route('students-dashboard')}}" class="theme_color  text_20">Dashboard</a>
                  </li>
                  <li>
                     <a href="{{route('messages')}}" class="text_black text_20">Messages</a>
                  </li>
                  <li>
                     <a href="{{route('student-orders')}}" class="text_black text_20">Orders</a>
                  </li>
                  <li>
                     <a href="#" class="text_black text_20">Upcoming Classes</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      @endif