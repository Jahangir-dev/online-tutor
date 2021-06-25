@include('newtemplates.partials.head')
@include('newtemplates.partials.header')
<body>
	<div class="page-content">

		<!-- Main sidebar -->
		@include('newtemplates.partials.sidebar')

		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">	
			@include('newtemplates.partials.navbar')
			  @yield('content')


  		</div>

  	</div>
@include('newtemplates.partials.footer')


			  @yield('jsOutside')
	
</body>
</html>
