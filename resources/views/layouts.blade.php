<html>
<head>
    <title>首页</title>
</head>
<body>
<div style="width: 100%; height: 100px; background-color: #0C9A9A;">
    @section('header')
        前头
        @show
</div>
<div style="width: 100%; height: 300px; background-color: #0E0EFF;">
    @yield('content','主要内容')

</div>
<div style="width: 100%; height: 100px; background-color: #1c00cf;">
    @section('footer')
        尾巴
        @show
</div>
</body>
</html>