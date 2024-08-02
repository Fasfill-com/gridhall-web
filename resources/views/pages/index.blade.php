@extends('layouts.landing', ['title' => 'Home'])

@section('body')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('images/home-bg-img.jpeg') }}'); height: 150px; background-size: cover;">


    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-12">

                <div class="row justify-content-center ">

                    <div class="col-lg-6 text-center ">

                        <h1 class="mb-4 heading text-white home-heading" data-aos="fade-up" data-aos-delay="100">GridHall Incorporated</h1>
                        <h5 class="caption mb-4 d-inline-block" data-aos="fade-up" data-aos-delay="100">Providing sustainable solutions for smart cities</h5>
                        <!-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Button caption</a></p> -->

                    </div>


                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.end index -->

<!-- About Us -->
<div class="untree_co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 item">
                <a href="{{ asset('images/mixed-imgs.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/mixed-imgs.png') }}">
                </a>
            </div>
            <div class="col-md-6 col-lg-6 justify-content-between">

                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">About Us</h2>
                </div>

                <p data-aos="fade-up" data-aos-delay="100" class="about-content">GridHall Inc offers creative engineering and tech solutions that foster the growth of
                    sustainable smart cities. Our focus is on providing innovative solutions across key
                    macroeconomic sectors by optimizing data and smart infrastructures through valuable
                    products and services.</p>

                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Founded in 2021, the bedrock of GridHall Inc. is to attain developmental excellence in providing
                    smart, cutting-edge and innovative solutions to cities. Our motivation is to ensure the evolution
                    and transformation of developing cities through rendering efficient services and implementing
                    our intuitive business model.</p>

                <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route('about-us') }}" class="btn btn-primary">Read More</a></p>
            </div>
        </div>
    </div>
</div> <!-- /end about us -->

<!-- Services -->
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 justify-content-between">

                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Find out what services GridHall Inc. offers</h2>
                </div>

                <div class="contact-info-v">

                    <div class="address mt-4" data-aos="fade-up" data-aos-delay="0">
                        <i class=""><img src="{{ asset('images/tick-circle.svg') }}" alt="Logo" class="logo logo-img img-fluid mr-2" style="width: 40px;"></i>
                        <h4 class="mb-2"><b>Consultancy</b></h4>
                        <p class="list-check-style-content">Our industry experts can help you scale your business by both designing and executing advanced tech strategies to optimise your business journey</p>

                    </div>

                    <div class="address mt-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                        <i class=""><img src="{{ asset('images/tick-circle.svg') }}" alt="Logo" class="logo logo-img img-fluid mr-2" style="width: 40px;"></i>
                        <h4 class="mb-2"><b>Contracting</b></h4>
                        <p class="list-check-style-content">Our skilled team can deliver job support by operating and maintaining technology services to meet your project needs</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 item">
                <a href="{{ asset('images/img-eng.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/img-eng.png') }}" width="100%">
                </a>
            </div>
        </div>
    </div>
</div> <!-- /end services -->

<!-- Founder's note -->
<!-- <div class="untree_co-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-4">Founder’s Note</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <a href="{{ asset('images/ceo.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/ceo.png') }}" width="100%">
                </a>
            </div>
            <div class="col-md-6 col-lg-6 mt-5 justify-content-between">
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">“Every city should prioritize investment in data acquisition and analysis in fostering
                    strategic development. At GridHall, we understand that data differs widely with
                    respect to developed and developing cities not only because of the gap in
                    technological advancements, but also due to key attributes unique to each city. </p>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">At GridHall, we understand that data differs widely with
                    respect to developed and developing cities not only because of the gap in
                    technological advancements, but also due to key attributes unique to each city. </p>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Hence,
                    GridHall Incorporated plays a vital role in bridging the data gap”.</p>
                <p data-aos="fade-up" data-aos-delay="100" ><b>Mukhtar Gazali</br>
                        CEO, GridHall Inc.</b></p>

            </div>
        </div>
    </div>
</div> -->
<!-- /end founder's note -->

@endsection
