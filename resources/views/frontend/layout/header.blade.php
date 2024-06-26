
<!-- ===========================
    =====>> Header Top <<===== -->
    <header class="header-top background-color-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-content">
                        <div class="contact-top-item ">
                            <i class="fa fa-phone-alt"></i>
                            @if ($setting->first()->number != null)
                            <span>{{ $setting->first()->number }}</span>
                            @endif
                        </div>
                        <div class="contact-top-item ">
                            <i class="fa fa-envelope-open"></i>
                            @if ($setting->first()->email != null)
                                
                            <span>{{ $setting->first()->email }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <a href="{{ route('contect') }}" class="btn-s2 header-top-right-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Menu -->
    <nav class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide top-menu home-three-menu">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                @if ($setting->first()->logo != null)
                <img style="max-width: 150px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="">
                @endif
            </a>
            <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-md-end">
                <ul class="navbar-nav navbar-mobile mr-0">
                    <li class="active"><a class="nav-link" href="{{ url('/') }}">Home<i class="caret"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">About Us</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ route('our.portfolio') }}">Portfolio</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('our.blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contect') }}">Contact</a></li>
                </ul>
            </div>
            {{-- <div class="search-dropdown">
                <button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search"></i>
                </button>
                <form class="dropdown-menu dropdown-menu-right">
                    <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                    <button class="search-btn " type="submit"><i class="fas fa-search "></i> </button>
                </form>
            </div> --}}
        </div>
    </nav>
    <div class="bsnav-mobile">
        <div class="bsnav-mobile-overlay"></div>
        <div class="navbar"></div>
    </div>
    <!-- =====>> End Header Top <<===== 
    =========================== -->