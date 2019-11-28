<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','微博 App') - by ftw</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">微博 App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a href="/help" class="nav-link">help</a></li>
            <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
