
@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Stories';
    $pageDescription = 'Explore the good stories of our projects.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container">
    <h1 class="text-center">Add New Story</h1>
    <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Story</label>
            <textarea name="story" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection