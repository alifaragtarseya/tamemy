
@php $dir_div = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<section id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1><b>{{ __('lang.services') }}</b></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        {{ __('lang.we_have_the_best_services') }}
                    </p>
                </div>
            </div>
        </div><!-- title row end-->

        <div class="row">
            <div class="col-sm-12 col-md-6 ">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px" >
                        <div class="left-side-icon" style="float: {{ $dir_div }}">
                            <img class="img-135 w3-padding w3-round" src="{{ asset('assets/images/servcies/hotel_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.hotels') }}</h3>
                            <p>
                               {{ __('lang.hotel_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px">
                        <div class="left-side-icon"style="float: {{ $dir_div }}">
                            <img class="img-95 w3-padding w3-circle" src="{{ asset('assets/images/servcies/resorts_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.resorts') }}</h3>
                            <p>
                                {{ __('lang.resorts_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 ">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px">
                        <div class="left-side-icon"style="float: {{ $dir_div }}">
                            <img class="img-135 w3-padding w3-round" src="{{ asset('assets/images/servcies/catering_services_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.catering_services') }}</h3>
                            <p>
                               {{ __('lang.catering_services_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px">
                        <div class="left-side-icon"style="float: {{ $dir_div }}">
                            <img class="img-95 w3-padding w3-round" src="{{ asset('assets/images/servcies/resturant_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.resturant') }}</h3>
                            <p>
                                {{ __('lang.resturant_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px">
                        <div class="left-side-icon"style="float: {{ $dir_div }}">
                            <img class="img-135" src="{{ asset('assets/images/servcies/conferene_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.marriage_and_conferene_halls') }}</h3>
                            <p>
                               {{ __('lang.marriage_and_conferene_halls_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix" style="height: 210px">
                        <div class="left-side-icon"style="float: {{ $dir_div }}">
                            <img class="img-95 w3-padding w3-round" src="{{ asset('assets/images/customer_logo/hdb.png') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.hadb_najd') }}</h3>
                            <p>
                                {{ __('lang.hadb_najd_desc') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
