@extends('newtemplates.partials.default')
@section('content')


<div class="content">




<div class="card" style=" margin-top: 2%;">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">List</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					




					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="border-bottom-danger">
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Questions</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@php $i=1
							@endphp
							@foreach($list as $l)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$l->name}}</td>
								<td>{{$l->email}}</td>
								<td>{{$l->phone}}</td>
								<td><a href="{{route('contact-delete',['id'=>$l->id])}}" class="btn btn-danger">Delete</a></td>
							</tr>
							@endforeach()

							</tbody>

						</table>

						
					</div>
				</div>
















				








	</div>


@endsection