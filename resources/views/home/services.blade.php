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
                    <div class="feature-icon-wrap services-icons clearfix">
                        <div class="left-side-icon">
                            <img class="img-135" src="{{ asset('assets/images/servcies/hotel_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.hotels') }}</h3>
                            <p>
                               {{ subStr(__('lang.hotel_desc'),0,150) }} ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix">
                        <div class="left-side-icon">
                            <img class="img-95" src="{{ asset('assets/images/servcies/resorts_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.resorts') }}</h3>
                            <p>
                                {{ subStr(__('lang.resorts_desc') , 0 , 174) }} ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 ">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix">
                        <div class="left-side-icon">
                            <img class="img-135" src="{{ asset('assets/images/servcies/catering_services_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.catering_services') }}</h3>
                            <p>
                               {{-- {{ subStr(__('lang.catering_services_desc'),0,150) }} ... --}}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix">
                        <div class="left-side-icon">
                            <img class="img-95" src="{{ asset('assets/images/servcies/resturant_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.resturant') }}</h3>
                            <p>
                                {{ subStr(__('lang.resturant_desc') , 0 , 174) }} ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 ">
                <a href="#">
                    <div class="feature-icon-wrap services-icons clearfix">
                        <div class="left-side-icon">
                            <img class="img-135" src="{{ asset('assets/images/servcies/conferene_icon.webp') }}" alt="">
                        </div>
                        <div class="features-text-right">
                            <h3 class="main-color">{{ __('lang.marriage_and_conferene_halls') }}</h3>
                            <p>
                               {{ subStr(__('lang.marriage_and_conferene_halls_desc'),0,174) }} ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>
