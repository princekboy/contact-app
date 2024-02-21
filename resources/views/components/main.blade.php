<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body data-theme="light">
    <main class="container">
        {{$slot}}
    </main>
    <x-flash-message />
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>