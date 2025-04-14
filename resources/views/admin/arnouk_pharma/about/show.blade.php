@extends('admin.layouts.app')
@section('title','About Arvnouk Pharma Show')
@section('content')
<div class="container mt-5">
    <h2>{{ $about->{'name_' . app()->getLocale()} }}</h2>

    <p><strong>Description:</strong></p>
    <p>{{ $about->{'description_' . app()->getLocale()} }}</p>

    @if ($about->main_image)
        <div class="mb-3">
            <strong>Main Image:</strong><br>
            <img src="{{ asset($about->main_image) }}" alt="Main Image" style="max-width: 300px;">
        </div>
    @endif

    @if ($about->video)
        <div class="mb-3">
            <strong>Video:</strong><br>
            <video controls style="max-width: 100%;">
                <source src="{{ asset('uploads/' . $about->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    @endif

    @if ($about->images && is_array(json_decode($about->images)))
        <div class="mb-3">
            <strong>Other Images:</strong><br>
            @foreach (json_decode($about->images) as $img)
                <img src="{{ asset('uploads/' . $img) }}" style="max-width: 150px; margin: 5px;">
            @endforeach
        </div>
    @endif

    <a href="{{ route('about.index', ['lang' => app()->getLocale()]) }}" class="btn btn-secondary">Back</a>
</div>
@endsection
