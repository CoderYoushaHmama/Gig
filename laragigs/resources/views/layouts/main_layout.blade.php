<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/listing.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    <link rel="stylesheet" href="{{asset('css/manage.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.header')

    <div class="main-content">@yield('content')</div>

    @include('layouts.footer')
</body>
</html>
