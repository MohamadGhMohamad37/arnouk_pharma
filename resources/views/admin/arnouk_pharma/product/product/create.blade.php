@extends('admin.layouts.app')
@section('title','Create Product')
@section('style')
<style>
    .drop-area {
        border: 2px dashed #ccc;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        margin-top: 10px;
    }
    .drop-area.hover {
        border-color: #333;
    }
    .gallery-image {
        display: inline-block;
        margin: 5px;
        max-width: 100px;
        max-height: 100px;
    }
    .multi-images-preview img {
        max-width: 100px;
        margin: 5px;
        border-radius: 5px;
    }
    .image-container {
        position: relative;
        display: inline-block;
        margin: 5px;
    }

    .gallery-image {
        max-width: 100px;
        max-height: 100px;
        border-radius: 5px;
        display: block;
    }

    .remove-image {
        position: absolute;
        top: -8px;
        right: -8px;
        background: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 14px;
        cursor: pointer;
        z-index: 1;
    }
</style>
@endsection

@section('content')
<div class="main-content">
<div class="page-content">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create Product</h4>

                <form class="custom-validation" action="{{ route('products_arnouk_pharma.store', ['lang' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Category Selection -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="" disabled selected>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_en }} ({{ $category->name_ar }})</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Name English -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Name English</label>
                        <input type="text" name="name_en" class="form-control" required placeholder="Name English" />
                    </div>

                    <!-- Name Arabic -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Name Arabic</label>
                        <input type="text" name="name_ar" class="form-control" required placeholder="Name Arabic" />
                    </div>

                    <!-- Description English -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Description English</label>
                        <textarea class="form-control" id="disc_en" name="description_en"></textarea>
                    </div>

                    <!-- Description Arabic -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Description Arabic</label>
                        <textarea class="form-control" id="disc_ar" name="description_ar"></textarea>
                    </div>

                    <!-- Main Image -->
                    <div class="form-group mb-3">
                        <label>Main Image</label>
                        <div id="drop-area" class="drop-area">
                            <p>Drag & Drop Image or Click to Upload</p>
                            <input type="file" name="image" id="image" class="form-control" style="display: none;" accept="image/*">
                            <img id="image-preview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 100%;">
                        </div>
                    </div>

                    <!-- Multiple Images -->
                    <div class="form-group">
                        <label for="multi_images">{{ __('messages.multi_images') }}</label>
                        <div id="multi-drop-area" class="drop-area">
                            <p>{{ __('messages.drag_drop_images') }}</p>
                            <input type="file" name="images[]" id="multi_images" class="form-control" style="display: none;" multiple>
                            <div id="multi-images-preview" class="multi-images-preview"></div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
</div>
</div>
@endsection

@section('script')

<!-- parsleyjs -->
<script src="{{asset('admin/assets/libs/parsleyjs/parsley.min.js')}}"></script>
<!-- validation init -->
<script src="{{asset('admin/assets/js/pages/form-validation.init.js')}}"></script>
<!--tinymce js-->
<script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>
<!-- init js -->
<script src="{{asset('admin/assets/js/pages/form-editor.init.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>

<script>
    // main image
    const videodropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        videodropArea.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        videodropArea.addEventListener(eventName, () => videodropArea.classList.add('hover'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        videodropArea.addEventListener(eventName, () => videodropArea.classList.remove('hover'), false);
    });

    videodropArea.addEventListener('drop', handleDrop, false);
    videodropArea.addEventListener('click', () => fileInput.click());

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        fileInput.files = files;
        displayImage(files[0]);
    }

    fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            displayImage(file);
        }
    });

    function displayImage(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }

    //multi images
    const multiDropArea = document.getElementById('multi-drop-area');
    const multiInput = document.getElementById('multi_images');
    const multiPreview = document.getElementById('multi-images-preview');
    let fileList = [];

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        multiDropArea.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        multiDropArea.addEventListener(eventName, () => multiDropArea.classList.add('hover'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        multiDropArea.addEventListener(eventName, () => multiDropArea.classList.remove('hover'), false);
    });

    multiDropArea.addEventListener('click', () => multiInput.click());
    multiDropArea.addEventListener('drop', handleMultiDrop, false);
    multiInput.addEventListener('change', (e) => {
        handleMultiFiles(e.target.files);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function handleMultiDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleMultiFiles(files);
    }

    function handleMultiFiles(files) {
        [...files].forEach(file => {
            fileList.push(file);
        });
        updateMultiPreview();
    }

    function updateMultiPreview() {
        multiPreview.innerHTML = '';
        const dataTransfer = new DataTransfer();

        fileList.forEach((file, index) => {
            dataTransfer.items.add(file);

            const reader = new FileReader();
            reader.onload = function (e) {
                const container = document.createElement('div');
                container.classList.add('image-container');

                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('gallery-image');

                const removeBtn = document.createElement('span');
                removeBtn.innerHTML = '×';
                removeBtn.classList.add('remove-image');
                removeBtn.addEventListener('click', () => {
                    fileList.splice(index, 1);
                    updateMultiPreview();
                });

                container.appendChild(removeBtn);
                container.appendChild(img);
                multiPreview.appendChild(container);
            };
            reader.readAsDataURL(file);
        });

        multiInput.files = dataTransfer.files;
    }
</script>
@endsection
