@extends('layouts.master')
@section('title')
{{ __('lang.turky_al_tamimi') }}
@endsection

@section('cs')
<style>
    .fullwidthbanner{
        height: 650px !important;
    }
</style>
@endsection

@section('content')
<div class="fullwidthbanner" id="home" style="height: 700px">
    <div class="tp-banner" style="height: 700px !important ;">
        <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/slider.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
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


@if (App\Models\Helper::isMobile())
@include('home.services_mobile')
@else
@include('home.services')
@endif
<!--services section end-->

<!--testimonials-->

<div class="cta cta-bg w3-black reveal fade-bottom" style="background-image: url('{{ asset('assets/images/footer.jpg') }}');    background-position: center;background-size: cover;">
    <div class="container text-center scroll-to">
        <h1>{{ __('lang.turky_al_tamimi') }}</h1>
        <a href="#services" class="btn btn-white btn-radius btn-lg">
            {{ __('lang.we_have_the_best_services') }}
        </a>
    </div>
</div>

<section id="blog" class="section-padding">
    <div class="container reveal fade-left">
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
        <div class='row reveal fade-bottom'>
            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner w3-padding-10">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.hotels') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.hotel_desc') }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/3.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.resturant') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.resturant_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/4.webp') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.resorts') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.resorts_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/5.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.catering_services') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.catering_services_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/6.jpg') }}" alt="Avatar" style="width:100%;height: 100%;">
                        </div>
                        <div class="flip-card-back ">
                            <h5><b>{{ __('lang.marriage_and_conferene_halls') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.marriage_and_conferene_halls_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-8 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/images/blog/7.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.marriage_and_conferene_halls') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
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

{{-- <div class="funfacts parallax-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>654</h2>
                    <h5>{{ __('lang.happy_client') }}</h5>
<span class="border-line"></span>
</div>
</div>

<div class="col-sm-4 margin-bottom30 text-center">
    <div class="fact-box">
        <h2>832</h2>
        <h5>{{ __('lang.services_count') }}</h5>
        <span class="border-line"></span>
    </div>
</div>

<div class="col-sm-4 margin-bottom30 text-center">
    <div class="fact-box">
        <h2>24</h2>
        <h5>{{ __('lang.our_customer') }} </h5>
        <span class="border-line"></span>
    </div>
</div>

<div class="col-sm-3 margin-bottom30 text-center">
    <div class="fact-box">
        <h2>750</h2>
        <h5>Cups of coffee</h5>
        <span class="border-line"></span>
    </div>
</div>


</div>
</div>
</div> --}}

@include('home.clients')

<!--news section end-->

<!--call to action-->

{{--
 --}}
<!--contact section end-->
@endsection

@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop: true
        , margin: 10
        , dots: false
        , nav: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items:
                      {{ (App\Models\Helper::isMobile()) ? 1: 3 }}
            }
            , 1000: {
                items:
                       {{ (App\Models\Helper::isMobile()) ? 1: 5}}

            }
        }
    })

</script>

<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

</script>
@endsection
