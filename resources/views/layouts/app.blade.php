<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="imgs/icon/icon.png">

        <title>{{ config('app.name', 'Zema') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
        {{-- <link rel="stylesheet" href="/vcss/app.css"> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('vcss/css.css'); }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('vcss/css.css')}}"> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        <style>
          <style>
    
            
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
      }
      .hide-scroll-bar::-webkit-scrollbar {
          display: none;
        }
      
    </style>
        
    </head>
    <body class="font-sans antialiased scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden">
        <div class=" ">
            @include('layouts.navigation')
                    
            <!-- Page Content -->
            <main class="pt-16 relative z-10">
                {{-- {{ $slot }} --}}
                @yield('index')
                @yield('home')
                @yield('news')
                @yield('artist')
                @yield('album')
                @yield('about')

                @yield('login')
                @yield('signup')
                @yield('register')

                @yield('toartist')
                @yield('artistprofile')
                @yield('uploadmusic')
                @yield('viewmusic')
                @yield('viewalbum')


                @yield('showtracks')
            </main>
        </div>
        {{-- <x-footermine/> --}}

        {{-- <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script> --}}
    </body>
</html>
