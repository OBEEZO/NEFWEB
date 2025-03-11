<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NEF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">NEF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
	  <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('events-index', 'events') }}" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="{{ route('pastevent.index', 'pastevents') }}" class="nav-link">Past Events</a></li>
                <li class="nav-item"><a href="{{ route('stories.index') }}" class="nav-link">Stories</a></li>
                <li class="nav-item"><a href="{{ route('gallery.index') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                 <!-- Authentication Links -->
@auth
    <li class="nav-item d-flex align-items-center">
        <form action="{{ route('logout') }}" method="post" class="m-0">
            @csrf
            <button class="btn nav-link p-0" style="background: none; border: none; color: blue;">
                <i class="fa fa-sign-out"></i> Log Out
            </button>
        </form>
    </li>
@endauth
            @guest
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">
                    <i class="lni lni-lock-alt"></i> Login
                </a>
            </li>
            @endguest
            <div class="d-flex ms-2">
              <a class="btn btn-warning text-white py-2 px-4 rounded-pill shadow-lg fw-bold d-flex align-items-center justify-content-center" 
                  href="{{ route('donate.form') }}" 
                  style="font-size: 16px; height: 45px;">
                   Donate Now
              </a>
            </div>
            </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('{{ asset('assets/images/bg.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
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
              	<h3 class="mb-4">Donate Money</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
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
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Become A Volunteer</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsorship</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Causes</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-1.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-2.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-3.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-4.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-5.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/cause-6.jpg') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Clean water for the urban area</a></h3>
		    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
		    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

<!-- Team Section Start -->
<section class="ftco-section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-warning fw-bold">Meet Our Team</p>
            <h2 class="fw-bold text-dark">Awesome guys behind our charity activities</h2>
        </div>
        
        <div class="row justify-content-center">
            @php
                $teamMembers = [
                    ['name' => 'Donald John', 'role' => 'Founder & CEO', 'image' => 'team-1.jpg'],
                    ['name' => 'Adam Phillips', 'role' => 'Chef Executive', 'image' => 'team-2.jpg'],
                    ['name' => 'Thomas Olsen', 'role' => 'Chef Advisor', 'image' => 'team-3.jpg'],
                    ['name' => 'James Alien', 'role' => 'Advisor', 'image' => 'team-4.jpg'],
                ];
            @endphp

            @foreach ($teamMembers as $member)
            <div class="col-lg-3 col-md-6">
                <div class="team-item text-center">
                    <div class="team-img position-relative overflow-hidden">
                        <img src="{{ asset('assets/images/' . $member['image']) }}" class="img-fluid w-100 rounded shadow" alt="{{ $member['name'] }}">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-text py-3">
                        <h5 class="fw-bold">{{ $member['name'] }}</h5>
                        <p class="text-muted">{{ $member['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team Section End -->


<section class="ftco-gallery">
    	<div class="d-md-flex">
	    	<a href="{{ asset('assets/images/cause-2.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/images/cause-2.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset('assets/images/cause-3.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/images/cause-2.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset('assets/images/cause-4.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/images/cause-2.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset('assets/images/cause-5.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/images/cause-5.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    	</div>
	    </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/image_2.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/image_3.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/event-1.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/event-2.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/event-3.jpg') }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-3 img" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url({{ asset('assets/images/bg_4.jpg') }});"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">Be a volunteer</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset('assets/images/image_1.jpg') }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset('assets/images/image_2.jpg') }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
                <li><a href="#" class="py-2 d-block">Causes</a></li>
                <li><a href="#" class="py-2 d-block">Event</a></li>
                @if(auth()->check() && auth()->user()->role === 'admin')
                <li><a href="{{ route('donations.index') }}">Admin Panel</a></li>
            @endif
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
    

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
        color: #0096D6;
    }
</style>

  </body>
</html>