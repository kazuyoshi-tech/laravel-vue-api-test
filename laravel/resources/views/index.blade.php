<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="UTF-8">
    <title>SPAサンプル</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/r_app.js') }}" defer></script>
</head>
 
<body>
    <div id="r_app">
        <router-view />
    </div>
</body>
 
</html>