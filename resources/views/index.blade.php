<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Shop | @yield('title',"Shop") </title>
    <style>
    * {
        font-family: Microsoft JhengHei;
    }

    html,
    body {
        height: 100%;
    }

    body {
        background: url("{{asset('picture/2nd.jpg')}}") no-repeat center center /cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @include('components.header')
    <div class="container">
        @yield('wrap')
        <div class="row justify-content-center">
            @include('components.errors')
        </div>
    </div>
    @include('components.footer')
</body>

</html>