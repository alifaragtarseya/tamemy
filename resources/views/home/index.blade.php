@extends('layouts.master')
@section('title')
{{ __('lang.turky_al_tamimi') }}
@endsection

@section('cs')
<style>
    .fullwidthbanner {
        height: 650px !important;
    }

</style>
@endsection

@section('content')
<div class="slider">
    <img src="{{ asset('assets/images/slider1.jpg') }}"style="width:100%;background-position: center;background-size: cover;margin-top: 60px;" alt="{{ __('lang.turky_al_tamimi') }}" >

</div>

<!--full width banner-->



<br><br><br><br>

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
        <h1 class="w3-text-grey">{{ __('lang.turky_al_tamimi') }}</h1>
        <a href="#services" class="btn btn-white btn-radius btn-lg w3-text-grey">
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
                            <img src="{{ asset('assets/images/servcies/hotel/1.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
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
                            <img src="{{ asset('assets/images/servcies/2.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
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
                            <img src="{{ asset('assets/images/servcies/resorts/1.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
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
                            <img src="{{ asset('assets/images/servcies/1.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
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
                            <img src="{{ asset('assets/images/customer_logo/hdb.png') }}" alt="Avatar" style="width:100%;height: 100%;">
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
                            <img src="{{ asset('assets/images/servcies/org/1.jpg') }}" alt="Avatar" style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h5><b>{{ __('lang.organizing_exhibitions_and_conferences') }}</b></h5>
                            <p class="w3-padding-large w3-text-black">
                                {{ __('lang.organizing_exhibitions_desc') }}
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
                items: {{ (App\Models\Helper::isMobile()) ? 1: 3}}
            }
            , 1000: {
                items: {{(App\Models\Helper::isMobile()) ? 1: 5}}

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
