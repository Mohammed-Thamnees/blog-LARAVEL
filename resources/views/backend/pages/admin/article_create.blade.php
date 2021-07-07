@extends('backend.layouts.admin.master')
@section('title','Home page')
    @section('content')

    <!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Article</h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
	
		<div class="row">
			<div class="col-sm-12">
			
				<div class="card">
					<div class="card-body">
						<form method="POST" action="{{ route('article.store') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<h5 class="form-title"><span>Add Article</span></h5>
								</div>
								<div class="col-12 col-sm-6">  
									<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control" name="heading" value="{{old('title') }}">
										@error('heading')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
                                <div class="col-12 col-sm-6">  
									<div class="form-group">
										<label>Select Category</label>
											<select class="form-control" name="category">
                                                @php
                                                    $category=DB::table('categories')->get();
                                                @endphp
                                                @foreach ($category as $category)
												<option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
											</select>
										@error('category')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
                                <div>  
									<div class="form-group">
										<label>Content</label>
                                        <textarea class="form-control" id="content" name="content">{{old('description')}}</textarea>
										@error('content')
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


@push('style')
<link rel="stylesheet" href="{{asset('assets/js/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush

@push('script')
<script src="{{asset('assets/js/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $(document).ready(function() {
      $('#content').summernote({
        placeholder: "Write content here.....",
          //tabsize: 5,
          width:1100,
          height: 500
      });
    });
</script>
@endpush
    
    