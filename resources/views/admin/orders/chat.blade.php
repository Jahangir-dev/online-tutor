@extends('newtemplates.partials.default')
@section('content')

<div class="content-wrapper">


			<div class="content">

				<!-- Basic layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">{{$order->gig_details->gig_title}}</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat media-chat-scrollable mb-3">
							

							@foreach($messages as $m1)	

								@php 
									$date = date('Y-m-d',strtotime($m1->created_at)); 
									$msgs = App\Message::where(DB::raw('Date(created_at)'),$date)->with('fromUser','toUser')->get(); 
								@endphp
								@if(date('Y-m-d')==$date)
								<li class="media content-divider justify-content-center text-muted mx-0">
								Today</li>
								@else
								<li class="media content-divider justify-content-center text-muted mx-0">
								{{date('l d F, Y',strtotime($date))}}</li>
								@endif
								@foreach($msgs as $m)
								@if($m->from_user==$order->from_user)

										<li class="media">	
											<div class="mr-3">
												<a href="{{asset('global_assets/images/demo/images/3.png')}}">
													<img src="{{$m->fromUser->image}}" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item">{!!$m->content!!}</div>
												<div class="font-size-sm text-muted mt-2">{{$m->created_at->diffForHumans()}} <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>


								@else


								<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item">{!!$m->content!!}</div>
									<div class="font-size-sm text-muted mt-2">{{$m->created_at->diffForHumans()}} <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="{{asset('global_assets/images/demo/images/3.png')}}">
										<img src="{{$m->toUser->image}}" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>


								@endif

							@endforeach
							@endforeach
						
						</ul>

                
					</div>
				</div>
				
		

			</div>

		</div>

@endsection