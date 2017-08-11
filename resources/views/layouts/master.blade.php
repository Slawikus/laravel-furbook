<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <div class="text-right">
                @if(Auth::check())
                    Logged in as <strong>{{ Auth::user()->name }}</strong>
                    {{!! link_to('logout', 'Log out') !!}}
                @else
                    {!! link_to('login', 'Log in') !!}
                @endif
            </div>
            @yield('header')
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-warning">
                {{ Session::get('error') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>