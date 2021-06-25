@extends('newtemplates.partials.default')
@section('content')

<div class="content-wrapper">


			<div class="content">

				<!-- Basic layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Teacher List</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="border-bottom-danger">
									<th>#</th>
									<th>Name</th>
									<th>Father Name</th>
									<th>Email</th>
									<th>CNIC</th>
									<th>Phone No</th>
									
									<th>Address</th>
									<th>Level</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@php $i=1
							@endphp

							@foreach($teacher as $t)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$t->name}}</td>
								<td>{{$t->father_name}}</td>
								<td>{{$t->email}}</td>
								<td>{{$t->cnic}}</td>
								<td>{{$t->phone_number}}</td>
							
								<td>{{$t->address}}</td>
								<td>
                             @if($t->level==0)
										<span class="badge badge-primary">Beginner</span>
										@elseif($t->level==1)
										<span class="badge badge-success">Intermediate</span>
										@elseif($t->level==2)
										<span class="badge badge-warning">Intermediate Expert</span>
										@elseif($t->level==3)
										<span class="badge badge-info">Expert</span>
										@elseif($t->level==4)
										<span class="badge badge-success">PRO Expert</span>
										
										@endif




								</td>
								<td>
									<div class="btn-group">
			                    	<button type="button" class="btn btn-danger rounded-round dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Edit</button>
			                    	<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(106px, 36px, 0px);">
										<a href="{{route('increase-level',['id'=>$t->id])}}" class="dropdown-item"><i class="icon-menu7">Increase Level</i></a>
										
										
									</div>
								</div>


								</td>
							</tr>
							@endforeach()
							
							
						
							

							</tbody>
						</table>

					</div>
                
					</div>
				</div>
				
		

			</div>

		</div>

@endsection