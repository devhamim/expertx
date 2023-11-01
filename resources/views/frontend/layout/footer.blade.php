
    <!-- ===========================
    =====>> Footer <<===== -->
    <footer class="footer-area">
        <div class="footer-content background-footer-three pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            @if ($setting->first()->footer_logo != null)
                                <img style="max-width: 150px" class="mb-5" src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                            @endif
                            @if ($setting->first()->about != null)
                                <p>{{ $setting->first()->about }}</p>
                            @endif
                            <ul>
                                <li><a href="{{ route('our.privacy.policy') }}"> Privacy policy </a></li>
                                {{-- <li><a href="#">Terms and Conditions</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item ">
                            <a class="footer-widget-title">Useful Links</a>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Client</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">History</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a class="footer-widget-title">Company</a>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Press & Blog</a></li>
                                <li><a href="#">Content Management</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a class="footer-widget-title">Main Office</a>
                            @if ($setting->first()->address != null)
                                <p>{{ $setting->first()->address }}</p>
                            @endif
                            <div class="footer-contact">
                                @if ($setting->first()->number != null)
                                Call: {{ $setting->first()->number }}
                                @endif
                                @if ($setting->first()->email != null)
                                <br>Email: {{ $setting->first()->email }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text">
                            <@if ($setting->first()->footer != null)
                                <p>{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" class="text-primary">Nugortechit</a></p>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-social text-right">
                            <div class="footer-social-title">Follow us: </div>
                            <ul>
                                <li><a href="{{ $setting->first()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->first()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $setting->first()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $setting->first()->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =====>> End Footer <<===== 
    =========================== -->