@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('assets/images/bg0.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">NEF aims to transform and impact the community positively</h1>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://www.youtube.com/watch?v=gLek6aXgyF0" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="10000">0</strong>
                <span>People in 10 counties in Kenya</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Make Donation</h3>
              	<p>Your generosity has the power to change lives. Join us in making a difference today!</p>
              	<p><a href="/donate" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>Together, we can uplift communities, inspire change, and create a better future.</p>
              	<p><a href="/contact" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Make Donation</h3>
                <p>Your generosity has the power to change lives. Every contribution supports our mission to create lasting impact in communities that need it the most.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Become A Volunteer</h3>
                <p>Together, we can uplift communities, inspire change, and create a better future. Sign up today and be the difference!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsorship</h3>
                <p>Empower lives and drive positive change by becoming a sponsor. Your support helps provide essential resources, education, and opportunities to those in need.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Upcoming Events</h2>
                <p>Don't miss out on our latest upcoming events and activities.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($events as $event)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('event-show', $event->id) }}" class="block-20" 
                           style="background-image: url('{{ asset('storage/' . $event->image) }}');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">{{ $event->date }}</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="{{ route('event-show', $event->id) }}">{{ $event->title }}</a></h3>
                            <p>{{ Str::limit(strip_tags($event->description), 100) }}</p>
                            <p><a href="https://wa.me/254711335022">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="ftco-section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-warning fw-bold">Meet Our Team</p>
            <h2 class="fw-bold text-dark">Awesome People Behind Our Foundation</h2>
        </div>
        
        <div class="team-slider d-flex overflow-hidden position-relative" style="white-space: nowrap;">
            <div class="team-wrapper d-flex" style="animation: scroll-left 20s linear infinite; gap: 20px;">
                @php
                    $teamMembers = [
                        ['name' => 'Thomas Nudi', 'role' => 'Founder & CEO', 'image' => 'Thomas.jpeg'],
                        ['name' => 'Dennis Irungu', 'role' => 'Co-founder & COO', 'image' => 'dennisgich.jpg'],
                        ['name' => 'Pamella Nudi', 'role' => 'Chief Financial Officer (CFO)', 'image' => 'Pamella.jpg'],
                        ['name' => 'Tina Akal', 'role' => 'Director of Communication', 'image' => 'Akal.jpg'],
                        ['name' => 'Domnic Oballah', 'role' => 'Chief Technology Officer', 'image' => 'oballa.jpg'],
                        ['name' => 'Mourine Mugethi', 'role' => 'Board Member', 'image' => 'Mourine.jpg'],
                        ['name' => 'Justine Luka', 'role' => 'Board Member', 'image' => 'Justine.jpg'],
                    ];
                @endphp
                
                @foreach ($teamMembers as $member)
                <div class="team-item text-center" style="min-width: 250px;">
                    <div class="team-img position-relative overflow-hidden" style="height: 300px; width: 100%; display: flex; justify-content: center; align-items: center; position: relative;">
                        <img src="{{ asset('assets/images/' . $member['image']) }}" class="img-fluid rounded shadow" alt="{{ $member['name'] }}" style="height: 100%; width: auto; object-fit: cover;">
                        <div class="team-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease-in-out; display: flex; justify-content: center; align-items: center;">
                            <div class="team-social d-flex justify-content-center">
                                <a href="https://x.com/nudiempire" class="mx-2" target="_blank" style="color: #fff; font-size: 18px;"><i class="fab fa-twitter"></i></a>
                                <a href="https://web.facebook.com/nudiempirefoundation" class="mx-2" target="_blank" style="color: #fff; font-size: 18px;"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/nudi-empire-foundation-nef-661887264/" class="mx-2" target="_blank" style="color: #fff; font-size: 18px;"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/nudiempirefoundation/" class="mx-2" target="_blank" style="color: #fff; font-size: 18px;"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-text py-3">
                        <h5 class="fw-bold">{{ $member['name'] }}</h5>
                        <p class="text-muted">{{ $member['role'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<style>
@keyframes scroll-left {
    from { transform: translateX(100%); }
    to { transform: translateX(-100%); }
}

.team-img:hover .team-overlay {
    opacity: 1;
}
</style>



<section class="ftco-gallery">
    <div class="d-md-flex">
        @foreach($galleryImages as $image)
            <a href="{{ asset('storage/' . $image->image) }}" 
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
               style="background-image: url({{ asset('storage/' . $image->image) }});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        @endforeach
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Past Events</h2>
                <p>See the highlights of our past events and activities.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($pastevents as $event)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('pastevent-show', $event->id) }}" class="block-20" 
                           style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/default.jpg') }}');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">{{ $event->date }}</a></div> <!-- Display date as stored -->
                            </div>
                            <h3 class="heading mt-3"><a href="{{ route('pastevent-show', $event->id) }}">{{ $event->title }}</a></h3>
                            <p>{{ Str::limit(strip_tags($event->description), 100) }}</p>
                            <a href="{{ route('pastevent-show', $event->id) }}" class="btn btn-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Community Stories</h2>
                <p>Read the inspiring stories from the community.</p>
            </div>
        </div>

        <div class="row d-flex">
            @foreach($stories as $story)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch text-center p-3 shadow rounded">
                        <!-- Circular Image -->
                        <a href="{{ route('stories.show', $story->id) }}" class="block-20 mx-auto d-block"
                           style="width: 150px; height: 150px; background-size: cover; background-position: center;
                                  background-image: url('{{ $story->image ? asset('storage/' . $story->image) : asset('assets/images/default.jpg') }}');
                                  border-radius: 50%;">
                        </a>

                        <div class="text mt-3">
                            <!-- Story Name -->
                            <h4><a href="{{ route('stories.show', $story->id) }}">{{ $story->name }}</a></h4>
                            
                            <!-- Story Description -->
                            <p>{{ Str::limit(strip_tags($story->story), 100) }}</p>

                            <!-- Read More Button -->
                            <a href="{{ route('stories.show', $story->id) }}" class="btn btn-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

		
<section class="ftco-section-3 img" style="background-image: url({{ asset('assets/images/bg.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url({{ asset('assets/images/nefembu.jpg') }}); width: 100%; min-height: 300px; background-size: cover; background-position: center;"></div>
            </div>
            <div class="col-lg-6 col-md-12 volunteer p-4 ftco-animate">
                <h3 class="mb-3">Be a Volunteer</h3>
                
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ route('volunteer.send') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
    </div>
    <div class="form-group">
        <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
    </div>
</form>

<!-- Display success or error messages -->
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

            </div>
        </div>
    </div>
</section>


	<style>
    .team-item {
        position: relative;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        transition: 0.3s ease-in-out;
    }

    .team-img {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .team-img img {
        transition: transform 0.3s ease-in-out;
    }

    .team-item:hover .team-img img {
        transform: scale(1.1);
    }

    .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .team-item:hover .team-overlay {
        opacity: 1;
    }

    .team-social a {
        color: #fff;
        font-size: 20px;
        margin: 0 10px;
        transition: 0.3s;
    }

    .team-social a:hover {
        color: #ffcc00;
    }
</style>

@endsection
