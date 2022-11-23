<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apps HRM</title>
    @include('layouts.css')
</head>
<body class="large-sidebar fixed-sidebar fixed-header content-appear">
    <div class="wrapper">
        @include('layouts.sidebar')
        @include('layouts.header')
        <div class="site-content">
            <div class="content-area p-y-1">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.script')
</body>
</html>
