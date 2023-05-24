<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="referrer" content="no-referrer" />
{{--  原因：--}}

{{--  防盗链的机制：--}}
{{--  通过页面的referrer信息，判断访问者来源，是否本站点，然后对图片等请求作出相应--}}

{{--  no-referrer：--}}
{{--  1、整个 Referer 首部包含了当前请求页面的来源页面的地址，即表示当前页面是通过此来源页面里的链接进入的。--}}
{{--  2、服务端一般使用 Referer 首部识别访问来源，可能会以此进行统计分析、日志记录以及缓存优化等。--}}
{{--  3、首部会被移除。访问来源信息不随着请求一起发送。--}}
{{--  原文链接：https://blog.csdn.net/xm1037782843/article/details/127378611 --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Laravel Shop') - Laravel 电商教程</title>
  <!-- 样式 -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="{{ route_class() }}-page">
  @include('layouts._header')
  <div class="container">
    @yield('content')
  </div>
  @include('layouts._footer')
</div>
<!-- JS 脚本 -->
<script src="{{ mix('js/app.js') }}"></script>
@yield('scriptsAfterJs')
</body>
</html>
