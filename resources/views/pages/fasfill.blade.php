@extends('layouts.landing-fasfill', ['title' => 'Fasfill'])

@section('body')
<!-- Fasfill -->
<div class="untree_co-section-alleypay fasfill">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5 mt-5">
                <div class="section-title mt-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mt-5 text-white custom-heading">Fasfill</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="custom-container-text pl-0 text-justify" style="margin-top: -30px">Offering real-time information, ranging from latest fuel prices and other products available in refill stations enabling users get ahead of long grueling queues. As well as, SOS features that allow users have access to public and security agencies</p>
                <!-- Centered Buttons -->
                <div class="flex-button mb-2">
                    <a href="https://play.google.com/store/apps/details?id=com.gridhall.fasfill" target="_blank" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0" style="text-transform: none;">
                        <img src="{{ asset('images/google-play.svg') }}" width="22" height="24" alt="Get it on Android">
                        Get it on Android
                    </a>
                    <div class="m-2"></div>
                    <a href="https://apps.apple.com/ng/app/fasfill/id6445800584" target="_blank" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0" style="text-transform: none;">
                        <img src="{{ asset('images/apple-white.svg') }}" width="22" height="24" alt="Get it on iPhone">
                        Get it on iPhone
                    </a>
                </div>
            </div>
            <div class="col-md-12 col-lg-7" data-aos="fade-up" data-aos-delay="0">
                <img class="img-fluid" src="{{ asset('images/fasfill.png') }}" width="100%" height="100%">
            </div>
        </div>
    </div>
</div> <!-- /end Fasfill -->

<!-- Experience the power -->
<div class="untree_co-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center mb-5">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="line-bottom mb-1 heading">Experience the Power of Community with FasFill</h3>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="custom-container-text text-gray-500" style="margin-top: -30px">With FasFill, residents can connect with their community in a whole new way. From checking fuel prices to hiring professionals, and staying up-to-date with the community</p>
            </div>
            <div class="col-md-12 col-lg-5 custom-img">
                <img class="img-fluid" src="{{ asset('images/fasfill-power.png') }}" width="90%" data-aos="fade-up" data-aos-delay="0">
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="row mt-5 ml-4">
                    <div class="col-6">
                        <img src="{{ asset('images/business-card.svg') }}" width="38" height="38" alt="Business card">
                        <p class="custom-heading-sm mt-4" data-aos="fade-up" data-aos-delay="0">Businesses Services</p>
                        <p class="custom-heading-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">Hire a professional & see other businesses and the services they offer in your nearby community</p>
                    </div>

                    <div class="col-6">
                        <img src="{{ asset('images/circles.svg') }}" width="38" height="38" alt="Circles">
                        <p class="custom-heading-sm mt-4" data-aos="fade-up" data-aos-delay="0">Circles</p>
                        <p class="custom-heading-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">Interact with a smaller audience sharing similar interests from within your community</p>
                    </div>

                    <div class="col-6 mt-5">
                        <img src="{{ asset('images/event.svg') }}" width="38" height="38" alt="Events">
                        <p class="custom-heading-sm mt-4" data-aos="fade-up" data-aos-delay="0">Events</p>
                        <p class="custom-heading-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">Be aware of local events happening near you, such as weddings, peaceful protests, and national celebrations</p>
                    </div>

                    <div class="col-6 mt-5">
                        <img src="{{ asset('images/tourist.svg') }}" width="38" height="38" alt="Tourist Sites">
                        <p class="custom-heading-sm mt-4" data-aos="fade-up" data-aos-delay="0">Tourist Sites</p>
                        <p class="custom-heading-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">Find tourist sites near your location, from famous art galleries to trendy cafes, and lots of picturesque spots</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end Experience the power -->

<!-- Verified space -->
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom heading mb-1 mt-5">Experience a secure and verified space where user-residents utilize relevant resources made available for the community, by the community</h2>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 ">
                <img class="img-fluid" src="{{ asset('images/girls.png') }}" width="100%" data-aos="fade-up" data-aos-delay="0" style="border-radius: 15px;">
            </div>
        </div>
    </div>
</div> <!-- /end Verified space -->

<!-- Experience the power -->
<div class="untree_co-section mb-5" style="padding: 0;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-5 custom-img">
                <img class="img-fluid" src="{{ asset('images/fasfill-mobile.png') }}" width="100%" height="100%" data-aos="fade-up" data-aos-delay="0">
            </div>
            <div class="col-md-12 col-lg-7 col-sm-12">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="line-bottom mb-1 heading">Download the Fasfill app today and be up to date with the news and services surrounding your nearby neighborhood and community</h3>
                </div>
                <div class="flex-button mb-2">
                    <a href="https://play.google.com/store/apps/details?id=com.gridhall.fasfill" target="_blank" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0" style="text-transform: none;">
                        <img src="{{ asset('images/google-play.svg') }}" width="22" height="24" alt="Get it on Android">
                        Get it on Android
                    </a>
                    <div class="m-2"></div>
                    <a href="https://apps.apple.com/ng/app/fasfill/id6445800584" target="_blank" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0" style="text-transform: none;">
                        <img src="{{ asset('images/apple-black.svg') }}" width="22" height="24" alt="Get it on iPhone">
                        Get it on iPhone
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end Experience the power -->
@endsection
