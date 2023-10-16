@extends('frontend.layout.app')
@section('content')
  <!-- ===========================
    =====>> Inner Hero <<===== -->
    <section id="inner-hero" class="inner-hero bg-com pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text text-center">
                        <div class="inner-title">Contact</div>
                        <ul class="inner-link">
                            <li>Home</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Inner Hero <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Contact <<===== -->
    <section class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-content">
                        <h2>Quick Contact Form</h2>
                        <form action="#" class="contact-form row">
                            <label class="col-md-6">
                                <input type="text" class="contact-form-input" placeholder="Your Name*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" class="contact-form-input" placeholder="Phone*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" class="contact-form-input" placeholder="Your Email*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" class="contact-form-input" placeholder="Website*">
                            </label>
                            <label class="col-md-12">
                                <textarea name="message" id="contact-message" placeholder="Message here"></textarea>
                            </label>
                            <label class="col-md-12">
                                <button type="submit" class="btn-m5">Send Now</button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="our-contacts-right">
                        <h2>Our Contacts</h2>
                        <div class="our-contacts-history">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="our-contacts-item-text">
                                <h3>Our Location</h3>
                                <p>245 King Street, Touterie Victoria 8520 Australia</p>
                            </div>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-phone-alt"></i>
                            <div class="our-contacts-item-text">
                                <h3>Phone Number</h3>
                                <p>008+01987-837625
                                    <br> 008+01768-875432</p>
                            </div>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-envelope"></i>
                            <div class="our-contacts-item-text">
                                <h3>Email</h3>
                                <p>sampleniketons@gmail.com</p>
                            </div>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-globe"></i>
                            <div class="our-contacts-item-text">
                                <h3>Website</h3>
                                <p>www.niketons.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="google-map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<===== 
    =========================== -->
@endsection