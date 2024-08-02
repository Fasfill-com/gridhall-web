<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto">
                <div class="widget">
                    <h3><span class="text-primary"><img class="img-fluid" src="{{ asset('images/logo-light.png') }}" style="width: 32px; height:32px"></span> GridHall Inc.</h3>
                    <p style="margin-top: -25px; color:#EDEDEDD0">Providing sustainable solutions for smart cities</p>
                </div> <!-- /.widget -->
                <div class="widget" style="margin-top: -25px;">
                    <div class="containner">
                        <a href="#"><img src="{{ asset('images/x.svg') }}" alt="Logo" class="logo logo-img img-fluid mr-2" style="width: 40px;"></span></a>
                        <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt="Logo" class="logo logo-img img-fluid mr-2" style="width: 40px;"></span></a>
                        <a href="#"><img src="{{ asset('images/instagram.svg') }}" alt="Logo" class="logo logo-img img-fluid" style="width: 40px;"></span></a>
                    </div>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-lg-2 ml-auto">
                <div class="widget">
                    <h3>Company</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="{{ route('about-us')}}">About us</a></li>
                        <li><a href="#">Sustainablility</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <!-- <div class="col-lg-2">
                <div class="widget">
                    <h3>Solution</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Research Areas</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div> -->
             <!-- /.col-lg-3 -->


            <div class="col-lg-2">
                <div class="widget">
                    <h3>Platforms</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="{{ route('fasfill') }}">Fasfill</a></li>
                        <!-- <li><a href="{{ route('mapx') }}">MapX</a></li> -->
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->
        </div> <!-- /.row -->

        <!-- <div class="row mt-5">
            <div class="col-12 text-center">
                <p>Copyright Reserved &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> - GridHall Limited
            </div>
        </div> -->
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
