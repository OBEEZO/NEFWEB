@extends('layouts.app')

@section('content')
@include('partials.breadcrumbs', [
    'pageTitle' => 'Gallery',
    'breadcrumbLinks' => [
        ['name' => 'Home', 'url' => '/']
    ]
])

<div class="container">
    <h2 class="text-center mb-4">Gallery</h2>

    @auth
    <div class="upload-container">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="upload-form">
            @csrf
            <div class="mb-3">
                <input type="file" name="images[]" multiple class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Upload</button>
        </form>
    </div>
    @endauth

    <div class="row mt-4">
        @foreach($galleries as $gallery)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" class="img-fluid w-100 h-100">
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $galleries->links() }}
    </div>
</div>

<style>
    .upload-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .upload-form {
        width: 100%;
        max-width: 400px;
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .gallery-item {
        height: 250px;
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .gallery-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .gallery-item:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }
</style>
@endsection
