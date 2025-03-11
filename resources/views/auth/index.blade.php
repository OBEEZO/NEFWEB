@extends('layouts.app')
@section('content')
@php
    $pageTitle = 'Admin Page';
    $pageDescription = 'This page is authorize for Administrators only.';
@endphp

@include('partials.breadcrumbs', compact('pageTitle', 'pageDescription'))

<div class="container" style="margin-top: 80px;"></div>
   <div class="container-xxl py-5">
       <div class="container">
           <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Admin Page</h1>
           <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-6 mx-auto">
                <div class="wow fadeInUp mx-auto" data-wow-delay="0.5s">
                    <form class="mx-auto" method="POST" enctype="multipart/form-data" action="{{ route('authenticate') }}">
                        @csrf
                        <div class="row mx-auto">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer01">E-mail</label>
                                <input type="text" 
                                class="form-control"
                                id="validationServer01"
                                placeholder="E-mail"
                                name="email"
                                required>
                                
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                           
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer01">Password</label>
                                <input type="password" 
                                class="form-control"
                                id="validationServer01"
                                placeholder="Password"
                                name="password"
                                required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                           
                        </div>
                       
                        <button class="btn btn-primary mx-auto px-5" type="submit">Log In</button>
                    </form>
                </div>
            </div>
                 
           </div>
       </div>
   </div>
   <!-- Jobs End -->
   
   @endsection