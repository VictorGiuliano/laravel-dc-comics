<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/js/app.js')
        <title>@yield('title')</title>
    </head>
</head>
<body>
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    <section class="footer-social">
        <div class="f-footer container">
            <div class="socials">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="socials s-links">
                <a class="text-social">FOLLOW US</a>
                <img src="{{asset('images/footer-facebook.png')}}">
                <img src="{{asset('images/footer-twitter.png')}}">
                <img src="{{asset('images/footer-youtube.png')}}">
                <img src="{{asset('images/footer-pinterest.png')}}">
                <img src="{{asset('images/footer-periscope.png')}}">
            </div>
        </diV>
    </section>
</body>
</html>