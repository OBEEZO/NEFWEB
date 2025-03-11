@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Stories';
    $pageDescription = 'Explore the good stories of our projects.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container text-center">
    <h1 class="mb-4">Stories</h1>
    <a href="{{ route('stories.create') }}" class="btn btn-primary mb-3">Add New Story</a>
    
    <div class="row">
        @foreach ($stories as $story)
        <div class="col-md-4">
            <div class="card mb-4 text-center">
                <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset('storage/' . $story->image) }}" 
                       class="rounded-circle img-fluid" 
                       alt="{{ $story->name }}" 
                       style="width: 150px; height: 150px; object-fit: cover; object-position: top;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $story->name }}</h5>
                    <p class="card-text">{{ Str::limit($story->story, 100) }}</p>
                    <a href="{{ route('stories.show', $story->id) }}" class="btn btn-secondary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
