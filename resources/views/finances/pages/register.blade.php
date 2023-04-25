<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Finances</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css">
  <link rel="stylesheet" href="/finances-cn/home/css/custom.css">
  <link rel="stylesheet" href="/finances-cn/home/css/pages/login.css">

</head>

<body>
<section class="login-main">
  <div class="login-bg">
    <p class="text-brand text-bold">{{$websiteName?? ''}}</p>
  </div>
  {{-- <img src="/finances-cn/home/imgs/img/login/bg.png" alt="" class="lm-bg"/> --}}
  <section class="lm-body">
    <div class="lmb-logo">
      <!--<img src="//finances-cn/home/imgs/img/login/logoNew.png" alt=""/>-->
    </div>
    <div class="lmb-choose">
      <div class="lmb-c-tab">
        <div class="text-upper text-color text-bold">đăng ký</div>
        <div class="text-upper border-left-right main-bg-color text-bold"
             onclick="window.location.href = '{{route('finances.login')}}';">đăng nhập
        </div>
      </div>
      <div class="lmb-c-input">
        <div class="divFlex">
          <img src="/finances-cn/home/svg/smartphone.svg" alt="" class="logo"/>
          <input id="account" name="account" type="number" class="mui-input-clear mui-input"
                 placeholder="Vui lòng nhập số điện thoại" data-input-clear="2" data-flag="1">
          <img src="index.php@m=Order&amp;a=bills.html" alt="" style="display:none"/>
        </div>
        <div class="divFlex">
          <img src="/finances-cn/home/svg/lock.svg" alt="" class="logo"/>
          <input id="password" name="password" type="password" class="mui-input-clear mui-input"
                 placeholder="Vui lòng nhập mật khẩu" data-input-clear="3" data-flag="1">
          <img src="/finances-cn/home/imgs/img/login/eye.png" alt="" class="eye"
               id="switch"/>
        </div>
        <div class="divFlex">
          <img src="/finances-cn/home/svg/lock.svg" alt="" class="logo"/>
          <input id="password-confirm" type="password" class="mui-input-clear mui-input"
                 placeholder="Xác nhận mật khẩu mới" data-input-clear="3" data-flag="1">
          <img src="/finances-cn/home/imgs/img/login/eye.png" alt="" class="eye"
               id="switch"/>
        </div>
      </div>
      <div class="lmb-c-btn main-bg-color text-upper text-bold" id="btn">đăng ký</div>
    </div>
    {{-- <div class="lmb-tip">
        <div onclick="$('#change-lan').show();">
            Chuyển đổi ngôn ngữ </div>
        <div>
            <a class="text-color" href="index.php@m=User&amp;a=backpwd.html">Quên mật khẩu？</a>
        </div>
    </div> --}}
  </section>
</section>
<!-- 切换语言提示 -->
<section class="change-lan" id="change-lan">
  <div class="cl-main">
    <div class="title">
      Xin lựa chọn ngôn ngữ
    </div>
    <div class="cl-ul">
      <div value='vi-VN' class="cl-u-li">
        Tiếng Việt
      </div>
    </div>
  </div>
</section>
<!-- 提示 -->
<div style="display: none;top:45%;z-index:10000;" class="errdeo" id="messageBox">
</div>
<script src="/finances-cn/home/js/jquery.js"></script>
<script src="/finances-cn/home/js/fontsizeset.js"></script>
<script src="/finances-cn/home/js/mui.min.js"></script>
<script src="/finances-cn/home/js/newcheck.js"></script>
<!-- <script src="//finances-cn/home/js/tabs.js"></script> -->

<script>
  // 语言选择
  $('.cl-u-li').click(function (res) {
    let val = $(this).attr("value");
    window.location.href = '/index.php?m=User&a=login' + '&l=' + val;
    $("#change-lan").hide();
  })

  //提示
  function tishi(str) {
    $('#messageBox').text(str);
    $('#messageBox').show();
    setTimeout(function () {
      $('#messageBox').hide();
    }, 2200);
  }

  //密码开关
  var on = true;
  $('#switch').click(function () {
    if (on == true) {
      $('#password')[0].type = "text";
      $('#switch').attr('src', '//finances-cn/home/imgs/img/login/eye1.png');
      on = false;
    } else {
      //$('#password').attr('type','password');
      $('#password')[0].type = "password";
      $('#switch').attr('src', '//finances-cn/home/imgs/img/login/eye.png');
      on = true;
    }
  });
  // 登录
  $("#btn").click(function () {
    var phone = $('#account').val();
    var password = $('#password').val();
    var passwordConfirm = $('#password-confirm').val();
    if (!phone) {
      tishi('Vui lòng nhập số điện thoại');
      return false
    }
    //var reg1 = /^1\d{10}$/;
    var reg1 = /^[0-9]*$/;
    if (!reg1.test(phone)) {
      tishi('Số điện thoại không hợp lệ');
      return false;
    }
    if (password.length == 0) {
      tishi('Xin vui lòng nhập mật khẩu');
      return false;
    }
    if (password != passwordConfirm) {
      tishi('Mật khẩu xác nhận không đúng');
      return false;
    }
    $.post(
      "{{route('finances.register.submit')}}", {
        phone: phone,
        password: password,
        _token: '{{csrf_token()}}'
      },
      function (data, state) {
        if (state != "success") {
          tishi('Lỗi hệ thống [REGISTER_00001]');
          return false;
        } else if (data.status != 1) {
          tishi(data.msg);
          return false;
        } else {
          //登录成功
          window.location.href = "{{route('finances.info')}}";
        }
      }
    );
  });
</script>
</body>

</html>
