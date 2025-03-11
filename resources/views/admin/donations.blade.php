@extends('layouts.app')

@section('content')

@php
    $pageTitle = 'Bank Donations';
    $pageDescription = 'A record of all bank donations made.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container py-5">
    <h1 class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s"> </h1>

    <div class="card shadow-sm border-0 rounded-lg p-4 wow fadeInUp" data-wow-delay="0.2s">
        <h2 class="text-center mb-3"><i class="fas fa-donate text-primary"></i> Donations Record</h2>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th><i class="fas fa-coins"></i> Amount (KES)</th>
                        <th><i class="fas fa-credit-card"></i> Method</th>
                        <th><i class="fas fa-file-invoice"></i> Proof</th>
                        <th><i class="fas fa-calendar-alt"></i> Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <td><strong>{{ number_format($donation->amount) }} KES</strong></td>
                        <td>{{ ucfirst($donation->method) }}</td>
                        <td>
                            @if($donation->proof)
                                <a href="{{ Storage::url($donation->proof) }}" target="_blank" class="btn btn-sm btn-success">
                                    <i class="fas fa-eye"></i> View Receipt
                                </a>
                            @else
                                <span class="text-muted">No Proof</span>
                            @endif
                        </td>
                        <td>{{ $donation->created_at->format('d M Y, H:i A') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
