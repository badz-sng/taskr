<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- FROM VUE -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <!-- FROM VUE -->
        <div id="app"></div>
    </body>
</html>
