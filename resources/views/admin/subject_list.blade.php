@extends('newtemplates.partials.default')
@section('content')


<div class="content">

<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addSubject">Add Subject</a>
</div>


<div class="card" style=" margin-top: 2%;">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Subject</h5>
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
									<th>Action</th>
								</tr>
							</thead>
							@php $i=1
							@endphp
							@foreach($subject as $s)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$s->name}}</td>
								<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, 19px, 0px);">
													<a href="#" data-toggle="modal" data-target="#editSubject" data-id='{{$s->id}}' data-name='{{$s->name}}' onclick="editForm(this)" class="dropdown-item"><i class="icon-file-pdf"></i> Edit</a>



													<a href="{{route('subject-delete',['id'=>$s->id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> Delete</a>
												


														
												</div>
											</div>
										</div>
									</td>
							</tr>
							@endforeach()
						
							

							
						</table>

						{{$subject->links()}}
					</div>
				</div>
















				<div id="addSubject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('add-subject')}}">
      		@csrf    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Subject</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="subject">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
</form>

  </div>
</div>





<div id="editSubject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('edit-subject')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Subject</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="subject" id="subjectName">
      			<input type="hidden" name="id" id="id">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
</form>

  </div>
</div>


	</div>

<script type="text/javascript">
	
function editForm(aid)
{
	id = $(aid).data("id");
  $('#id').val(id);
	
	name = $(aid).data("name");
	$('#subjectName').val(name);

}

</script>
@endsection