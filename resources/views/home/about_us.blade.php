@php $dir_div = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
@php $dir = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1><b>{{ __('lang.about') }}</b></h1>
                    <span class="border-line"></span>
                    
                </div>
            </div>
        </div><!-- title row end-->

        <div class="row">
            <div class="col-sm-12 col-md-6 " style="{{ !(App\Models\Helper::isMobile())? "float: " . $dir_div : "" }}">
                <div class="">
                    <img style="max-width: 100%;" src="{{ asset('assets/images/about.svg') }}" alt="">
                </div>
            </div>
            <!--features col-->
            <div  class="col-sm-12 col-md-6 {{ (App\Models\Helper::isMobile())? 'w3-center text-center' : '' }}" >
                <div class=" card about-content ">
                    <div class="card-body w3-padding-top-32"> 
                        <p class="w3-text-grey w3-large">
                            {{ __('lang.about_desc') }}
                        </p>
                    </div>
                </div>
            </div>
            <!--features col-->
        </div>
        
    </div>
    <!--container-->
</section>