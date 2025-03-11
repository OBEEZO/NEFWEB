@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Past Events';
    $pageDescription = 'Explore our past events and activities.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="owl-carousel header-carousel position-relative" style="height: 0; margin-bottom:2px; margin-top: 50px;"></div>

<h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 100px;">
    Past Events
</h1>

<!-- Add New Past Event Button -->
<div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
    @if (auth()->check() && auth()->user()->rank == 0)
        <a class="btn btn-secondary btn-sm d-inline-block w-auto px-3 py-1 mb-4" href="{{ route('pastevent-create') }}">
        Add New Past Event
        </a>
    @endif
</div>

<!-- Past Events Section Start -->
<div class="container my-5">
    <div class="row">
       @foreach ($pastevents as $pastevent)
            <div class="col-md-4 mb-4"> <!-- Each event occupies 1/3rd of the row -->
                <div class="card h-100"> <!-- Card stretches to match height -->
                    <!-- Event Image -->
                    <img 
                        class="card-img-top"
                        src="{{ $pastevent->image ? asset('storage/' . $pastevent->image) : asset('assets/images/no-image.png') }}"
                        alt="Event Image"
                        style="height: 200px; object-fit: cover;"
                    >
                    
                    <!-- Event Content -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $pastevent->title }}</h5>
                        <p class="card-text">
                            <strong>Date:</strong> {{ \Carbon\Carbon::parse($pastevent->date)->format('F d, Y') }}<br>
                            {!! implode(' ', array_slice(explode(' ', $pastevent->description), 0, 20)) !!}...
                        </p>
                        <div class="d-flex justify-content-center gap-2">
                            <a class="btn btn-primary btn-sm" href="{{ route('pastevent-show', $pastevent->id) }}">Read More</a>
                            @auth
                                @if (auth()->user()->is_admin)
                                    <a class="btn btn-info btn-sm text-light" href="{{ route('pastevent-edit-form', $pastevent->id) }}">Update</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

<!-- Pagination -->
<div class="mt-5 d-flex justify-content-center">
    {{ $pastevents->links('vendor.pagination.custom') }}
</div>

</div>

<script>
    $(document).ready(function() {
        $('#search-addon').on('click', function(e) {
            e.preventDefault();
            var searchQuery = $('#search-input').val();
            var currentSegment = '{{ request()->segment(2) }}';

            if (currentSegment === 'pastevents') {
                window.location.href = 'pastevents?q=' + searchQuery;
            }
        });
    });
</script>
@endsection
