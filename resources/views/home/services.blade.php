@php $dir_div = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<section id="services" class="section-padding ">
    <div class="container_">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1><b class="w3-text-black">{{ __('lang.services') }}</b></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        {{ __('lang.we_have_the_best_services') }}
                    </p>
                </div>
            </div>
        </div><!-- title row end-->


        <div class="row services ">

            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        {{-- <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/1.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/2.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/4.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
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
            <div class="col-sm-12 col-md-6 style-div ">
                <br><br><br><br>
                <div class="title w3-padding-top-64 w3-center">
                    <h1 class="w3-text-black w3-padding-top-64"> <b class="w3-padding-top-64">{{ __('lang.hotels') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.hotel_desc') }}
                    </p>
                </div>
            </div>

        </div>
        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div "style="float: {{ $dir_div }}">
                <br><br><br><br>
                <div class="title w3-padding-top-64 w3-center">
                    <h1 class="w3-text-black w3-padding-top-64"> <b class="w3-padding-top-64">{{ __('lang.resorts') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
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
                            <div style="background-image:url('{{ asset('assets/images/servcies/resorts/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/resorts/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/4.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div> --}}
                    </div>

                    
                </div>
            </div>
            

        </div>
        <div class="row services ">

            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel3" data-slide-to="1"></li>
                        <li data-target="#myCarousel3" data-slide-to="2"></li>
                        <li data-target="#myCarousel3" data-slide-to="3"></li>
                        {{-- <li data-target="#myCarousel3" data-slide-to="4"></li>
                        <li data-target="#myCarousel3" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div style="background-image:url('{{ asset('assets/images/servcies/resturant/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/resturant/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>


                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/resturant/3.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/resturant/4.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div> --}}
                    </div>

                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6 style-div ">
                <br><br><br><br>
                <div class="title w3-padding-top-64 w3-center">
                    <h1 class="w3-text-black w3-padding-top-64"> <b class="w3-padding-top-64">{{ __('lang.resturant') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.resturant_desc') }}
                    </p>
                </div>
            </div>

        </div>

        <div class="row services ">
            <div class="col-sm-12 col-md-6 style-div "style="float: {{ $dir_div }}">
                <br><br><br><br>
                <div class="title w3-padding-top-64 w3-center">
                    <h1 class="w3-text-black w3-padding-top-64"> <b class="w3-padding-top-64">{{ __('lang.marriage_and_conferene_halls') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <h3 class="title" ><b>{{ __('lang.hadb_najd') }}</b></h3><br>
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
                        {{-- <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div style="background-image:url('{{ asset('assets/images/customer_logo/hdb.png') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/customer_logo/hdb.png') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/3.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/4.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div> --}}
                    </div>

                    
                </div>
            </div>
            

        </div>


        <div class="row services ">

            <div class="col-xs-12 col-md-6 style-div" style="float: {{ $dir_div }}">

                <div id="myCarousel5" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel5" data-slide-to="1"></li>
                        {{-- <li data-target="#myCarousel3" data-slide-to="2"></li>
                        <li data-target="#myCarousel3" data-slide-to="3"></li> --}}
                        {{-- <li data-target="#myCarousel3" data-slide-to="4"></li>
                        <li data-target="#myCarousel3" data-slide-to="5"></li> --}}
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div style="background-image:url('{{ asset('assets/images/servcies/1.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            {{-- <img src="" alt="Los Angeles" style="width:100%;"> --}}
                        </div>

                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/2.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>


                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/3.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/4.jpg') }}') ;height: 780px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </div> --}}
                        {{-- <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/5.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div>
                        <div class="item">
                            <div style="background-image:url('{{ asset('assets/images/servcies/hotel/6.jpg') }}') ;height: 780px;background-position: top;background-repeat: no-repeat;background-size: cover;"></div>
                        </div> --}}
                    </div>

                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6 style-div ">
                <br><br><br><br>
                <div class="title w3-padding-top-64 w3-center">
                    <h1 class="w3-text-black w3-padding-top-64"> <b class="w3-padding-top-64">{{ __('lang.catering_services') }}</b></h1>
                    <small>{{ __('lang.fields') }}</small>

                </div>
                <div class="desc w3-padding-top-32  w3-center ">
                    <p class="lead">
                        {{ __('lang.catering_services_desc') }}
                    </p>
                </div>
            </div>

        </div>
        
    </div>
</section>
