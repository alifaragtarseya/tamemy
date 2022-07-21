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
        color: #000 !important;
    }
    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>li>a:hover, .lang-txt:hover, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #7366ff !important;
    background-color: transparent;
}

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
                        <img src="{{ asset('assets/images/backgrounds/contact.png') }}" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6" style="padding-top: 90px">

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
