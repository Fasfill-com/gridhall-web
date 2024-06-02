@extends('layouts.landing', ['title' => 'Contact Us'])

@section('body')

<!-- Contact us -->
<div class="untree_co-section mb-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mb-5">

                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Fasfill account deletion request</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">We don't want to see you go. You can use the form below to confirm that your account and associated data should be deleted. Enter the OTP sent to your email</p>
            </div>

            <div class="col-lg-12 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-body">
                        <!-- Display feedback messages -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <!-- Check if email session data exists -->
                        @if (session()->has('email'))
                        <form action="{{ route('fasfill.request-confirmed', ['email' => session('email')]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="OTP">OTP</label>
                                    <input type="text" id="otp" name="otp" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="submit" value="Confirm account deletion" class="btn btn-primary float-right">
                                </div>
                            </div>
                        </form>
                        @else
                        <!-- Handle the case where email session data is missing -->
                        <div class="alert alert-danger">
                            Missing required information to proceed with account deletion.
                        </div>
                        <a href="{{ route('fasfill-account-deletion-request') }}" class="btn btn-primary float-right">Go back</a>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> <!-- /.end contact us -->

@endsection
