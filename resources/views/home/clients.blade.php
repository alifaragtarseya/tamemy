

<section id="services" class="section-padding" style="background: #f4f4f4">
    <div class="container reveal fade-bottom">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1><b class="w3-text-black">{{ __('lang.clients') }}</b></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        {{-- {{ __('lang.we_have_the_best_services') }} --}}
                    </p>
                </div>
            </div>
        </div><!-- title row end-->

        <div class="owl-carousel owl-theme">
            @for ($index = 5; $index <= 32; $index ++)
            @if (!in_array($index , [17,18,19]))
            <div class="item">
                <div class="box-shadow w3-container">
                    <div class="w3-display-topleft left-border-item border-item-1"  ></div>
                    <div class="w3-display-topright left-border-item border-item-2"  ></div>

                    <img src="{{ asset('assets/images/customer_logo') }}/{{ "New Project (" . $index . ").png" }}" style="width: 100%" alt="">
                </div>
            </div>
            @endif
            @endfor
        </div>
    </div>
</section>
