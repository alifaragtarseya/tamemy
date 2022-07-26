@php $dir = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<footer class="footer bg- w3-display-container">
    <div class="footer-container w3-display-topleft w3-block">
        <div class="container text-center">
            {{-- <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4" style="float: {{ $dir }}">
                    <img style="width: 150px" src="{{ asset('assets/images/customer_logo/logo.png') }}" alt="">
                    <h4>
                        <span class="  w3-text-dark-grey">{{ __('lang.turky_al_tamimi') }}</span>
                    </h4>
                    <p>
                        {{ __('lang.about_desc') }}
                    </p>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" style="float: {{ $dir }}"> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h4>
                        <span class="  w3-text-dark-grey">{{ __('lang.services') }}</span>
                    </h4> 
                    <ul class="w3-ul">
                        <li>
                            {{ __('lang.hotels') }}
                        </li>
                        <li>
                            {{ __('lang.resturant') }}
                        </li>
                        <li>
                            {{ __('lang.resorts') }}
                        </li>
                        <li>
                            {{ __('lang.catering_services') }}
                        </li>
                        <li>
                            {{ __('lang.marriage_and_conferene_halls') }}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" style="float: {{ $dir }}"> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h4>
                        <span class="  w3-text-dark-grey">{{ __('lang.services') }}</span>
                    </h4> 
                    <ul class="w3-ul">
                        <li>
                            {{ __('lang.hotels') }}
                        </li>
                        <li>
                            {{ __('lang.resturant') }}
                        </li>
                        <li>
                            {{ __('lang.resorts') }}
                        </li>
                        <li>
                            {{ __('lang.catering_services') }}
                        </li>
                        <li>
                            {{ __('lang.marriage_and_conferene_halls') }}
                        </li>
                    </ul>
                </div>
            </div> --}}

            {{-- <ul class="social list-inline">
                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
            </ul> --}}
            <br>
            <img style="width: 150px" src="{{ asset('assets/images/customer_logo/logo.png') }}" alt="">
            <br>
            <b class="w3-text-grey">{{ __('lang.turky_al_tamimi') }}</b>
            <br>
            <br>

            <div id="navbar" class="navbar-collapse text-center footer-nav">
                <ul class="nav navbar-nav navbar-center ">
    
                    {{-- @if (App::getLocale() != 'en')
                    <li>
                        <a href="{{ route('lang.index')}}?lang=en" class="{{ (App::getLocale()  == 'en') ? '' : ''}}">
                            <div class="lang {{ (App::getLocale()  == 'en') ? '' : ''}}" data-value="en"><span class="lang-txt w3-text-black">EN</span><span> </span></div>
                        </a>
                    </li>
                    @endif
                    @if (App::getLocale() != 'ar')
                    <li>
                        <a href="{{ route('lang.index')}}?lang=ar" class="{{ (App::getLocale()  == 'ar') ? '' : ''}}">
                            <div class="lang {{ (App::getLocale()  == 'ar') ? '' : ''}}" data-value="ar"><span class="lang-txt w3-text-black">ع</span> <span></span></div>
                        </a>
                    </li>
                    @endif --}}
                    <li class="{{request()->routeIs('home.contact')  ? 'active' : ''}}"><a href="{{ url('/contact') }}">{{ __('lang.contact') }}</a></li>
    
                    <li><a href="{{ url('/') }}#blog">{{ __('lang.blog') }}</a></li>
    
                    {{-- <li class="dropdown">
                        <a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ __('lang.services') }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">Typography</a></li>
    
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('/') }}#services">{{ __('lang.services') }} </a>
    
                    <li><a href="{{ url('/') }}#about">{{ __('lang.about') }}</a></li>
                    <li class="{{request()->routeIs('home.index')  ? 'active' : ''}}"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
    
    
    
                </ul>
            </div>
            <br><br>
            <span class="copyright w3-text-dark-grey">
                <span class="w3-text-dark-grey">
                    &copy; {{ __('lang.copyright') }}
                </span>
            </span>
        </div>
    </div>

</footer>
