<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@React Lara App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
        {{-- Icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <!-- Styles -->
        {{--<link rel="stylesheet" href="{{ asset('css/res1et.css') }}">--}}

    </head>
    <body>
        {{-- render App Root --}}
        <div id="root-app"></div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
