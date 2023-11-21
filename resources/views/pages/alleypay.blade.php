@extends('layouts.landing', ['title' => 'AlleyPay'])

@section('body')

<!-- Alleypay -->
<div class="untree_co-section-alleypay">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mt-5" style="margin-bottom: 0px;">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1 alleypay-heading">Providing Payment Solutions That Are Secure</h2>
                </div>
                <p class="alleypay-subheading" data-aos="fade-up" data-aos-delay="0">Open an account today and explore the vast array of financial services we offer our users to enable easy day-to-day transactions</p>

                <!-- Centered Buttons -->
                <div class="flex-button justify-content-center">
                    <div class="col-md-12 col-sm-12 col-lg-3 mb-4">
                        <a href="#" class="btn btn-outline-primary btn-outline-primary-icon-1 btn-block" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{ asset('images/google-play.svg') }}" width="22" height="24" style="padding-bottom: 5px" alt="Get it on Android">
                            Get it on Android
                        </a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-3 mb-4">
                        <a href="#" class="btn btn-outline-primary btn-outline-primary-icon-1 btn-block" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{ asset('images/apple-black.svg') }}" width="22" height="24" style="padding-bottom: 5px" alt="Get it on iPhone">
                            Get it on iPhone
                        </a>
                    </div>
                </div>

                <a class="item-wrap fancybox mb-4" data-aos="fade-up" data-aos-delay="0">
                    <img class="img-fluid" src="{{ asset('images/alleypay.png') }}" width="90%">
                </a>
            </div>
        </div>
    </div>
</div> <!-- /.end Alleypay -->

<!-- Send/Receive -->
<div class="untree_co-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1 heading">Send/receive money, make payments online, & set up a business account with ease!</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 justify-content-between item">
                <img class="img-fluid" src="{{ asset('images/payment-method.png') }}" width="100%" data-aos="fade-up" data-aos-delay="0">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="contact-info">

                    <div class="address mt-4" data-aos="fade-up" data-aos-delay="0">
                        <i class="" style="background: #161616; color:#fff">1</i>
                        <h4 class="mb-2"><b>Secure Digital Storage</b></h4>
                        <p class="text-justify">Our E-Naira Wallet feature lets you safely store your digital assets on our app. It employs advanced encryption protocols to protect your funds, giving you peace of mind</p>

                    </div>
                    <div class="phone mt-4" data-aos="fade-up" data-aos-delay="0">
                        <i class="" style="background: #161616; color:#fff">2</i>
                        <h4 class="mb-2"><b>QR Code Payment Gateway</b></h4>
                        <p class="text-justify">Our payment gateways including QR codes, allows businesses to facilitate smoother transactions with it’s customers</p>
                    </div>

                    <div class="email mt-4" data-aos="fade-up" data-aos-delay="0">
                        <i class="" style="background: #161616; color:#fff">3</i>
                        <h4 class="mb-2"><b>Send E-Naira Easily</b></h4>
                        <p class="text-justify">You can easily send and receive funds from your friends and family. Our peer-to-peer feature allows for hassle-free transactions, without the need for intermediaries</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end Send/Receive -->

<!-- Why faspay -->
<div class="services-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mb-5">

                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Why Faspay?</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Individuals are continuously seeking payment solutions that’ll provide seamless transactions that’ll meet their everyday needs. So why Us?</p>
            </div>
            <div class="col-12">
                <div class="container custom-container" data-aos="fade-up" data-aos-delay="0">
                    <div class="row">
                        <div class="col-md-12 col-lg-7">
                            <p class="custom-container-heading" data-aos="fade-up" data-aos-delay="0">Employment of E-Naira and top-up</p>
                            <p class="custom-container-text" data-aos="fade-up" data-aos-delay="0">Use of E-Naira means providing safer and smoother transactions, promoting financial inclusion, eliminating transaction delays, and providing a first-class payment experience </p>
                            <p class="mb-0 ml-3" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-light">Download the app</a></p>
                        </div>

                        <div class="col-md-12 col-lg-5" style="padding: 0;">
                            <img class="img-fluid mt-5" src="{{ asset('images/iPhone-rhand.png') }}" width="100%" data-aos="fade-up" data-aos-delay="0" style="border-bottom-right-radius: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="container custom-container-sm mt-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="row" style="padding-bottom: 30px;">
                        <div class="col-7">
                            <p class="custom-container-heading-sm" data-aos="fade-up" data-aos-delay="0">Value added services</p>
                            <p class="custom-container-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">FasPay offers a range of services from marketing support to customer analytics to help business owners grow their businesses</p>
                        </div>
                        <div class="col-5">
                            <img class="img-fluid mt-5 custom-img-padding" src="{{ asset('images/financial.png') }}" width="100%" data-aos="fade-up" data-aos-delay="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="container custom-container-sm mt-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="row" style="padding-bottom: 30px;">
                        <div class="col-7">
                            <p class="custom-container-heading-sm" data-aos="fade-up" data-aos-delay="0">NFC cards</p>
                            <p class="custom-container-text-sm text-justify" data-aos="fade-up" data-aos-delay="0">FasPay offers additional customized NFC cards that ensure fast payment on any NFC supported device</p>
                        </div>
                        <div class="col-5" style="padding-bottom: 38px;">
                            <img class="img-fluid mt-5 custom-img-padding" src="{{ asset('images/mobile-banking.png') }}" width="100%" data-aos="fade-up" data-aos-delay="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end faspay -->

<!-- Ready to join -->
<div class="untree_co-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <div class="col-12 text-center ">
                                    <p class="mt-5" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-outline-secondary">Ready to join FasPay?</a></p>
                                    <h1 class="mb-4 text-white custom-heading" data-aos="fade-up" data-aos-delay="100">The emerging digital payment provider that’ll transform the financial world!</h1>
                                    <p class="custom-container-text" data-aos="fade-up" data-aos-delay="0">FasPay is right at your fingertips! Download the App today and get started</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                    <div class="row justify-content-center">
                        <!-- Centered Buttons -->
                        <div class="flex-button">
                            <div class="col-md-6 col-sm-12 col-lg-5">
                                <a href="#" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0">
                                    <img src="{{ asset('images/google-play.svg') }}" width="22" height="24" style="padding-bottom: 5px" alt="Get it on Android">
                                    Get it on Android
                                </a>
                            </div>
                            <div class="flex-button-margin"></div>
                            <div class="col-md-6 col-sm-12 col-lg-5">
                                <a href="#" class="btn btn-outline-secondary text-nowrap" data-aos="fade-up" data-aos-delay="0">
                                    <img src="{{ asset('images/apple-white.svg') }}" width="22" height="24" style="padding-bottom: 5px" alt="Get it on iPhone">
                                    Get it on iPhone
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <img class="img-fluid mt-3 " src="{{ asset('images/alleypay-app.png') }}" width="90%" data-aos="fade-up" data-aos-delay="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.end Ready to join -->

@endsection
