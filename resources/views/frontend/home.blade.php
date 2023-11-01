@extends('frontend.layout.app')

@section('content')
<!-- ===========================
    =====>> Hero <<===== -->
    <section id="hero-top" class="hero-six">
        <div class="hero-six-absolute">
            <img src="{{ asset('frontend') }}/img/home-6/h6-shape-line.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 hero-2-col">
                    <div class="hero-left-content">
                        <h1 class="hero-title">Robust Marketing Strategies for <span>100% Results</span></h1>
                        <p>Rapidiously conceptualize sustainable process improvements without superior Quickly parallel task 24/365 catalysts for change.</p>
                        <a href="#" class="btn-m11">Discover More</a>
                        <div id="popup-gallery">
                            <a class="video-play-button" href="https://www.youtube.com/watch?v=iIrSCm_0Sj4">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 hero-2-col">
                    <div class="hero-images hero-six-images">
                        <img src="{{ asset('frontend') }}/img/home-6/hero6-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Hero <<===== 
    =========================== -->
    <!-- ===========================
    =====>> Feature <<===== -->
    <section id="feature" class="feature-area">
        <div class="container">
            <div class="feature-dots-images">
                <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-left">
                        <h1>Feature</h1>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-35">
                @foreach ($features as $features)
                <div class="col-lg-3 col-md-6 feature-border">
                    <div class="feature-dots-images1">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                    </div>
                    <div class="feature-item">
                        <img src="{{ asset('frontend') }}/img/website-icon.png" alt="">
                        <h3>Website Development
                        </h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 feature-border">
                    <div class="feature-dots-images2">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                    </div>
                    <div class="feature-item">
                        <img src="{{ asset('frontend') }}/img/seo-icon.png" alt="">
                        <h3>SEO & Content Writing
                        </h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-border">
                    <div class="feature-dots-images3">
                        <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/blue-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/indigo-dots.png" alt="">
                    </div>
                    <div class="feature-item">
                        <img src="{{ asset('frontend') }}/img/market-icon.png" alt="">
                        <h3>Market
                            <br> Research</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-border">
                    <div class="feature-dots-images4">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/yellow-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                        <img src="{{ asset('frontend') }}/img/home-6/red-dots.png" alt="">
                    </div>
                    <div class="feature-item">
                        <img src="{{ asset('frontend') }}/img/app-icon.png" alt="">
                        <h3>App
                            <br> Development</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- =====>> End Feature <<===== 
    =========================== -->
    <!-- ===========================
    =====>> Digital Agency <<===== -->
    <section id="digital-agency" class="digital-agency-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-middle">
                    <div class="digital-agency-img">
                        <img src="{{ asset('frontend') }}/img/home-6/h6-digital-agency.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-middle">
                    <div class="digital-agency-wrapper">
                        <div class="section-content">
                            <h3>Best Digital Agency In The World</h3>
                            <h2 class="section-title">We're A Dynamic Team Of
                                <br> Marketing Expert</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <p>Cheeky bugger chip shop David super chinwag buggered tickety boo do one asii chimney pot, blow off well pardon me old lurgy absolutely bladdered bodge ours faff about argy-bargy, the wireless vagabod bite your arm off in my flat
                            I don't want no agro twit pear shaped.
                            <br><br> Morish grub David are you taking the piss mufty eaton I the little rotter bevv ours tickety boo only well pardon me old lurgy absolutely bladdered bodge abevv faff about argy-bargy, the wireless.!
                        </p>
                        <a href="about.html" class="btn-m11">More About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Digital Agency <<===== 
    =========================== -->
    <!-- ===========================
    =====>> Services <<===== -->
    <section id="services-area" class="services-six-area pb-130 pt-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-middle2">
                    <div class="services-six-content">
                        <div class="section-content">
                            <h3>Our Services</h3>
                            <h2 class="section-title">Experts in online marketing</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <div class="services-six-text">
                            <p>Cheeky bugger chip shop David super chinwag buggered tickety boo do one asii chimney pot, blow off well pardon me old lurgy absolutely bladdered bodge ours faff about argy-bargy, the wireless vagabod bite your arm off in my
                                flat I don't want no agro twit pear shaped.
                                <br><br> Morish grub David are you taking the piss mufty eaton I the little rotter bevv ours tickety boo only well pardon me old lurgy absolutely bladdered bodge abevv faff about argy-bargy, the wireless.!
                            </p>
                            <a href="services.html" class="btn-m11">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-middle2">
                    <div class="services-six-right">
                        <div class="services-social-click">
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/marketing.png" alt="">
                            </div>
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/affiliate.png" alt="">
                            </div>
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/developments.png" alt="">
                            </div>
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/optimization.png" alt="">
                            </div>
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/content-rocket.png" alt="">
                            </div>
                            <div class="services-six-icon">
                                <img src="{{ asset('frontend') }}/img/home-4/app-develo.png" alt="">
                            </div>
                        </div>
                        <div class="sevices-six-slide-text text-center">
                            <div class="services-six-single-wrapper">
                                <h3>Social Marketing</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                            <div class="services-six-single-wrapper">
                                <h3>Affliate Marketing</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                            <div class="services-six-single-wrapper">
                                <h3>Development Marketing</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                            <div class="services-six-single-wrapper">
                                <h3>Social Optimization</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                            <div class="services-six-single-wrapper">
                                <h3>Content Rocket Marketing</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                            <div class="services-six-single-wrapper">
                                <h3>Social App Development</h3>
                                <p>Naff at public schooi blog a beth super blo bamboozed browsing facebook Quis ipsum suspendisse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Services <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Choose us <<===== -->
    <section id="choose-us" class="choose-us-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-middle2">
                    <div class="why-choose-content">
                        <div class="section-content">
                            <h3>Why Choose us</h3>
                            <h2 class="section-title">Welcome to the Best
                                <br>An array of online Marketing</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <div class="why-choose-all">
                            <div class="why-choose-only-text">
                                <p>For startups and growing businesses, an online specialist can develop a digital marketing plan to help you grow and retain a happy client base.</p>
                            </div>
                            <div class="why-choose-single-content media">
                                <div class="why-choose-images">
                                    <img src="{{ asset('frontend') }}/img/home-6/why-choose-icon1.png" alt="">
                                </div>
                                <div class="why-choose-text">
                                    <h3>Rapid interaction with clients</h3>
                                    <p>We provide full and specific solutons our every Providing international construction services.</p>
                                </div>
                            </div>
                            <div class="why-choose-single-content media">
                                <div class="why-choose-images">
                                    <img src="{{ asset('frontend') }}/img/home-6/why-choose-icon2.png" alt="">
                                </div>
                                <div class="why-choose-text">
                                    <h3>Scientific website optimization</h3>
                                    <p>We provide full and specific solutons our every Providing international construction services.</p>
                                </div>
                            </div>
                            <div class="why-choose-single-content media">
                                <div class="why-choose-images">
                                    <img src="{{ asset('frontend') }}/img/home-6/why-choose-icon3.png" alt="">
                                </div>
                                <div class="why-choose-text">
                                    <h3>Generating increased revenue</h3>
                                    <p>We provide full and specific solutons our every Providing international construction services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-middle2">
                    <div class="why-choose-out-container">
                        <img src="{{ asset('frontend') }}/img/home-6/h6-why-choose-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Choose us <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Portfolio <<===== -->
    <section id="portfolio-area" class="portfolio-inner portfolio-six background-color-6 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Best Portfolio</h3>
                        <h2 class="section-title">Our Impressive Portfolio</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p1.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p2.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Digital Marketing</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p3.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Web Development</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p4.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Web Development</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p5.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Web Development</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('frontend') }}/img/p6.png" alt="">
                            <div class="portfolio-hover-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i></a></li>
                                    <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>Web Development</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Portfolio <<===== 
    =========================== -->

    <!-- ===========================
    =====>> We Always Counter <<===== -->
    <section id="we-always" class="we-always-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>We Always</h3>
                        <h2 class="section-title">Try To Understand Users Expectation</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-35">
                <div class="col-lg-3 col-md-6">
                    <div class="we-always-single">
                        <div class="count-fonts"><span class="counter">2,165 </span>+</div>
                        <p>Complete Project</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="we-always-single">
                        <div class="count-fonts"><span class="counter">550 </span>+</div>
                        <p>Complete Project</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="we-always-single">
                        <div class="count-fonts"><span class="counter">150 </span>+</div>
                        <p>Complete Project</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="we-always-single">
                        <div class="count-fonts"><span class="counter">50 </span>+</div>
                        <p>Complete Project</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End We Always Counter <<===== 
    =========================== -->
    <!-- ===========================
    =====>> Testimonial <<===== -->
    <section id="testimonial-area" class="testimonial-six-area background-color-7 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-six-contents section-content text-center">
                        <h3>Testimonial</h3>
                        <h2 class="section-title">What customer say</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                    <div class="testimonial-left-six-text">
                        <p>Testimonials are one of the most important as decding on if they want to use your product or for a cool way to add them to your site.</p>
                        <a href="testimonial.html" class="btn-m11">Read More</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial-item-six">
                            <img src="{{ asset('frontend') }}/img/home-6/h6-testimonial-small1.png" alt="">
                            <div class="testimonial-six-text">
                                <p>Proactively syndicate open-so rceie marketis after lowrisk hig yield synergy. Professionally as plfy visionary technology befo team driven sources.</p>
                                <h3>Atidra Row</h3>
                                <span>CEO Of Niketons</span>
                            </div>
                        </div>
                        <div class="testimonial-item-six">
                            <img src="{{ asset('frontend') }}/img/home-6/h6-testimonial-small2.png" alt="">
                            <div class="testimonial-six-text">
                                <p>Proactively syndicate open-so rceie marketis after lowrisk hig yield synergy. Professionally as plfy visionary technology befo team driven sources.</p>
                                <h3>Atidra Row</h3>
                                <span>CEO Of Niketons</span>
                            </div>
                        </div>
                        <div class="testimonial-item-six">
                            <img src="{{ asset('frontend') }}/img/home-6/h6-testimonial-small1.png" alt="">
                            <div class="testimonial-six-text">
                                <p>Proactively syndicate open-so rceie marketis after lowrisk hig yield synergy. Professionally as plfy visionary technology befo team driven sources.</p>
                                <h3>Atidra Row</h3>
                                <span>CEO Of Niketons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Testimonial <<===== 
    =========================== -->
    <!-- ===========================
    =====>> Blog <<===== -->
    <section id="blog-area" class="blog-area-six blog-area background-color-3 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-content text-center">
                        <h3>Recent Blog</h3>
                        <h2 class="section-title">Create a blog and share your Post</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-six">
                        <div class="blog-six-link">
                            <a href="blog-details.html" class="single-blog-six">
                                <img src="{{ asset('frontend') }}/img/home-5/h5-blog1.png" alt="">
                            </a>
                            <p>March 03 20</p>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="blog-six-left-right">
                            <a href="blog-details.html" class="blog-single-text-six">
                                <h3>How to start your business as an entrepreneur</h3>
                                <p>Consectetur adipiscing elit, sed do eius mod tempor incididunt.</p>
                            </a>
                            <div class="blog-images-text">
                                <img src="{{ asset('frontend') }}/img/home-4/blog-small1.png" alt="">
                                <p>by Admin</p>
                                <i class="far fa-clock"></i>
                                <p>March 03 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-six">
                        <div class="blog-six-link">
                            <a href="blog-details.html" class="single-blog-six">
                                <img src="{{ asset('frontend') }}/img/home-5/h5-blog2.png" alt="">
                            </a>
                            <p>March 03 20</p>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="blog-six-left-right">
                            <a href="blog-details.html" class="blog-single-text-six">
                                <h3>How to start your business as an entrepreneur</h3>
                                <p>Consectetur adipiscing elit, sed do eius mod tempor incididunt.</p>
                            </a>
                            <div class="blog-images-text">
                                <img src="{{ asset('frontend') }}/img/home-4/blog-small1.png" alt="">
                                <p>by Admin</p>
                                <i class="far fa-clock"></i>
                                <p>March 03 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-six">
                        <div class="blog-six-link">
                            <a href="blog-details.html" class="single-blog-six">
                                <img src="{{ asset('frontend') }}/img/home-5/h5-blog3.png" alt="">
                            </a>
                            <p>March 03 20</p>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="blog-six-left-right">
                            <a href="blog-details.html" class="blog-single-text-six">
                                <h3>How to start your business as an entrepreneur</h3>
                                <p>Consectetur adipiscing elit, sed do eius mod tempor incididunt.</p>
                            </a>
                            <div class="blog-images-text">
                                <img src="{{ asset('frontend') }}/img/home-4/blog-small1.png" alt="">
                                <p>by Admin</p>
                                <i class="far fa-clock"></i>
                                <p>March 03 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Blog <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Discover Niketion <<===== -->
    <section id="discover-niketion" class="discover-niketion-area4 jarallax pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discover-niketion-text">
                        <h2>Discover Niketion. It's easier than you think.</h2>
                        <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.
                        </p>
                        <a href="#" class="btn-m12">Buy Roktim $11 Only</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Discover Niketion <<===== 
    =========================== -->
@endsection