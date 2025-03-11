@extends('layouts.app')

@section('title', 'Contact Us')

@section('breadcrumb_title', 'Contact Us')

@section('breadcrumb_links')
<span>Contact Us <i class="fa fa-chevron-right"></i></span>
@endsection

@section('content')
@include('partials.breadcrumbs')

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span><br> 30320 Kipande Rd, Westlands, Nairobi, KENYA</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://+254 711 335022"> <br>+254 711 335022</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@nudiempirefoundation.org">info@nudiempirefoundation.org</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">www.nudiempirefoundation.org</a></p>
          </div>
        </div>
        <div class="row block-9 d-flex">
    <div class="col-md-6 pr-md-5">
        <h4 class="mb-4">Do you have any questions?</h4>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="col-md-6">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.36460837961!2d36.79972893758502!3d-1.2681032269338388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173c0a1f9de7%3A0xad2c84df1f7f2ec8!2sWestlands%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1740245129588!5m2!1sen!2ske"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

      </div>
    </section>
@endsection
