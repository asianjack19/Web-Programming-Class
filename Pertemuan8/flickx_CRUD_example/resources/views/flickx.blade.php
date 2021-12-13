<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>flickx</title>
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" sizes="64x64" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
       
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flickx/flickx.css') }}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links link-primary">
                <a href="{{url('/movies')}}">🚀 Explore Site</a>
            </div>
            <div class="content">
                <div class="m-b-md">
                    <img src="{{ asset('assets/flickx.png') }}" alt="">
                </div>
            </div>
        </div>
    </body>
</html>
