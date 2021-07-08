@extends('backend.layouts.staff.master')
@section('title','Home page')
    @section('content')

        <!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Blog Category</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0 datatable">
											<thead>
												<tr>
													<th>S.I</th>
													<th>Category Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ( $category as $category )
												<tr>
													<td>{{ $loop->index +1 }}</td>
													<td>{{ $category->name }}</td>
													<td>
														<div class="actions">
															<a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
														</div>
													</td>
													<td>
														<div class="actions">
															<form method="POST" action="{{route('category.destroy',[$category->id])}}">
																@csrf
																@method('delete')
																	<button class="btn btn-sm bg-danger-light" title="Delete"><i class="fas fa-trash"></i></button>
															</form> 
														</div>
													</td>
												</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>							
						</div>					
					</div>

    @endsection

    @push('script')

    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
        
    @endpush