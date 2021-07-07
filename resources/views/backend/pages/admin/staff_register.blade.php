@extends('backend.layouts.admin.master')
@section('title','Staff register')
    @section('content')

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Staff</h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
	
		<div class="row">
			<div class="col-sm-12">
			
				<div class="card">
					<div class="card-body">
						<form method="POST" action="{{ route('staff.store') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<h5 class="form-title"><span>Staff Registration</span></h5>
								</div>
								<div class="col-12 col-sm-6">  
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" value="{{ old('name') }}">
										@error('name')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>E-mail</label>
										<input type="text" class="form-control" name="email" value="{{ old('email') }}">
										@error('email')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password">
										@error('password')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" class="form-control" name="password_confirmation">
										@error('password_confirmation')
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