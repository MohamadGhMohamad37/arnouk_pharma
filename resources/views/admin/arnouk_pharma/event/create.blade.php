@extends('admin.layouts.app')
@section('title','Create Event Arnouk Pharma')
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
            
                                            <h4 class="header-title">Create Arnouk Pharma About</h4>
            
                                            <form class="custom-validation" action="{{ route('event_arnouk_pharma.store', ['lang' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label class="mb-2">Name English</label>
                                                    <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}" required placeholder="Name English" />
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label class="mb-2">Name Arabic</label>
                                                    <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') }}" required placeholder="Name Arabic" />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="mb-2">Textarea</label>
                                                    <div>
                                                     <textarea id="disc_en" class="form-control" name="description_en">{!! old('description_en') !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="mb-2">Textarea</label>
                                                    <div>
                                                     <textarea id="disc_ar" class="form-control" name="description_ar">{!! old('description_ar') !!}</textarea>
                                                    </div>
                                                </div>

                                                    <div class="form-group mb-3">
                                                        <label for="event_date">Date Event</label>
                                                        <input type="date" class="form-control" name="event_date" value="{{ old('event_date') }}" required>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="event_time">Time Event</label>
                                                        <input type="time" class="form-control" name="event_time" value="{{ old('event_time') }}" required>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="event_location">Location Event</label>
                                                        <input type="text" class="form-control" placeholder="Location Event.."  name="event_location" value="{{ old('event_location') }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">{{ __('messages.product_image') }}</label>
                                                        <div id="drop-area" class="drop-area">
                                                            <p>{{ __('messages.drag_drop_image') }}</p>
                                                            <input type="file" name="image" id="image" class="form-control" style="display: none;" >
                                                            <img id="image-preview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="multi_images">{{ __('messages.multi_images') }}</label>
                                                        <div id="multi-drop-area" class="drop-area">
                                                            <p>{{ __('messages.drag_drop_images') }}</p>
                                                            <input type="file" name="gallery_images[]" id="multi_images" class="form-control" style="display: none;" multiple>
                                                            <div id="multi-images-preview" class="multi-images-preview"></div>
                                                        </div>
                                                    </div>

                                                

                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                            Submit
                                                        </button>
                                                    </div>
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
    
    const imageInput = document.getElementById('image'); // غيّر ID حسب حالتك
imageInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file && !file.type.startsWith('image/')) {
        Swal.fire({
            icon: 'error',
            title: '❌ تنبيه',
            text: 'الرجاء رفع صورة فقط',
            confirmButtonText: 'حسنًا',
        });
        imageInput.value = '';
        return;
    }
    // function to display the image (اختياري)
    displayImage(file);
});


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
    const multiImageInput = document.getElementById('multi_images'); // غيّر ID حسب حالتك
multiImageInput.addEventListener('change', (e) => {
    const files = e.target.files;
    for (let i = 0; i < files.length; i++) {
        if (!files[i].type.startsWith('image/')) {
            Swal.fire({
                icon: 'error',
                title: '❌ تنبيه',
                text: 'الرجاء رفع صور فقط',
                confirmButtonText: 'حسنًا',
            });
            multiImageInput.value = '';
            return;
        }
    }
    // function to display multiple images (اختياري)
    displayMultipleImages(files);
});


    // video
    const videoDropArea = document.getElementById('video-drop-area');
    const videoInput = document.getElementById('video');
    const videoPreview = document.getElementById('video-preview');

    // منع السلوك الافتراضي للسحب والإفلات
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        videoDropArea.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        videoDropArea.classList.add('hover');
    });

    ['dragleave', 'drop'].forEach(eventName => {
        videoDropArea.classList.remove('hover');
    });

    // تفعيل السحب والإفلات
    videoDropArea.addEventListener('drop', handleVideoDrop, false);
    videoDropArea.addEventListener('click', () => videoInput.click());

    // عند التحديد من المتصفح
    videoInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            displayVideo(file);
        }
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function handleVideoDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        if (files.length > 0 && files[0].type.startsWith('video/')) {
            videoInput.files = files;
            displayVideo(files[0]);
        }
    }

    function displayVideo(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            videoPreview.src = e.target.result;
            videoPreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
    videoInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file && !file.type.startsWith('video/')) {
        Swal.fire({
            icon: 'error',
            title: '❌ تنبيه',
            text: 'الرجاء رفع ملف فيديو فقط',
            confirmButtonText: 'حسنًا',
        });
        videoInput.value = ''; // لإفراغ الملف الخاطئ
        return;
    }
    displayVideo(file);
});


        </script>
@endsection