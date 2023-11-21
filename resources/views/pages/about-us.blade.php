@extends('layouts.landing', ['title' => 'About Us'])

@section('body')
<!-- About Us -->
<div class="untree_co-section mt-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-3 col-lg-3 item">
                <div class="section-title mt-2" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">About Us</h2>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 justify-content-between">
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">We are passionate about value addition to city-wide economies, particularly the economic zones.
                    Our commitment lies in promoting social, economic, and environmental ideas that will build
                    industries for tomorrow. We will always be in the midst of developing and investing in unique
                    solutions that harness creativity and innovation towards solving critical problems. </p>

                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Thus, GridHall
                    Inc’s intent remains to smartly assemble industries that will represent the future today, by
                    investing in unique solutions that aim towards resolving and eradicating critical problems our
                    current industries are plagued with.</p>

                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Our approaches are streamlined towards accelerating innovation where research is the driving
                    force for the overarching goals of efficiency improvements. GridHall Inc thrives in designing
                    solutions where data is at the core of services rendered, where research and development are
                    fundamental building blocks that aid in making critical investments that build robust smart cities.
                </p>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">
                    Our model relies on implementing intuitive mechanisms to scale digitization and automation
                    across our industries of target.</p>
            </div>
        </div>
    </div>
</div> <!-- /end about us -->

<!-- Mission... -->
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 border-sm justify-content-between text-center">

                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1 mvi-title">Mission</h2>
                </div>

                <p class="mvi-content" data-aos="fade-up" data-aos-delay="0">Our mission is to prioritize digitization and smart integration to improve
                    technologies today by driving the change for sustainability and reform.</p>
            </div>
            <div class="col-md-4 col-lg-4 border-sm justify-content-between text-center">

                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1 mvi-title">Vision</h2>
                </div>

                <p class="mvi-content" data-aos="fade-up" data-aos-delay="0">To integrate smart technology in industries, to contribute towards clean energy that
                    pioneer the best environmental and social practices.</p>
            </div>
            <div class="col-md-4 col-lg-4 justify-content-between text-center">

                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1 mvi-title">Intent</h2>
                </div>

                <p class="mvi-content" data-aos="fade-up" data-aos-delay="0">To smartly assemble, add value, and manage industries that represent the future, and most
                    importantly, today.</p>
            </div>
        </div>
    </div>
</div> <!-- /end Mission... -->

<!-- Our people -->
<div class="untree_co-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 justify-content-between">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Our People</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">GridHall Inc. prides itself in the way in which it celebrates individuality and
                    fosters collective growth. We are committed to promoting systemic social and
                    economic inclusion towards building smart industries of tomorrow.</p>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Our global team of dedicated experts, ranges in talents of Engineers,
                    Developers, Designers, as well as Project management and Operations Officers. </p>
            </div>
            <div class="col-md-6 col-lg-6">
                <a href="{{ asset('images/people-hand.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/people-hand.png') }}">
                </a>
            </div>
        </div>
    </div>
</div> <!-- /end Our people -->

@endsection
