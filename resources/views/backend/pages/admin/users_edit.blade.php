@extends('backend.layouts.admin.master')
@section('title','Home page')
    @section('content')

    <!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Edit Users</h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
	
		<div class="row">
			<div class="col-sm-12">
			
				<div class="card">
					<div class="card-body">
						<form method="POST" action="{{ route('user.update',$users->id) }}">
							@csrf
                            @method('patch')
							<div class="row">
								<div class="col-12">
									<h5 class="form-title"><span>User Update</span></h5>
								</div>
								<div class="col-12 col-sm-6">  
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" value="{{ $users->name }}">
										@error('name')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>E-mail</label>
										<input type="text" class="form-control" name="email" value="{{ $users->email }}">
										@error('email')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Role</label>
											<select class="form-control" name="role">
												<option value="admin">Admin</option>
												<option value="staff">Staff</option>
												<option value="reader">Reader</option>
											</select>
										
										@error('role')
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