<nav class="site-nav mb-5" style="background: #2A2B30;">
    <div class="sticky-nav js-sticky-header" style="background: #2A2B30;">
        <div class="container position-relative">
            <div class="site-navigation text-center">
                <a href="{{ route('home') }}" class="logo menu-absolute m-0">
                    <img src="{{ asset('images/gridhall-white.svg') }}" alt="Logo" class="logo logo-img img-fluid" width="30" height="15">
                </a>

                <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                    <li class=""><a href="{{ route('about-us') }}">About Us</a></li>
                    <li class="has-children">
                        <a href="#">Products</a>
                        <ul class="dropdown">
                            <div class="container custom-nav-container">
                                <div class="row custom-nav-row">
                                    <div class="col-md-12 col-lg-4">
                                        <a href="{{ route('fasfill') }}">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/fasfill-icon-nav.svg') }}" width="28" height="28" alt="Fafsill">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Fasfill</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Connecting with communities made easier</p>
                                        </a>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <a href="{{ route('alleypay') }}">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/alleypay-icon-nav.svg') }}" width="28" height="28" alt="Alleypay">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">AlleyPay</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Digital wallet service offering money management
                                                solutions</p>
                                        </a>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <a href="{{ route('mapx') }}">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/mapx-icon-nav.svg') }}" width="28" height="28" alt="Mapx">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Mapx</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Navigation and location area
                                                mapping platform</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Target Industries</a>
                        <ul class="dropdown">
                            <div class="container custom-nav-container-v2">
                                <div class="row custom-nav-row">
                                    <div class="col-md-12 col-lg-6">
                                        <a href="#">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/circular-icon-nav.svg') }}" width="28" height="28" alt="Circular Economy">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Circular Economy</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Durability, repairability, and upgradability.</p>
                                        </a>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <a href="#">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/tech-icon-nav.svg') }}" width="28" height="28" alt="Technologies">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Technologies</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Powering the digital age sustainably</p>
                                        </a>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <a href="#">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/logistic-icon-nav.svg') }}" width="28" height="28" alt="Logistics & Transportation">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Logistics & Transportation</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Optimizing transportation systems </p>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <a href="#">
                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('images/renew-icon-nav.svg') }}" width="28" height="28" alt="Renewable Energy">
                                                <p class="custom-nav-link-heading ml-2" data-aos="fade-up" data-aos-delay="0">Renewable Energy</p>
                                            </div>
                                            <p class="custom-nav-link-description" data-aos="fade-up" data-aos-delay="0">Operating harmoniously with the environment</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="{{ route('case-study') }}">Case Studies</a></li>
                    <li><a href="{{ route('fasfill-privacy-policy') }}">Privacy Policy</a></li>
                </ul>

                <a href="{{ route('contact-us') }}" class="btn-book btn btn-light btn-sm menu-absolute">Contact Us</a>

                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </div>
</nav>
