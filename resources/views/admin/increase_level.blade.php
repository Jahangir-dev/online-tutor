@extends('newtemplates.partials.default')
@section('content')

<div class="content-wrapper">


			<div class="content">

				<!-- Basic layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Edit Profile</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<form method="POST" action="{{route('level-update')}}">
						@csrf

					<div class="card-body">
						
						<div class="row">
							
							<div class="col-lg-4">
								<label>Update Teacher Level</label>
							</div>
							<div class="col-lg-8">
						<select class="form-control" name="level" required>

							<option value="{{Null}}">Choose</option>
							<option value="0">Level 0</option>
							<option value="1">Level 1</option>
							<option value="2">Level 2</option>
							<option value="3">Level 3</option>
							<option value="4">Level 4</option>
						</select>
							</div>
						</div>
						<input type="hidden" name="id" value="{{$edit->id}}">
                     
                     <div class="col-lg-12">
                     	<button type="submit" class="btn btn-primary" style="margin-top: 5rem;
    float: right;
    width: 15%;
    margin-bottom: 20px;">Save</button>

                     </div>
						
                         
					</div>

					</form>
				</div>
				
		

			</div>

		</div>

@endsection