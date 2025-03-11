<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
       <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/neflogo.jpg') }}" alt="NEF Logo" class="logo-circle">
       </a>
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