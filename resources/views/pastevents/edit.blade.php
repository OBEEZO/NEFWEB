@extends('layouts.app')

<div class="container-xxl py-5">
    <x-AlertMessage></x-AlertMessage>
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Update: {{ $pastevent->title }}</h1>
        <div class="row g-4 no-gutters">
            <div class="col-md-12">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form class="mx-auto" method="POST" enctype="multipart/form-data" action="{{ route('update-pastevent', $pastevent->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mx-auto">
                            <!-- Past Event Image -->
                            <div class="col-md-6 mb-3">
                                <label for="pastevent_image">Pick a Display Image</label>
                                <input 
                                    type="file" 
                                    class="form-control @error('image') is-invalid @else is-valid @enderror" 
                                    id="pastevent_image" 
                                    name="image"
                                >
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

                            <!-- Past Event Title -->
                            <div class="col-md-6 mb-3">
                                <label for="pastevent_title">Enter Event Title</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('title') is-invalid @else is-valid @enderror"  
                                    id="pastevent_title" 
                                    placeholder="e.g., Charity Fundraiser 2024" 
                                    required
                                    value="{{ $pastevent->title }}"
                                    name="title"
                                >
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
                            <!-- Past Event Date -->
                            <div class="col-md-6 mb-3">
                                <label for="pastevent_date">Event Date</label>
                                <input 
                                    type="date" 
                                    class="form-control @error('date') is-invalid @else is-valid @enderror"  
                                    id="pastevent_date" 
                                    required
                                    value="{{ $pastevent->date }}"
                                    name="date"
                                >
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

                        <!-- Past Event Description -->
                        <div class="row mx-auto">
                            <div class="col-md-12 mb-3">
                                <label for="pastevent_description">Event Description</label>
                                <textarea name="description" id="editor" cols="130" rows="10">
                                    {{ $pastevent->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group mx-auto mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tc" id="invalidCheck3" required>
                                <label class="form-check-label" for="invalidCheck3">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mx-auto px-3" type="submit">Update Past Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>