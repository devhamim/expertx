@extends('frontend.layout.app')

@section('content')

    <!-- ===========================
    =====>> Inner Hero <<===== -->
    <div id="inner-hero" class="inner-hero bg-com pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text text-center">
                        <div class="inner-title">Our <span>Services</span></div>
                        <ul class="inner-link">
                            <li>Home</li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====>> End Inner Hero <<===== 
    =========================== -->

    <!-- ===========================
    =====>> About <<===== -->
    <section class="about-three pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('frontend') }}/img/services-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-content">
                            <h3>About Us</h3>
                            <h2 class="section-title">Welcome to the Best
                                <br> Business & Agency Compnay</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <div class="about-text">
                            <p>Cheeky bugger chip shop David super chinwag buggered tickety boo do one asii chimney pot, blow off well pardon me old lurgy absolutely bladdered bodge ours faff about argy-bargy, the wireless vagabod bite your arm off in my
                                flat I don't want no agro twit pear shaped.</p>
                            <ul class="home-three-about-list">
                                <li>Advance Advisory Team </li>
                                <li>Professional Consulting Services</li>
                                <li>24/7 Support Help Center</li>
                                <li>Customer Service & Operations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End About <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Services <<===== -->
    <section id="services-area" class="services-two data-services-two background-color-3  pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Our Services</h3>
                        <h2 class="section-title">Explore Our Data Services</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-35">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/optimization-icon.png" alt="">
                        <h3>Search engine optimization</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/socile-marketing-icon.png" alt="">
                        <h3>Social media marketing</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/amazon-icon.png" alt="">
                        <h3>Amazon affiliate</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/code-icon.png" alt="">
                        <h3>Web design & development</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/web-design-icon.png" alt="">
                        <h3>Mobile app development</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <img src="{{ asset('frontend') }}/img/roket-icon.png" alt="">
                        <h3>SEO & Content Writing</h3>
                        <p>Naff at public school blog bobby Eliza beth super blo bamboozled blab Whi browsing Facebook or Twitter.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Services <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Pricing Plan <<===== -->
    <section id="pricing-plan" class="pricing-plan-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Price Table</h3>
                        <h2 class="section-title">Choose Your Pricing Plan</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="tabs pricing-plan-btn">
                            <li class="tab-link current" data-tab="pricing-plan-1">Monthly</li>
                            <li class="tab-link" data-tab="pricing-plan-2">Yearly</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="pricing-plan-1" class="tabs-list current">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Starter</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>29<sub>/M</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Premium</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>59<sub>/M</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Professional</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>99<sub>/M</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pricing-plan-2" class="tabs-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Starter</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>99<sub>/Y</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Premium</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>199<sub>/Y</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-plan-item">
                            <h2>Professional</h2>
                            <div class="pricing-plan-icon">
                                <img src="{{ asset('frontend') }}/img/pricing-plan1.png" alt="">
                            </div>
                            <div class="pricing-plan-price">
                                <sup>$</sup>259<sub>/Y</sub>
                            </div>
                            <ul class="pricing-plan-list">
                                <li>15 Analytics Compaign</li>
                                <li>Unlimited Site licenses</li>
                                <li>1 Database</li>
                                <li>10 Free Optimization</li>
                                <li>Html5 + Css3</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                            <a href="#" class="btn-m4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Pricing Plan <<===== 
    =========================== -->

    <!-- ===========================
    =====>> About <<===== -->
    <section class="about-three pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-content">
                            <h3>What We Do</h3>
                            <h2 class="section-title">We Iusto Creative Digital Agency</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <div class="about-text">
                            <p>Cheeky bugger chip shop David super chinwag buggered tickety boo do one asii chimney pot, blow off well pardon me old lurgy absolutely bladdered bodge ours faff about argy-bargy, the wireless vagabod bite your arm off in my
                                flat I don't want no agro twit pear shaped.</p>
                            <ul class="home-three-about-list twocolumn">
                                <li>Design must be functional </li>
                                <li>Aenean pellentes vitae</li>
                                <li>Lusce enim nulla mollis</li>
                                <li>Futionality must into </li>
                                <li>Mattis effic iturut magna</li>
                                <li>Phasellus eget felis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="agency-img">
                        <img src="{{ asset('frontend') }}/img/wedo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End About <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Discover Niketion <<===== -->
    <section id="discover-niketion" class="inner-discover-niketion-area background-color-com jarallax pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discover-niketion-text">
                        <h2>Discover Niketion. It's easier than you think.</h2>
                        <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.
                        </p>
                        <a href="#" class="btn-m5">Buy Roktim $11 Only</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Discover Niketion <<===== 
    =========================== -->
@endsection