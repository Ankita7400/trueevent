
@extends('backend.admin.layout.main')
@section('main-container')


<!--start main wrapper-->
<main class="main-wrapper">
<div class="main-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
<div class="breadcrumb-title pe-3">Update Products</div>
<div class="ps-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">
<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update Products</li>

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
 <form action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')
<div class="item-content">
   
  <div class="mb-3">
<label for="inputName1" class="form-label"> Sub Category </label>
 <select name="sub_category_id" class="form-control" required>
                <option value="">Select SubCategory</option>
                @foreach($subcategories as $subcat)
                    <option value="{{ $subcat->id }}" {{ $product->sub_category_id == $subcat->id ? 'selected' : '' }}>
                        {{ $subcat->name }}
                    </option>
                @endforeach
            </select>
</div>
<div class="mb-3">
<label for="inputName1" class="form-label"> Name <span style="color:red">*</span></label>
<input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Categories Name" name="name" value="{{ $product->name }}">
@error('title')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="slug" class="form-label">Slug <span style="color:red">*</span></label>
<input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug"  value="{{ $product->slug }}" >
 @error('slug')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
<label for="slug" class="form-label">Price</label>
<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price"  value="{{ old('price', $product->price) }}" >

</div>

{{-- <div class="mb-3">
<label for="slug" class="form-label">Description</label>

  <textarea class="form-control "  id="summernote" name="description">{{ old('description', $data->description) }}</textarea>
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
										
									<option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
<option value="0"{{ !$product->status ? 'selected' : '' }}>Inactive</option>
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
<div class="col-12 mt-3">
  <div class="row preview-images-zone">
    <!-- Preview images will be displayed here -->
  </div>
</div>


<!-- Display Existing Images -->
<div class="col-12 mt-3">
  <label for="existingImages" class="form-label">Existing Images</label>
  <div class="row">
      {{-- @foreach ($data->images as $image) --}}
      <div class="col-md-3 position-relative preview-image">
          <img src="{{ asset('public/'.$product->image) }}" class="img-thumbnail mb-2" style="max-width: 100%;">
          <button type="button" class="btn btn-danger btn-remove-existing position-absolute top-0 end-0" data-id="{{ $product->id }}">X</button>
      </div>
      {{-- @endforeach --}}
  </div>
</div>



</form>

</div>
</div>
</div>






</div>
<!-- Repeater End -->


</div>
</main>
<!--end main wrapper-->


  <script>

    $(document).ready(function() {
        // Function to read and preview images
        function readURL(input) {
            if (input.files) {
                var filesAmount = input.files.length;
  
                // Clear previous previews
                $('.preview-images-zone').html('');
  
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
  
                    reader.onload = function(event) {
                        var html = '<div class="col-md-3 preview-image position-relative">';
                        html += '<img src="' + event.target.result + '" class="img-thumbnail mb-2" style="max-width: 100%;">';
                        html += '<button type="button" class="btn btn-danger btn-remove position-absolute top-0 end-0">X</button>';
                        html += '</div>';
                        $('.preview-images-zone').append(html);
                    }
  
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
  
        // Trigger image preview when file input changes
        $("#images").change(function() {
            readURL(this);
        });
  
        // Remove image preview on remove button click
        $(document).on('click', '.btn-remove', function(e) {
            e.preventDefault();
            $(this).closest('.preview-image').remove();
        });


          // Handle existing image removal
          $(document).on('click', '.btn-remove-existing', function(e) {
            e.preventDefault();
            var imageId = $(this).data('id');
            // Add hidden input to the form to mark the image for deletion
            $('<input>').attr({
                type: 'hidden',
                name: 'remove_images[]',
                value: imageId
            }).appendTo('form');
            $(this).closest('.preview-image').remove();
        });
    });
  </script> 
  
<style>
    .btn-remove {
        margin: 10px;
        margin-right: 22px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        z-index: 1;
        width: 40px;
      height: 40px;
        }
        .btn-remove-existing{
            margin: 10px;
        margin-right: 22px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        z-index: 1;
        width: 40px;
      height: 40px;
        }
  </style>

@endsection