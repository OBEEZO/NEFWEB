
@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Stories';
    $pageDescription = 'Explore the good stories of our projects.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container">
    <h1 class="text-center">{{ $story->name }}</h1>
    <div class="text-center mb-4">
        <img src="{{ asset('storage/' . $story->image) }}" class="img-fluid rounded" 
             style="max-height: 400px; object-fit: contain;">
    </div>
    <p class="lead">{{ $story->story }}</p>
    <a href="{{ route('stories.index') }}" class="btn btn-primary">Back to Stories</a>
</div>
@endsection
