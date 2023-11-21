@extends('layouts.landing', ['title' => 'Case Studies'])

@section('body')

<!-- Contact us -->
<div class="untree_co-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mb-5">

                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Case Studies</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Quam consequat risus eu in proin leo vitae. Tortor ut mus dolor elit urna imperdiet maecenas magna. Condimentum mi et quisque pretium diam imperdiet.</p>
            </div>
            <div class="col-md-6 col-lg-7 justify-content-between">
                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom sub-heading-title">Latest Project</h2>
                </div>

                <p data-aos="fade-up" data-aos-delay="100" class="sub-heading-content">Solar energy is an energy source that is environmentally sustainable, renewable, and abundant. With this, solar energy plays an important role in building systems for energy generation and
                    thermal utilization.</p>
                <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route('about-us') }}" class="btn btn-primary">Read Case Study</a></p>
            </div>
            <div class="col-md-6 col-lg-5 item">
                <a href="#" class="item-wrap mb-4" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/case-study.png') }}" width="100%">
                </a>
            </div>
        </div>
    </div>
</div> <!-- /.end contact us -->

<!-- Case study -->
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 item">
                <a href="{{ asset('images/ad.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/ad.png') }}" width="100%">
                </a>
                <p class="case-title" data-aos="fade-up" data-aos-delay="0">Anaerobic Digestion</p>
                <p class="case-content" data-aos="fade-up" data-aos-delay="0">Our research and development looks at introducing a solid waste management technique that
                    goes further</p>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="{{ asset('images/ce.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/ce.png') }}" width="100%">
                </a>
                <p class="case-title" data-aos="fade-up" data-aos-delay="0">Circular Economy</p>
                <p class="case-content" data-aos="fade-up" data-aos-delay="0">A trending topic that needs attention around the world, is how finite quantities of resources are
                    against daily consumption trends of products.</p>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="{{ asset('images/cds.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/cds.png') }}" width="100%">
                </a>
                <p class="case-title" data-aos="fade-up" data-aos-delay="0">City Demand Side Management</p>
                <p class="case-content" data-aos="fade-up" data-aos-delay="0">Consumer demand for energy, water, and waste management as a day-to- day necessity must be
                    driven together via investments in research.</p>
            </div>
        </div>
    </div>
</div> <!-- /end Case Study -->


@endsection
