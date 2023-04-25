<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--<meta name="description" content=" Lotte finance ">-->
    <!--<meta name="Keywords" content="">-->
    <meta name="format-detection" content="telephone=no,email=no" />
    <link rel="shortcut icon" href="/finances-cn/home/images/logo.ico">
    <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css" />
    <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css" />
    <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css" />
    <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newindex-09d04b32f3.css" />
    <link rel="stylesheet" href="/finances-cn/home/css/custom.css">
    <link rel="stylesheet" href="/finances-cn/home/custom/jquery-ui.min.css">
    {{--    Google Fonts--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">--}}


    <script src="/finances-cn/home/js/jquery.js"></script>
{{--  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>--}}
{{--  <script src="/finances-cn/home/custom/jquery-ui.min.js"></script>--}}
{{----}}
      <script src="/finances-cn/home/js/jquery.slider-min.js"></script>
    <script src="/finances-cn/home/js/jquery.dependClass.js"></script>
    <script src="/finances-cn/home/plugins/layui/layui.all.js"></script>
    <link rel="stylesheet" href="/finances-cn/home/plugins/layui/css/layui.css">
    @stack('styles')
</head>

<body>
    @yield('content')
    <!-- 底部固定栏 -->
    @include('finances.partials.bottom-nav')
    @stack('scripts')
</body>

</html>
