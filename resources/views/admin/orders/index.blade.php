@extends('newtemplates.partials.default')
@section('content')

<div class="content-wrapper">


			<div class="content">
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Order Table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table table-togglable table-hover">
						<thead>
							<tr>
								<th data-toggle="true">#</th>
								<th data-hide="phone">Dated</th>
								<th data-hide="phone,tablet">From</th>
								<th data-hide="phone,tablet">To</th>
								<th data-hide="phone">Title</th>
								<th data-hide="phone">Status</th>
								<th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
							</tr>
						</thead>
						<tbody>
							@php $tr = 0; @endphp	
							@foreach($orders as $o)

								<tr>
									<td>{{++$tr}}</td>
									<td>{{$o->created_at}}</td>
									<td>{{$o->from_user_d->name}}</td>
									<td>{{$o->to_user_d->name}}</td>
									<td>{{isset($o->gig_details)?$o->gig_details->gig_title:''}}</td>
									<td>
										@if($o->active==0)
										<span class="badge badge-primary">Pending</span>
										@elseif($o->active==1)
										<span class="badge badge-success">Active</span>
										@elseif($o->active==2)
										<span class="badge badge-warning">Late</span>
										@elseif($o->active==3)
										<span class="badge badge-info">Delivered</span>
										@elseif($o->active==4)
										<span class="badge badge-success">Completed</span>
										@elseif($o->active==5)
										<span class="badge badge-danger">Cancelled</span>
										@endif


									</td>
									<td>
										

										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													@if($o->active==1)

													<a data-href="{{route('adminDeleteOrder',['id'=>$o->id,'status'=>'cancel'])}}" id="sweet_warning" class="dropdown-item"><i class="icon-trash"></i>Cancel</a>

													@elseif($o->active==5)
													<a data-href="{{route('adminDeleteOrder',['id'=>$o->id,'status'=>'active'])}}" id="sweet_warning" class="dropdown-item"><i class="icon-check"></i>Re-Active</a>
													@endif

													<a href="{{route('adminOrderChat',['id'=>$o->id,'status'=>'order_chat'])}}" class="dropdown-item"><i class="icon-envelop4"></i>Order Chat</a>

													<a href="{{route('adminOrderChat',['id'=>$o->id,'status'=>'chat'])}}" class="dropdown-item"><i class="icon-inbox"></i>Chat</a>

												</div>
											</div>
										</div>
									


									</td>
								</tr>


							@endforeach

						</tbody>
					</table>
				</div>
				{{$orders->links()}}
			</div>

		</div>

@endsection