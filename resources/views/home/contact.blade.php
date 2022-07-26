@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp
@extends('layouts.master')
@section('title')
{{ __('lang.contact') }}
@endsection

@section('css')
<style>
    .navbar {
        box-shadow: 0 0 17px -3px;
    }

    nav.before-color .navbar-nav>li>a {
        color: gray !important;
    }
    /* .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>li>a:hover, .lang-txt:hover, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #7366ff !important;
    background-color: transparent;
} */

#contact {
    background: none;
    background-position: 50% 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;
    height: auto;
    overflow-x: hidden;
    overflow-y: hidden;
    vertical-align: middle;
    z-index: 1;
    display: block;
    position: relative;
}
.input-style {
    border-radius: 8px;
    border: none;
    background: #d8d5f730;
}
.container {
    padding-right: 30px !important;
    padding-left: 0px !important;
    margin-right: auto;
    margin-left: auto;
}
</style>
@endsection


@section('content')
<div class="contant">
    <div class="row">
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        {{-- <div class="row contact-details">
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
                            </div> --}}
                        <!--contact details-->
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12 col-md-6" style="float: {{ $dir2 }}">
                        <img style="max-width: 100%" src="{{ asset('assets/images/backgrounds/contact.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6" style="padding-top: 90px">
                        <div class="row">
                            <div class="col-md-4 w3-padding w3-center">
                                <a href="tel:0541441616">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <br>
                                    <b>
                                        054 144 1616
                                    </b>
                                </a>
                            </div>
                            <div class="col-md-4 w3-padding w3-center">
                                <a href="mailto:info@altamimiest.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <br>
                                    <b>
                                        info@altamimiest.com
                                    </b>
                                </a>
                            </div>
                            <div class="col-md-4 w3-padding w3-center">
                                <a href="mailto:info@altamimiest.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <br>
                                    <b>
                                        info@altamimiest.com
                                    </b>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="box ">
                            <div class="box-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" required class="w3-padding-24 form-control input-style"
                                            placeholder="{{ __('lang.name') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" required class="w3-padding-24 form-control input-style"
                                            placeholder="{{ __('lang.email') }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control input-style" id="" cols="60" rows="7"
                                            placeholder="{{ __('lang.message') }}"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('js')

@endsection
