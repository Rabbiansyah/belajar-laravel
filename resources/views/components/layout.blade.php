<!doctype html>
<html class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{$title}}</title>
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="h-full">
        <div class="min-h-full" >
        <x-navbar></x-navbar>
        <x-header>{{$title}}</x-header>
        {{$slot}}
        </div>

    </body>
</html>
