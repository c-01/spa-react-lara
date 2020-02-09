<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@React Lara App</title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
        {{-- render App Root --}}
        <div id="root-app"></div>

        <script src="js/app.js" type="text/javascript"></script>
    </body>
</html>
