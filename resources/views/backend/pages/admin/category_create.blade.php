@extends('backend.layouts.admin.master')
@section('title','Home page')
    @section('content')

    <!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Category</h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
	
		<div class="row">
			<div class="col-sm-12">
			
				<div class="card">
					<div class="card-body">
						<form method="POST" action="{{ route('category.store') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<h5 class="form-title"><span>Add Category</span></h5>
								</div>
								<div class="col-12 col-sm-6">  
									<div class="form-group">
										<label>Category Name</label>
										<input type="text" class="form-control" name="name" value="{{old('name') }}">
										@error('name')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>					
		</div>

    @endsection