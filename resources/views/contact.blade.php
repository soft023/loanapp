@extends('layouts.app')
@section('content')
<section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-8">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="#" class="d-block mb-50"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Perk prime Resources is one of the new financial institution already to providing financial aid to  qualified people in need of financial relief. Perk prime Resources offers investment service as well as loan services to people who meet their requirements.</p>
                    </div>
                </div>

                <!-- Single Contact Area -->
           

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Get in touch</h5>

                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>D49 Extension, Efab Plaza Area 11,   <br> Garki, Abuja</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/call.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>081-5323-9744</p>
                                        <span>mon-fri , 08.am - 17.pm</span>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/message2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>contact@info@perkprime.com.ng</p>
                                        <span>we reply in less 24 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
           
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Send a message</h4>

                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Your E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn credit-btn mt-30 w3-yellow" type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
