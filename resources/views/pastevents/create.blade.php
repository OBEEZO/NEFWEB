@extends('layouts.app')

@section('content')
@php
    $pageTitle = 'Past Events';
    $pageDescription = 'Create a new past event and share details with your audience.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Create Past Event</h1>
        <div class="row g-4 no-gutters">
            <div class="col-md-12">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form class="mx-auto" method="POST" enctype="multipart/form-data" action="{{ route('pastevent-store') }}">
                        @csrf

                        <div class="row mx-auto">
                            <!-- Event Image -->
                            <div class="col-md-6 mb-3">
                                <label for="event_image">Pick a Display Image</label>
                                <input type="file"
                                    class="form-control @error('image') is-invalid @else is-valid @enderror"
                                    id="event_image" name="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        Image too large. Max image size is 4MB.
                                        {{ $message }}
                                    </div>
                                @else
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                @enderror
                            </div>

                            <!-- Event Title -->
                            <div class="col-md-6 mb-3">
                                <label for="event_title">Enter Event Title</label>
                                <input type="text"
                                    class="form-control @error('title') is-invalid @else is-valid @enderror"
                                    id="event_title" placeholder="e.g., Charity Gala 2024" required
                                    value="{{ old('title') }}" name="title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @else
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <!-- Event Date -->
                            <div class="col-md-6 mb-3">
                                <label for="event_date">Event Date</label>
                                <input type="date"
                                    class="form-control @error('date') is-invalid @else is-valid @enderror"
                                    id="event_date" required value="{{ old('date') }}" name="date">
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @else
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Event Description -->
                        <div class="row mx-auto">
                            <div class="col-md-12 mb-3">
                                <label for="event_description">Event Description</label>
                                <textarea name="description" id="editor" cols="130" rows="10">
                                    {{ old('description') }}
                                </textarea>
                            </div>
                        </div>

                        <button class="btn btn-primary mx-auto px-3" type="submit">Submit Past Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection