@php
    $config = [
        'appName' => config('app.name'),
        'locale' => $locale = app()->getLocale(),
        'locales' => config('app.locales'),
    ];
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title><?php echo $config['appName'] ?></title>
    <script>
        window.config = @json($config);
    </script>

    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="Pragma" content="no-cache" /> 
    <meta http-equiv="Expires" content="0" />
    <style>
      [v-cloak] > * {
        display: none;
      }
      #body {
        margin: 0;
      }
      #loading__container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        text-align: center;
        color: #fff;
        /* background: #10b981; */
        background: #1D1F20;
        text-transform: uppercase;
        font-family: Arial, sans-serif;
        font-size: 10px;
        letter-spacing: 2px;
      }
      .preloader {
        margin: 0 auto;
      }
      .preloader .line {
        width: 1px;
        height: 12px;
        background: #fff;
        margin: 0 1px;
        display: inline-block;
        animation: opacity-2 1s infinite ease-in-out;
      }
      .preloader .line-1 {
        animation-delay: 0.8s;
      }
      .preloader .line-2 {
        animation-delay: 0.6s;
      }
      .preloader .line-3 {
        animation-delay: 0.4s;
      }
      .preloader .line-4 {
        animation-delay: 0.2s;
      }
      .preloader .line-6 {
        animation-delay: 0.2s;
      }
      .preloader .line-7 {
        animation-delay: 0.4s;
      }
      .preloader .line-8 {
        animation-delay: 0.6s;
      }
      .preloader .line-9 {
        animation-delay: 0.8s;
      }
      @keyframes opacity-1 {
        0% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
      @keyframes opacity-2 {
        0% {
          opacity: 1;
          height: 15px;
        }
        50% {
          opacity: 0;
          height: 12px;
        }
        100% {
          opacity: 1;
          height: 15px;
        }
      }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/animate.css', 'resources/js/main.js'])
</head>
    <body id="body">
        <div id="app" v-cloak>
            <div id="loading__container">
                <div class="preloader">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                    <span class="line line-4"></span>
                    <span class="line line-5"></span>
                    <span class="line line-6"></span>
                    <span class="line line-7"></span>
                    <span class="line line-8"></span>
                    <span class="line line-9"></span>
                    <div>Loading</div>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </body>
</html>
