@extends('frontend.layout.app')
@section('content')
<!-- ===========================
    =====>> Inner Hero <<===== -->
    <div class="inner-hero bg-com pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text text-center">
                        <div class="inner-title">Our Privacy <span>Policy</span></div>
                        <ul class="inner-link">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====>> End Inner Hero <<===== 
    =========================== -->

    <!-- =====>> privacy-policy <<===== 
    =========================== -->
    <section id="privacy-policy" class="privacy-policy-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-policy-all">
                        <div class="single-privacy">
                            @if ($privacyPolicy->first()->id != null)
                                <p>{!! $privacyPolicy->first()->description !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End privacy-policy <<===== 
@endsection