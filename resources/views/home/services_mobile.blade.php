@php $dir_div = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<section id="services" class="section-padding ">
    <div class="container_">
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


        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">

                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b>{{ __('lang.hotels') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc  w3-center ">
                    <p class="lead">
                        {{ __('lang.hotel_desc') }}
                        <br>
                        <b>F&B</b>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        {{-- <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/hotel/1.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                            </div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/hotel/2.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 780px;background-position: bottom;background-repeat: no-repeat;background-size: auto;">
                            </div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                    </div>
                </div>
                <div class="item">
                    <div style="background-image:url('{{ asset('assets/images/servcies/hotel/4.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                </div>
                <div class="item">
                    <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                </div>
                <div class="item">
                    <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                </div> --}}
                    </div>

                    <!-- Left and right controls -->
                    {{-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a> --}}
                </div>
            </div>


        </div>
        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">
                <br>
                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b>{{ __('lang.resorts') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc  w3-center ">
                    <p class="lead">
                        {{ __('lang.resorts_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div">

                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        {{-- <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/resorts/1.jpg') }}') ;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/resorts/2.jpg') }}') ;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>


                    </div>


                </div>
            </div>




        </div>
        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">
                <br>
                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b>{{ __('lang.resturant') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.resturant_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel3" data-slide-to="1"></li>

                        {{-- <li data-target="#myCarousel3" data-slide-to="4"></li>
                        <li data-target="#myCarousel3" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <iframe src="https://kuula.co/share/7Jd9B?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1"
                                width="100%" height="500px" frameborder="0"></iframe>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <iframe src="https://kuula.co/share/7FnDl?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1"
                                width="100%" height="500px" frameborder="0"></iframe>
                        </div>



                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                </div>
            </div>
            <div class="item">
                <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
            </div> --}}
                    </div>


                </div>
            </div>


        </div>

        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">
                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b class="">{{ __('lang.marriage_and_conferene_halls') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <h3 class="title"><b>{{ __('lang.hadb_najd') }}</b></h3><br>
                    <p class="lead">
                        {{ __('lang.hadb_najd_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div">

                <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel4" data-slide-to="1"></li>
                         <li data-target="#myCarousel4" data-slide-to="2"></li>
                        {{--<li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/customer_logo/hdb.png') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/hall/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>
                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/hall/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                </div>
            </div>
            <div class="item">
                <div style="background-image:url('{{ asset('assets/images/servcies/hotel/4.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <div class="item">
                <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <div class="item">
                <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 500px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
            </div> --}}
                    </div>


                </div>
            </div>


        </div>


        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">

                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b class="">{{ __('lang.catering_services') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.catering_services_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel5" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel5" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/1.jpg') }}') ;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/2.jpg') }}') ;height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">
                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b class="">{{ __('lang.organizing_exhibitions_and_conferences') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <h3 class="title"><b>{{ __('lang.layali_alturkii') }}</b></h3><br>
                    <p class="lead">
                        {{ __('lang.organizing_exhibitions_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div">

                <div id="myCarousel6" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel6" data-slide-to="1"></li>
                        <li data-target="#myCarousel6" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/org/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>
                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/org/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>

                         <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/org/3.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>


                    </div>


                </div>
            </div>


        </div>


        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div " style="float: {{ $dir_div }}">

                <div class="title w3-padding-top-32 w3-center">
                    <h1 class="w3-text-grey "> <b class="">{{ __('lang.conference_zone') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.conference_zone_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel7" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel7" data-slide-to="1"></li>
                        <li data-target="#myCarousel7" data-slide-to="2"></li>
                        <li data-target="#myCarousel7" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/conference_zone/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/conference_zone/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/conference_zone/3.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>

                        <div class="item">
                            <div
                                style="background-image:url('{{ asset('assets/images/servcies/conference_zone/4.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                            </div>
                        </div>


                    </div>


                </div>
            </div>

        </div>


</section>
