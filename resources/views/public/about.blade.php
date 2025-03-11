@extends('layouts.app')

@section('title', 'About Us')

@section('breadcrumb_title', 'About Us')

@section('breadcrumb_links')
<span>About <i class="fa fa-chevron-right"></i></span>
@endsection

@section('content')
@include('partials.breadcrumbs')

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch" style="background-image: url({{ asset('assets/images/nefembu.jpg') }}); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <h2 class="mb-4">Welcome to Nudi Empire Foundation</h2>
                <p>Nudi Empire Foundation is a Kenyan Community Based Organization which aims to transform and impact the community positively for sustainability and development for a better society through service.</p>
                <p>Education | Mentorship | Environment | Sports | Charity</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-intro ftco-intro-2 py-5" id="section-counter">
    <div class="container">
        <div class="tab-class p-4 rounded" style="background-color: #0096D6;">
            <!-- Navigation Tabs -->
            <ul class="nav nav-pills mb-3">
                <li class="nav-item">
                    <a class="nav-link active tab-link" data-bs-toggle="pill" href="#tab-1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-link" data-bs-toggle="pill" href="#tab-2">Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-link" data-bs-toggle="pill" href="#tab-3">Vision</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show active">
                    <h5 class="fw-bold">NEF</h5>
                    <p class="text-dark">We aim at transforming and impacting the community positively for sustainability and development</p>
                    
                </div>
                <div id="tab-2" class="tab-pane fade">
                    <h5 class="fw-bold">NEF</h5>
                    <p class="text-dark">Transform and impact society positively through community service.<br>To empower and uplift communities through education, mentorship, environmental conservation, sports, and charity, fostering sustainable development and a better society through dedicated service.</p>
                   
                </div>
                <div id="tab-3" class="tab-pane fade">
                    <h5 class="fw-bold">NEF</h5>
                    <p class="text-dark">Inculcate transformational leadership through true servanthood for sustainability and development.<br>To create a transformed and self-sustaining society where every individual has the opportunity to thrive through education, mentorship, environmental stewardship, sports, and charitable initiatives.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Core Values</h2>
                <p>At Nudi Empire Foundation, our values define who we are and guide our impact in the community.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="card shadow p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i> <!-- Teamwork Icon -->
                    </div>
                    <h3 class="mb-3 text-primary">Teamwork</h3>
                    <p>We believe in working together, fostering an inclusive and supportive environment where collaboration, innovation, and flexibility thrive.</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="card shadow p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-balance-scale fa-3x text-success"></i> <!-- Integrity Icon -->
                    </div>
                    <h3 class="mb-3 text-success">Integrity</h3>
                    <p>We uphold the highest level of trust, accountability, and professionalism in all our endeavors, ensuring transparency and ethical practices.</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="card shadow p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-handshake fa-3x text-warning"></i> <!-- Partnership Icon -->
                    </div>
                    <h3 class="mb-3 text-warning">Partnership</h3>
                    <p>We recognize that no one has a monopoly on knowledge. By coming together, we achieve greater impact, growth, and long-lasting change.</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="card shadow p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-hands-helping fa-3x text-danger"></i> <!-- Servanthood Icon -->
                    </div>
                    <h3 class="mb-3 text-danger">Servanthood</h3>
                    <p>True leadership is found in service. We believe that by dedicating ourselves to others, we bring meaningful change and impact lives positively.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* Tab Styling */
    .tab-link {
        background-color: white;
        color: black;
        font-weight: bold;
        transition: 0.3s;
        border-radius: 5px;
        padding: 10px 20px;
    }

    .nav-link.active {
        background-color: #0096D6 !important;
        color: white !important;
    }

    /* Read More Button */
    .btn-read-more {
        background-color: #0096D6;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-read-more:hover {
        background-color: #0096D6;
    }
</style>

@endsection
