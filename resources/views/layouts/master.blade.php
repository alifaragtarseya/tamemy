@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" direction="{{ $dir }}" dir="{{ $dir }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/customer_logo/logo.png') }}" type="image/x-icon">
    @include('layouts.css')
    @yield('css')
    <style> 

    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
    <!-- Static navbar -->
    @include('layouts.navbar')

    {{-- start content  --}}
    @yield('content')

    {{-- start footer  --}}
    @include('layouts.footer')


    @include('layouts.script')
    @yield('js')

</body>
</html>
