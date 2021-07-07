@extends('backend.layouts.admin.master')
@section('title','Home page')
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
							<div class="card bg-three">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-icon">
											<i class="fas fa-building"></i>
										</div>
										<div class="db-info">
											@php
                          $count=DB::table('comments')->count('id');
                          //dd($count);
                          @endphp
											<h3>{{ $count }}</h3>
											<h6>Total Comments</h6>
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
      {{--Latest comments--}}
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default no-margin-bottom">
          <div class="panel-heading">
            <strong>Latest comments</strong>
          </div>
          <div class="panel-body">
            <table class="table" border="1">
              <tr>
                <th class="text-left">#</th>
                <th class="text-left">Comment</th>
                <th class="text-left">User</th>
              </tr>
              @foreach($latestComments as $key => $comment)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{mb_substr($comment->content, 0, 20)}}...<br>
                    <span class="text-muted">{{$comment->created_at}}</span>
                  </td>
                  <td>{{$comment->user->name}}<br>({{$comment->user->email}})</td>
                </tr>
              @endforeach
            </table>
            <a href="{{route('comments')}}">View all</a>
          </div>
        </div>
      </div>

      {{--Article by category--}}
      <div class="col-sm-4">
        <div class="panel panel-default no-margin-bottom">
          <div class="panel-heading">
            <strong>Article by Category</strong>
          </div>
          <div class="panel-body">
            <table class="table" border="1">
              <tr>
                <th class="text-left">Category Name</th>
                <th class="text-left">Total Article</th>
              </tr>
              @foreach($articleCategories as $categoryName => $articles)
                <tr>
                  <td>{{$categoryName}}</td>
                  <td>
                    <a href="{{route('admin-articles', ['category' => $articles->first()->category_id])}}">
                      {{count($articles)}}
                    </a>
                  </td>
                </tr>
              @endforeach
            </table>
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