<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css')}}"  media="screen and (max-width: 660px)"> 
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css')}}">

    <script src="{{ asset('asset/js/slideshow.js') }}"></script>
    <script src="{{ asset('asset/js/triagledown.js') }}"></script>
    <script src="{{ asset('asset/js/heart_like.js') }}"></script>
</head>

<body>
    <div class="app">
       
        @include('elements.top')

        <div class="app__container">
            <div class="grid">
                <!--/slider-->
                @include('elements.slide')
                
                <!-- Grid body nội dung -->
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                    @include('elements.slidebar')
                    </div>

                    <div class="grid__column-10">
                    @yield('content')
                    </div>
                </div>
            </div>

        </div>

        @include('elements.footer')
    </div>

</body>

</html>
