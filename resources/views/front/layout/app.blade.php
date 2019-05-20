<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
        @yield('meta-tags')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
        <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{url('/front/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="57x57" href="front/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="front/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="front/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="front/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="front/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="front/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="front/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="front/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="front/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="front/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="front/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="front/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="front/favicon/favicon-16x16.png">
        <link rel="manifest" href="front/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="front/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        @stack('styles')
    </head>
    <body>
    <div id="app">

      @include('front.layout.nav')

     @yield('content')

     @include('front.layout.footer')

    </div>



    <!-- JavaScripts -->
    <script src="{{url('/')}}/front/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{url('/')}}/front/plugins/slick/slick.min.js"></script>
    <script src="{{url('/')}}/front/js/actions.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




    @stack('scripts')


</body>
</html>
