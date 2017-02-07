<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="沙发厂后台管理">
    <meta name="keywords" content="后台管理">
    <meta name="刘子阳 <liuziyang_lzy@163.com>">
    <title>@yield('title', '沙发厂后台管理')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @include('shared.messages')
            @yield('content')
        </div>
    </div>
</body>
</html>