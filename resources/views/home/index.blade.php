@extends('layouts.master')
@section('title')
    {{ __('lang.turky_al_tamimi') }}
@endsection

@section('cs')

@endsection

@section('content')
<div class="fullwidthbanner" id="home">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/backgrounds/hotel.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption slider-title" data-x="center" data-y="center" data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                    {{-- {{ __('lang.welcome_to') }} <span class="main-color">{{ __('lang.turky_al_tamimi') }}</span> --}}
                </div> <!-- /tp-caption -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    {{-- <h5><b>{{__('lang.desc1')}}</b></h5> --}}
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 3 -->
                {{-- <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <a class="btn btn-white" href="#about">See more</a>
                </div>  --}}
                <!-- /tp-caption -->
            </li>
            <!-- SLIDE 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/backgrounds/restaurant.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption slider-title" data-x="center" data-y="center" data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                    {{-- {{ __('lang.welcome_to') }} <span class="main-color">{{ __('lang.turky_al_tamimi') }}</span> --}}
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    {{-- <h5><b>{{__('lang.desc1')}}</b></h5> --}}
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 3 -->
                {{-- <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <a class="btn btn-white" href="#about">See more</a>
                </div>  --}}
                <!-- /tp-caption -->
            </li>
            <!-- SLIDE 3 -->
        </ul>
    </div>
</div>
<!--full width banner-->





@include('home.about_us')
<!--about section end-->



@include('home.services')
<!--services section end-->

<!--testimonials-->

<div class="cta cta-bg">
    <div class="container text-center scroll-to">
        <h1>{{ __('lang.turky_al_tamimi') }}</h1>
        <a href="#services" class="btn btn-white btn-radius btn-lg">
            {{ __('lang.we_have_the_best_services') }}
        </a>
    </div>
</div>

<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1><b>{{ __('lang.blogs') }}</b></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        
                    </p>
                </div>
            </div>
        </div>
        <!--heading row-->
    </div>
    <!--container-->

    <div class="news-wrapper container">
        <div class='row'>
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner w3-padding-10">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/1.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h5>{{ __('lang.hotels') }}</h5> 
                        <p class="w3-padding-large w3-text-white">
                            {{ subStr(__('lang.hotel_desc'), 0 , 300) }}
                          </p>
                      </div>
                      
                    </div>
                  </div>
            </div>
            
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/3.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h5>{{ __('lang.resturant') }}</h5> 
                        <p class="w3-padding-large w3-text-white">
                            {{ __('lang.resturant_desc') }}
                          </p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/4.webp') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                       <h5>{{ __('lang.resorts') }}</h5> 
                       <p class="w3-padding-large w3-text-white">
                        {{ __('lang.resorts_desc') }}
                      </p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/5.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                       <h5>{{ __('lang.catering_services') }}</h5> 
                       <p class="w3-padding-large w3-text-white">
                        {{ __('lang.catering_services_desc') }}
                      </p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/6.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                       <h5>{{ __('lang.marriage_and_conferene_halls') }}</h5> 
                       <p class="w3-padding-large w3-text-white">
                        {{ __('lang.marriage_and_conferene_halls_desc') }}
                      </p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/7.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                       <h5>{{ __('lang.marriage_and_conferene_halls') }}</h5> 
                       <p class="w3-padding-large w3-text-white">
                        {{ __('lang.marriage_and_conferene_halls_desc') }}
                      </p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

   
</section>
<div class="funfacts parallax-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>654</h2>
                    <h5>{{ __('lang.happy_client') }}</h5>
                    <span class="border-line"></span>
                </div>
            </div>
            <!--fact cols-->
            <div class="col-sm-4 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>832</h2>
                    <h5>{{ __('lang.services_count') }}</h5>
                    <span class="border-line"></span>
                </div>
            </div>
            <!--fact cols-->
            <div class="col-sm-4 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>24</h2>
                    <h5>{{ __('lang.our_customer') }} </h5>
                    <span class="border-line"></span>
                </div>
            </div>
            <!--fact cols-->
            {{-- <div class="col-sm-3 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>750</h2>
                    <h5>Cups of coffee</h5>
                    <span class="border-line"></span>
                </div>
            </div> --}}
            <!--fact cols-->

        </div>
    </div>
</div>
@include('home.clients')
<!--news section end-->

<!--call to action-->

{{-- 
 --}}
<!--contact section end-->
@endsection

@section('js')

@endsection
