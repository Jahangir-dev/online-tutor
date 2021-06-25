@extends('newtemplates.partials.default')
@section('content')


<div class="content">

<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcategories">Add Categories</a>
</div>


<div class="card" style=" margin-top: 2%;">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Categories</h5>
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
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							@php $i=1
							@endphp
							@foreach($categories as $c)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$c->name}}</td>
								<td>{{$c->image}}</td>
								<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, 19px, 0px);">
													<a href="#" data-toggle="modal" data-target="#editCategories" data-id='{{$c->id}}' data-name='{{$c->name}}' onclick="editForm(this)" class="dropdown-item"><i class="icon-file-pdf"></i> Edit</a>



	<a href="{{route('categoriess-delete',['id'=>$c->id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> Delete</a>
												


														
												</div>
											</div>
										</div>
									</td>
							</tr>
							@endforeach
							
						
							

							
						</table>

					</div>
				</div>
















<div id="addcategories" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('add-categories')}}" enctype="multipart/form-data">
      		@csrf    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Categories</h4>
      </div>
      <div class="modal-body">

                <div class="col-lg-12">
                	<label>Name:</label>
                </div>
                <div class="col-lg-12">
                 	<input type="text" class="form-control" name="categories" required>   	
                </div>      			
      		<div class="col-lg-12">
      			<label>Upload Image:
      			</label>
      		</div>
      		<div class="col-lg-12">
      			<input type="file" name="image" class="form-control" required>
      		</div>

      			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
</form>

  </div>
</div>





<div id="editCategories" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('edit-categories')}}">
      		@csrf    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Categories</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="categories" id="categories_name">
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
	$('#categories_name').val(name);

}

</script>
@endsection