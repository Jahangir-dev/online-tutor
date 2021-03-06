<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->


	<!-- Sidebar content -->
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="card-body">
				<div class="media">
					<div class="mr-3">
						<a href="#"><img src="{{asset('global_assets/images/demo/users/face11.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
					</div>

					<div class="media-body">
						<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
						<div class="font-size-xs opacity-50">
						</div>
					</div>

					<div class="ml-3 align-self-center">
						<a href="#" class="text-white"><i class="icon-cog3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">

				<!-- Main -->
				<li class="nav-item-header">
					<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
							Home
						</span>
					</a>
				</li>



				<li class="nav-item">
					<a href="{{route('subject-list')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
							Subject List
						</span>
					</a>
				</li>


				<li class="nav-item">
					<a href="{{route('categories-list')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
							Categories
						</span>
					</a>
				</li>


				<li class="nav-item">
					<a href="{{route('order-list')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
							Orders
						</span>
					</a>
				</li>




				<li class="nav-item">
					<a href="{{route('teacher-list')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
							Teacher List
						</span>
					</a>
				</li>



				<li class="nav-item">
					<a href="{{route('question-list')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
                         Question List
						</span>
					</a>
				</li>


				<li class="nav-item">
					<a href="{{route('contact-us')}}" class="nav-link ">
						<i class="icon-home4"></i>
						<span>
                         Contact Us
						</span>
					</a>
				</li>


				
				
					
					

				
					
					

					<li class="nav-item">
					<a href="{{route('logout')}}" class="nav-link " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						<i class="icon-home4"></i>
						<span>
						Logout
						</span>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

					</a>
				</li>


				<!-- /page kits -->

			</ul>
		</div>
		<!-- /main navigation -->

	</div>
	<!-- /sidebar content -->

</div>