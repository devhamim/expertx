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
                        {{-- <form class="contact-form row" method="POST" action="{{ route('customerMessage.store') }}"> --}}
                            {{-- @csrf --}}
                            <label class="col-md-6">
                                <input type="text" name="name" class="contact-form-input" placeholder="Your Name*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" name="phone" class="contact-form-input" placeholder="Phone*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" name="email" class="contact-form-input" placeholder="Your Email*">
                            </label>
                            <label class="col-md-6">
                                <input type="text" name="subject" class="contact-form-input" placeholder="Website*">
                            </label>
                            <label class="col-md-12">
                                <textarea name="message" id="contact-message" placeholder="Message here"></textarea>
                            </label>
                            <label class="col-md-12">
                                <button type="submit" class="btn-m5">Send Now</button>
                            </label>
                        {{-- </form> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="our-contacts-right">
                        <h2>Our Contacts</h2>
                        <div class="our-contacts-history">
                            <p> @if ( $settings->first()->about != null)
                                    <p>{{ $settings->first()->about }}</p>
                                @endif
                            </p>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="our-contacts-item-text">
                                <h3>Our Location</h3>
                                @if ($settings->first()->address != null)
                                    <p>{{ $settings->first()->address }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-phone-alt"></i>
                            <div class="our-contacts-item-text">
                                <h3>Phone Number</h3>
                                @if ($settings->first()->number != null)
                                    <p>{{ $settings->first()->number }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="our-contacts-item media">
                            <i class="fas fa-envelope"></i>
                            <div class="our-contacts-item-text">
                                <h3>Email</h3>
                                @if ($settings->first()->email != null)
                                    <p>{{ $settings->first()->email }}</p>
                                @endif
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