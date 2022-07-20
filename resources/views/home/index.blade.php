@extends('layouts.master')
@section('title')

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
                    {{ __('lang.welcome_to') }} <span class="main-color">{{ __('lang.turky_al_tamimi') }}</span>
                </div> <!-- /tp-caption -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <h5><b>{{__('lang.desc1')}}</b></h5>
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
                    {{ __('lang.welcome_to') }} <span class="main-color">{{ __('lang.turky_al_tamimi') }}</span>
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <h5><b>{{__('lang.desc1')}}</b></h5>
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
                    <h2>12</h2>
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

@include('home.services')
<!--services section end-->
<div class="testimonials parallax-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="flexslider testislider">
                    <ul class="slides">
                        <li>
                            <div class="slide-items">
                                <img src="images/team-1.jpg" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor
                                    imperdiet congue. Nullam sagittis,
                                    tristique diam, ut ullamcorper
                                    tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                        <li>
                            <div class="slide-items">
                                <img src="images/team-2.jpg" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor
                                    imperdiet congue. Nullam sagittis,
                                    tristique diam, ut ullamcorper
                                    tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                        <li>
                            <div class="slide-items">
                                <img src="images/team-3.jpg" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor
                                    imperdiet congue. Nullam sagittis,
                                    tristique diam, ut ullamcorper
                                    tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonials-->

<div class="cta cta-bg">
    <div class="container text-center scroll-to">
        <h1>{{ __('lang.turky_al_tamimi') }}</h1>
        <a href="#services" class="btn btn-white btn-radius btn-lg">
            {{ __('lang.we_have_the_best_services') }}
        </a>
    </div>
</div>
<!--call to action-->
{{-- 
<section id="work" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1> <span class="alo">Bonativo</span> Portfolio</h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet
                        congue.
                    </p>
                </div>
            </div>
        </div>
        <!--heading row-->


        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-1.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-1.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-2.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-2.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-3.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-3.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
        </div>
        <!--work row-->
        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-4.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-4.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-5.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-5.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-6.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-6.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
        </div>
        <!--work row-->
        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-7.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-7.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-8.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-8.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="images/work-9.jpg" class="load-content
                            prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="images/work-9.jpg" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span>
                                <div class="overlayinfo" style="margin-top: -11px;">
                                    <h6>Branding</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--work col-->
        </div>
        <!--work row-->
    </div>
</section> --}}
<!--work section end-->


<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1> <span class="alo">Bonativo</span> News</h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet
                        congue.
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
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/1.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h5>{{ __('lang.hotels') }}</h5> 
                        
                      </div>
                    </div>
                  </div>
            </div>
            {{-- <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/2.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h5>John Doe</h5> 
                        <p>Architect & Engineer</p> 
                        <p>We love that guy</p>
                      </div>
                    </div>
                  </div>
            </div> --}}
            <div class="col-md-4 col-sm-12 pt-8 " >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img  src="{{ asset('assets/images/blog/3.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h5>{{ __('lang.resturant') }}</h5> 
                        {{-- <p>Architect & Engineer</p> 
                        <p>We love that guy</p> --}}
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
                        {{-- <p>Architect & Engineer</p> 
                        <p>We love that guy</p> --}}
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
                        {{-- <p>Architect & Engineer</p> 
                        <p>We love that guy</p> --}}
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
                       <h5>{{ __('lang.marriage_halls') }}</h5> 
                        {{-- <p>Architect & Engineer</p> 
                        <p>We love that guy</p> --}}
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
                       <h5>{{ __('lang.conferene_halls') }}</h5> 
                        {{-- <p>Architect & Engineer</p> 
                        <p>We love that guy</p> --}}
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<!--news section end-->
<div class="cta">
    <div class="container text-center scroll-to">
        <h1>Simple & clean one page template</h1>
        <a href="#contact" class="btn btn-border-black btn-radius
            btn-lg">Purchase now</a>
    </div>
</div>
<!--call to action-->


<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="row contact-details">
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-location-outline"></i>
                        <h4>California, Usa</h4>
                    </div>
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-email-outline"></i>
                        <h4>support@Bonativo.com</h4>
                    </div>
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-telephone-outline"></i>
                        <h4>+01 - 4567 - 65678</h4>
                    </div>
                </div>
                <!--contact details-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <form name="sentMessage" class="contact-form" method="post" novalidate>
                    <h3>Drop us a line</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12
                                    controls">

                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please
                                        enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12
                                    controls">

                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please
                                        enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please
                                enter your phone number.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please
                                enter a message."></textarea>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12 text-right">
                            <button type="submit" class="btn btn-white
                                btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!--contact section end-->
@endsection

@section('js')

@endsection
