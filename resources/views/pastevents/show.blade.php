@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Event Details';
    $pageDescription = 'Discover more about this event.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="owl-carousel header-carousel position-relative" style="height: 0; margin-bottom:2px; margin-top: 50px;"></div>
    
<!-- Event Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4 no-gutters">
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-5">
                    <img 
                        class="flex-shrink-0 img-fluid border rounded" 
                        src="{{ $pastevent->image ? asset('storage/' . $pastevent->image) : asset('assets/img/no-image.png') }}" 
                        alt="Event Image" 
                        style="width: 100px; height: 100px; object-fit: cover;"
                    >
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $pastevent->title }}</h3>
                        <p class="text-muted"><strong>Date:</strong> {{ \Carbon\Carbon::parse($pastevent->date)->format('F d, Y') }}</p>
                    </div>
                </div>
                <div class="mb-5 text-justify">
                    <h4 class="mb-3"></h4>
                    {!! $pastevent->description !!}
                </div>
            </div>
        </div>

        @auth
            @if(auth()->user()->is_admin)
                <div class="container">
                    <div class="card w-50 mx-auto">
                        <div class="card-header bg-warning text-light opacity-75">
                            <h4 class="text-light">DELETE SECTION</h4>
                            <p>Warning: This will permanently delete this event!</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('event-delete', $pastevent->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger px-5 mx-auto d-block">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endauth
    </div>
</div>
<!-- Event Detail End -->
@endsection
