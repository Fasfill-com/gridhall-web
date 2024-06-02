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
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">We're sorry to see you go. If you wish to proceed, please use the form below to request the deletion of your account and all associated data. We will miss having you with us</p>
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
                        <form action="{{ route('fasfill.request-deletion') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="Email Address">Email Addres</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="submit" value="Verify account ownership" class="btn btn-primary float-right">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> <!-- /.end contact us -->

@endsection
