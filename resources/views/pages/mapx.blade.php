@extends('layouts.landing', ['title' => 'Contact Us'])

@section('body')

<!-- Mapx -->
<div class="untree_co-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mb-5 mt-5">
                <a href="{{ asset('images/coming-soon.png') }}" class="item-wrap fancybox mb-4" data-fancybox="" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/coming-soon.png') }}" width="70%">
                </a>
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">MapX Is Coming Soon</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end mapx -->

@endsection
