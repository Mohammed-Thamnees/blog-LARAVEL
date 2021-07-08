@extends('backend.layouts.admin.master')
@section('title','Admin Home Page')
    @section('content')

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Overview Section -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card bg-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-icon">
											<i class="fas fa-user-graduate"></i>
										</div>
										<div class="db-info">
                      @php
                        $count=DB::table('categories')->count('id');
                        //dd($count);
                      @endphp
											<h3>{{ $count }}</h3>
											<h6>Total Categories</h6>
										</div>										
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card bg-two">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-icon">
											<i class="fas fa-crown"></i>
										</div>
										<div class="db-info">
											@php
                        $count=DB::table('articles')->count('id');
                        //dd($count);
                      @endphp
											<h3>{{ $count }}</h3>
											<h6>Total Blogs</h6>
										</div>										
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card bg-four">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-icon">
											<i class="fas fa-file-invoice-dollar"></i>
										</div>
										<div class="db-info">
											@php
                        $count=DB::table('users')->count('id');
                        //dd($count);
                      @endphp
											<h3>{{ $count }}</h3>
											<h6>Total Users</h6>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
                    <br><br>
					<!-- /Overview Section -->	
        <!-- /Page Header -->

      {{--Article by category--}}
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Blogs by Category</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>No.of Blogs</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($articleCategories as $categoryName => $articles)
                    <tr>
                      <td>{{$categoryName}}</td>
                      <td><a href="{{route('admin-articles', ['category' => $articles->first()->category_id])}}" class="__cf_email__" data-cfemail="d1bbbeb9bf91b4a9b0bca1bdb4ffb2bebc">
                        {{count($articles)}}
                      </a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Socail Media Follows -->
    <br><br>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill fb sm-box">
                <i class="fab fa-facebook"></i>
                <h6>50,095</h6>
                <p>Likes</p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill twitter sm-box">
                <i class="fab fa-twitter"></i>
                <h6>48,596</h6>
                <p>Follows</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill insta sm-box">
                <i class="fab fa-instagram"></i>
                <h6>52,085</h6>
                <p>Follows</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill linkedin sm-box">
                <i class="fab fa-linkedin-in"></i>
                <h6>69,050</h6>
                <p>Follows</p>
            </div>
        </div>
    </div>
    <!-- /Socail Media Follows -->
        
    @endsection