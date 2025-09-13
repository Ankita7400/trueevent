
@extends('backend.admin.layout.main')
@section('main-container')


<!--start main wrapper-->
<main class="main-wrapper">
<div class="main-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
<div class="breadcrumb-title pe-3">Service Categories Add</div>
<div class="ps-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">
<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
</li>
<li class="breadcrumb-item active" aria-current="page">Service Categories Add</li>

</ol>
</nav>
</div>
{{-- <div class="ms-auto">
<div class="btn-group">
<button type="button" class="btn btn-primary">Settings</button>
<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
</button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
<a class="dropdown-item" href="javascript:;">Another action</a>
<a class="dropdown-item" href="javascript:;">Something else here</a>
<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
</div>
</div>
</div> --}}
</div>
<!--end breadcrumb-->

<!-- Repeater Html Start -->
{{-- <div id="repeater"> --}}


<!-- Repeater Items -->
<div class="items" data-group="test">
<div class="card">
<div class="card-body">

<!-- Repeater Content -->
 <form action="{{ route('admin.sub-categories.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
@csrf
<div class="item-content">

   <div class="mb-3">
<label for="inputName1" class="form-label"> Service Category <span style="color:red">*</span></label>
{{-- <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Categories Name" name="name"> --}}
<select name="service_category_id" class="form-select" required class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
</div>

<div class="mb-3">
<label for="inputName1" class="form-label"> Name <span style="color:red">*</span></label>
<input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Categories Name" name="name">
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="slug" class="form-label">Slug <span style="color:red">*</span></label>
<input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug"  >
 @error('slug')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

{{-- <div class="mb-3">
<label for="slug" class="form-label">Description</label>
<input type="text" class="form-control mysummernote" id="description" placeholder="description"  data-name="description"> 
 
</div> --}}

  {{-- <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<input id="fancy-file-upload" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
							</div>
						</div>
					</div>
				</div> --}}
        <div class="mb-3">
<label for="slug" class="form-label">Image </label>
<input type="file" class="form-control" id="image" placeholder="image"  data-name="image" name="image">

</div>

        		<div class="mb-4">
									<label for="single-select-field" class="form-label">Status</label>
									<select name="status"  class="form-select" id="single-select-field" data-placeholder="Choose one thing">
										
									<option value="1">Active</option>
<option value="0">Inactive</option>
									</select>
								</div>
		
 {{-- <button type="submit" class="btn btn-primary text-center">Submit</button> --}}
 <div class="repeater-remove-btn text-center">
<button class="btn btn-danger remove-btn px-4" type="submit">
Submit
</button>
</div>
</div>
<!-- Repeater Remove Btn -->
{{-- <div class="repeater-remove-btn text-center">
<button class="btn btn-danger remove-btn px-4" type="submit">
Submit
</button>
</div> --}}


</form>

</div>
</div>
</div>






</div>
<!-- Repeater End -->


</div>
</main>
<!--end main wrapper-->



@endsection