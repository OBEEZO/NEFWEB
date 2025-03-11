
<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Nudi Empire Foundation is a Kenyan Community Based Organization which aims to transform and impact the community positively for sustainability and development for a better society through service.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://x.com/nudiempire"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/nudiempirefoundation"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/nudiempirefoundation/"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.tiktok.com/@nudiempirefoundation"><span class="fab fa-tiktok"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
    <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Upcoming Events</h2>

        @if(isset($footerEvents) && $footerEvents->count() > 0)
            @foreach($footerEvents as $event)
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" 
                       style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/default.jpg') }}');">
                    </a>
                    <div class="text">
                        <h3 class="heading">
                            <a href="{{ route('event-show', $event->id) }}">{{ $event->title }}</a>
                        </h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No upcoming events at the moment.</p>
        @endif
    </div>
</div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="/" class="py-2 d-block">Home</a></li>
                <li><a href="/about" class="py-2 d-block">About</a></li>
                <li><a href="{{ route('events-index', 'events') }}" class="py-2 d-block">Events</a></li>
                <li><a href="{{ route('pastevent.index', 'pastevents') }}" class="py-2 d-block">Past Events</a></li>
                <li><a href="{{ route('stories.index') }}" class="py-2 d-block">Stories</a></li>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">30320 Kipande Rd, Westlands, Nairobi, KENYA</span></li>
	                <li><a href="tel://+254 711 335022"><span class="icon icon-phone"></span><span class="text">+254 711 335022</span></a></li>
	                <li><a href="mailto:info@nudiempirefoundation.org"><span class="icon icon-envelope"></span><span class="text">info@nudiempirefoundation.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by ExcelTechsolutions <!--This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>