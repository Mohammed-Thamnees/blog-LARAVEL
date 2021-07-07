@extends('backend.layouts.admin.master')
@section('title','Home page')
    @section('content')

        <!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Blogs Lists</h3>
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
													<th>Title</th>
													<th>Category</th>
													<th>Published Date</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ( $article as $article )
												<tr>
													<td>{{ $loop->index +1 }}</td>
													<td><a href="{{ route('article.show',$article->id) }}" target="_blank">{{ $article->heading }}</a></td>
													
                                                        @php
                                                            $category=DB::table('articles')->join('categories','articles.category_id','=','categories.id')->
                                                            select('categories.name')->where('articles.id',$article->id)->get();
                                                            //dd($category);
                                                        @endphp
                                                        @foreach ($category as $category)
                                                            <td>{{ $category->name }}</td>
                                                        @endforeach

													<td>{{ Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }}</td>

													<td>
														<div class="actions">
															<a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
														</div>
													</td>
													<td>
														<div class="actions">
															<form method="POST" action="{{route('article.destroy',[$article->id])}}">
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