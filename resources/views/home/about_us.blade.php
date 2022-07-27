@php $dir_div = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
@php $dir = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
<section id="about" class="section-padding">
    <div class="container ">
        <div class="row reveal fade-right">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title" >
                    <h1><b class="w3-text-black">{{ __('lang.about') }}</b></h1>
                    <span class="border-line"></span>
                    
                </div>
            </div>
        </div><!-- title row end-->

        <div class="row reveal fade-left">
           
            <!--features col-->
            <div  class="col-sm-12 col-md-12 w3-center text-center " >
                <div class=" card about-content ">
                    <div class="card-body w3-padding-top-"> 
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