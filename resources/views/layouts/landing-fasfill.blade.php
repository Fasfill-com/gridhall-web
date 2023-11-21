@include('partials.landing-header', ['title' => $title ?? ''])

<body>

    <!--Site mobile menu  -->
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.landing-nav-fasfill')

    @yield('body')

    @include('partials.landing-footer')
