@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top before-color text-{{ $dir2 }} ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand alo" href="#home"><img class="logo" src="{{ asset('assets/images/customer_logo/logo.png') }}" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right scroll-to">
                <li class="active"><a href="#home">{{ __('lang.home') }}</a></li>
                <li><a href="#about">{{ __('lang.about') }}</a></li>
                <li class="dropdown">
                    <a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ __('lang.services') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="typography.html">Typography</a></li>

                    </ul>
                </li>
                <li><a href="#blog">{{ __('lang.blog') }}</a></li>
                <li><a href="#contact">{{ __('lang.contact') }}</a></li>
                <li class="dropdown">
                    <div class="current_lang " style="padding-top: 14px">
                        <div class="lang dropdown-toggle" data-toggle="dropdown" role="button"><span class="lang-txt">{{ __('lang.' . App::getLocale() ) }} </span></div>
                    </div>
                    <ul class="more_lang dropdown-menu">
                        @if (App::getLocale() != 'en')
                        <li>
                            <a href="{{ route('lang.index')}}?lang=en" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                                <div class="lang {{ (App::getLocale()  == 'en') ? 'selected' : ''}}" data-value="en"><span class="lang-txt w3-text-black">{{ __('lang.en') }}</span><span> </span></div>
                            </a>
                        </li>
                        @endif
                        @if (App::getLocale() != 'ar')
                        <li>
                            <a href="{{ route('lang.index')}}?lang=ar" class="{{ (App::getLocale()  == 'ar') ? 'active' : ''}}">
                                <div class="lang {{ (App::getLocale()  == 'ar') ? 'selected' : ''}}" data-value="ar"><span class="lang-txt w3-text-black">{{ __('lang.ar') }}</span> <span></span></div>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
                
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>
