@extends('layouts.landing', ['title' => 'Contact Us'])

@section('body')

<!-- Contact us -->
<div class="untree_co-section mb-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center mb-5">

                <div class="section-title" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom mb-1">Contact Us</h2>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" class="about-content">Tell us about your business and find out how GridHall Inc’s expert team can help you improve your processes, upgrade your tech and deliver more for your clients. Give us a call or fill in the form with your details</p>
            </div>
            <div class="col-lg-4 mb-5 order-2 mb-lg-0 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">

                    <div class="address mt-4">
                        <i class="icon-room" style="background: #fff; color:#161616"></i>
                        <h4 class="mb-2"><b>Address</b></h4>
                        <p class="mb-1 mr-6"><b>Canada</b></p>
                        <p>807 - 230 Gloucester Street, Ottawa, Ontario</p>

                        <p class="mb-1 mr-6 mt-3"><b>Nigeria</b></p>
                        <p>18 Sani Sambo Avenue, Kaduna</p>

                    </div>
                    <div class="phone mt-4">
                        <i class="icon-phone" style="background: #fff; color:#161616"></i>
                        <h4 class="mb-2"><b>Phone Number</b></h4>
                        <!-- <p class="mb-1 mr-6"><b>Adipiscing cras facilisis</b></p> -->
                        <p>+16137006201</p>
                        <p>+234 803 395 7099</p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope" style="background: #fff; color:#161616"></i>
                        <h4 class="mb-2"><b>Email</b></h4>
                        <!-- <p class="mb-1 mr-6"><b>Adipiscing cras facilisis</b></p> -->
                        <p>info@gridhall.com</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="First Name">First Name</label>
                                    <input type="text" id="first_name" class="form-control">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="Last Name">Last Name</label>
                                    <input type="text" id="last_name" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="Email Address">Email Addres</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="Phone Number">Phone Number</label>
                                    <input type="text" id="phone_number" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" cols="30" rows="7" class="form-control"></textarea>
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="submit" value="Send Message" class="btn btn-primary float-right">
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
