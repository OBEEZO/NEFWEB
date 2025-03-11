@extends('layouts.app')

@section('content')

@php
    $pageTitle = 'Donations';
    $pageDescription = 'The Hand that Gives is the One that Receives.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="owl-carousel header-carousel position-relative" style="height: 0; margin-bottom:2px; margin-top: 50px;"></div>

<!-- Donations Section -->
<div class="container py-5">
    <h1 class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">Support Our Cause</h1>
    <p class="text-center text-muted mb-5 wow fadeInUp" data-wow-delay="0.2s">
        Your donation makes a difference. Choose your preferred donation method below.
    </p>

    <div class="row justify-content-center">
        <!-- M-Pesa Donation -->
        <div class="col-lg-5 col-md-6">
            <div class="card shadow-sm border-0 rounded-lg p-4 wow fadeInUp" data-wow-delay="0.3s">
                <h3 class="text-center mb-3"><i class="fas fa-mobile-alt text-success"></i> Donate via M-Pesa</h3>
                <form action="{{ route('donate.mpesa') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Amount (KES):</label>
                        <input type="number" name="amount" class="form-control" required placeholder="Enter amount">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" required placeholder="e.g. 2547XXXXXXXX">
                    </div>
                    <button type="submit" class="btn btn-success w-100 py-2">
                        <i class="fas fa-donate"></i> Donate with M-Pesa
                    </button>
                </form>
            </div>
        </div>

        <!-- Bank Transfer Donation -->
        <div class="col-lg-5 col-md-6">
            <div class="card shadow-sm border-0 rounded-lg p-4 wow fadeInUp" data-wow-delay="0.4s">
                <h3 class="text-center mb-3"><i class="fas fa-university text-primary"></i> Bank Transfer</h3>
                <p class="text-muted text-center">Send your donation to:</p>
                <ul class="list-unstyled text-center mb-3">
                    <li><strong>Bank:</strong> ABC Bank</li>
                    <li><strong>Account Number:</strong> 123456789</li>
                </ul>
                <form action="{{ route('donate.bank') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Amount (KES):</label>
                        <input type="number" name="amount" class="form-control" required placeholder="Enter amount">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Upload Payment Receipt:</label>
                        <input type="file" name="receipt" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">
                        <i class="fas fa-check-circle"></i> Confirm Donation
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
