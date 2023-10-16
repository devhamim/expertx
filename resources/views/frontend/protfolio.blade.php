@extends('frontend.layout.app')

@section('content')
  <!-- ===========================
    =====>> Inner Hero <<===== -->
    <div id="inner-hero" class="inner-hero bg-com pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text text-center">
                        <div class="inner-title">Portfolio 03 Column</div>
                        <ul class="inner-link">
                            <li>Home</li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====>> End Inner Hero <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Portfolio <<===== -->
    <section id="portfolio-area" class="portfolio-inner pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Our Portfolio</h3>
                        <h2 class="section-title">Here We Have 1500+ Project Check</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-item-list">
                        <ul class="portfolio-filter">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".it">Identity</li>
                            <li data-filter=".lg">Logo</li>
                            <li data-filter=".pg">Packaging</li>
                            <li data-filter=".pd">Print Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-grid popup-gallery2 row" id="container">
                <!-- item 1 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item it pg pd">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-1.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-1.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd lg it pg">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-2.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-2.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item it pg pd">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-3.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-3.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd it pg">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-4.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-4.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item it pd">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-5.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-5.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd it pg">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-6.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-6.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 7 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item it pg pd">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-7.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-7.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 8 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd lg pg">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-8.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-8.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 9 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pg pd">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-9.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-9.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 10 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd  it pg">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-10.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-10.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 11 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item it pg ">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-11.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-11.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
                            <p>Personal and Commercial</p>
                        </div>
                    </div>
                </div>
                <!-- item 12 -->
                <div class="col-lg-3 col-md-6 portfolio-grid-item pd lg it">
                    <div class="portfolio-colum4-item">
                        <img src="{{ asset('frontend') }}/img/p4-12.jpg" alt="">
                        <div class="portfolio-colum4-item-text">
                            <ul>
                                <li class="popup-item" data-src="{{ asset('frontend') }}/img/p4-12.jpg">
                                    <a href="#"><i class="fa fa-plus-circle"></i></a>
                                </li>
                                <li><a href="protfolio-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3>Grap Analysis</h3>
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