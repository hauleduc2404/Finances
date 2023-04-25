<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  <style>
    body {
      background-color: #ffffff;
    }
    .dant a {
      font-size: 13px;
      display: inline-block;
    }
    .posfix{
      position: fixed;
      bottom: 0;
    }
    .jumpdown{
      width: 100%;
    }
    .jumpdown img{
      padding-top: 10px;
      width: 100%;
    }
    .orange{
      color: #fb6f00!important;
    }
    .huankuan_div{
      position: absolute;
      right: 5%;
      top: 16%;
      background-color: #fb6f00;
      line-height: 30px;
    }
    .hnav{
      background-image: linear-gradient(to right, #313ae5 , #141ed2);
    }
    .hnav .mui-action-back, .hnav .mui-title{
      color: #FFFFFF ;
      background-image: ;
    }
    .mui-content {
      background-color: transparent;
    }
    .xinf{
      background: transparent;
      padding: 80px 40px 10px;

    }
    .mydiv {
      width: 100%;
      height: auto;
      /* margin: 0 auto; */
    }
    .atxt{
      color: #1e1e1e;
      font-size: 14px;
    }
  </style>
</head>
<body>
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <a href="{{route('finances.info')}}" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
  <h1 class="mui-title">Trả nợ của tôi</h1>
</header>
<!-- header end-->
<div class="mui-content">
  <div class="xinf">
    <div class="mydiv" style='width: 100%;' >
      <img src="/finances-cn/home/imgs/p_01.png" alt="">
    </div>
  </div>
  <div class="atxt">
    Không cần hoàn trả<br>
    Bạn không có hóa đơn nào để trả nợ trong tháng này                </div>
</div>
<script src="/finances-cn/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script>
  $('.bottom-bar a').click(function () {
    $('.bottom-bar a').removeClass('cur');
    $('.bottom-bar a span').removeClass('cur');
    $(this).addClass('cur');
    $(this).find('span').eq(0).addClass('cur');
  });
  function toorder() {
    window.location.href = "/index.php?m=Index&a=index";
  }
</script>
</body>
</html>
