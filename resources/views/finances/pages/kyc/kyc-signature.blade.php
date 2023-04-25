<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta content="yes" name="apple-mobile-web-app-capable"/>
  <meta content="yes" name="apple-touch-fullscreen">
  <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
  <meta content="telephone=no,email=no" name="format-detection">
  <!--<link href="https://cdn.bootcdn.net/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">-->
  <!--<link href="https://cdn.bootcdn.net/ajax/libs/jquery-weui/1.2.1/css/jquery-weui.css" rel="stylesheet">-->
  <!--<link href="https://cdn.bootcdn.net/ajax/libs/jquery-weui/1.2.1/css/jquery-weui.min.css" rel="stylesheet">-->
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/jquery-weui.min.css"/>

  {{--  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/normalize.css"/>--}}
  {{--    Google Fonts--}}
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

  <title>Chữ ký viết tay</title>
  <style>
    body {
      background: #f4f4f4;
      overflow: hidden;
      width: 100%;
      height: 100%;
    }

    .g-signature-title {
      font-size: .9rem;
      color: #666;
      font-weight: bold;
      text-align: center;
      transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -moz-transform: rotate(90deg);
      -webkit-transform: rotate(90deg);
      -o-transform: rotate(90deg);
      position: absolute;
      right: -15.4rem;
      top: 16rem;
      display: flex;
      align-items: center;
      overflow: hidden;
      width: 100vh;
    }

    .g-signature-title div {
      flex: 1;
    }

    .g-signature-title #img {
      width: 2.5rem;
    }

    .g-signatrue-body {
      background: #fff;
      height: 100vh;
      margin-left: 4.2rem;
      width: 64vw;
    }

    .g-signatrue-body > .jSignature {
      height: 100% !important;
    }

    .g-btns {
      text-align: center;
      margin-top: 1rem;
      transform: rotate(90deg);
      -ms-transform: rotate(90deg); /* IE 9 */
      -moz-transform: rotate(90deg); /* Firefox */
      -webkit-transform: rotate(90deg); /* Safari 和 Chrome */
      -o-transform: rotate(90deg);
      position: absolute;
      top: 14rem;
      left: -6rem;
    }

    .g-btns > button {
      width: 7.5rem;
      height: 2.25rem;
      font-size: .9rem;
      font-weight: bold;
      border: none;
      border-radius: 1rem;
    }

    .u-reset {
      background: #ddd;
      color: #666;
      margin-right: .5rem;
    }

    .u-submit {
      background: #141ed2;
      color: #fff;
      margin-left: .5rem;
    }

    #load {
      width: 100%;
      height: 100%;
      z-index: 99999;
      position: absolute;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, .3);
    }

    #load div {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #load #load-msg {
      transform: rotate(90deg);
      -ms-transform: rotate(90deg); /* IE 9 */
      -moz-transform: rotate(90deg); /* Firefox */
      -webkit-transform: rotate(90deg); /* Safari 和 Chrome */
      -o-transform: rotate(90deg);
      color: white;
      padding: .4rem .8rem;
      border-radius: .4rem;
      background: rgba(0, 0, 0, 0.6);
    }
  </style>
</head>
<body>
<div class="g-signature-title">

  <span id="img">Quay về</span>
  <div>Bản thân ký tên</div>
</div>
<div class="g-signatrue-body">
</div>
<div class="g-btns">
  <button class="u-reset">Ký lại</button>
  <button class="u-submit">Gửi đi</button>
</div>
<div id="load" style="display: none">
  <div>
    <span id="load-msg">提示消息</span>
  </div>
</div>
<form id="form" method="post" hidden><input name="sign"></form>
</body>

<script src="/finances-cn/home/jSignature/flashcanvas.js"></script>
<script src="/finances-cn/home/js/jquery.min.js"></script>
<script src="/finances-cn/home/js/jquery-weui.js"></script>
<script src="/finances-cn/home/jSignature/jSignature.min.js"></script>
<script>
  //初始化签字插件

  new Promise(function (resolve) {
    $(".g-signatrue-body").jSignature({color: "#141ed2", lineWidth: 2});
    resolve()
  }).then(function () {
    var hiddenWidth = $(".g-signatrue-body").css('width');
    var hiddenHeight = $(".g-signatrue-body").css('height');

    /**
     * signatureData
     * 用于存储用户签名数据
     * @type {string}
     */
    var signatureData = '';

    /**
     * isDraw
     * 用于判断用户是否已签字，是则true,否则false,默认false.
     * @type {boolean}
     */
    var isDraw = false;

//用户触摸事件，只要有触摸，isDraw则变为true.
    $('body').on('touchstart', '.jSignature', function (e) {
      isDraw = true;
    });

//重置按钮点击事件，只要点击重置，isDraw则恢复默认.
    $('.u-reset').on('click', function () {
      $(".g-signatrue-body").jSignature('reset');
      isDraw = false;
    });

//用户提交签名
    $('.u-submit').on('click', function () {
      $('.loadingOther').show();
      //重置变量并获取数据
      signatureData = '';
      signatureData = $(".g-signatrue-body").jSignature('getData', 'svg');
      var isSignatureProvided = $(".g-signatrue-body").jSignature('getData', 'base30')[1].length > 1 ? true : false;
      console.log('isSignatureProvided', isSignatureProvided)
      if (!isSignatureProvided) {
        toast('Vui lòng ký trước khi gửi');
        return;
      }
      console.log('hehehehe')
      load(true);
      $.post("{{route('finances.kyc.signature.submit')}}", {
        signature: signatureData[1],
        _token: '{{csrf_token()}}'
      }, (res, status) => {
        console.log(res);
        if (res.status == 1) {
          toast("Ký thành công");
          setTimeout(() => {
            window.location.href = '{{route('finances.info')}}';
          }, 2000);
        } else {
          toast(res.msg);
        }

      });
    });

  }).catch(function (e) {
    console.log('Error: ', e)
  })
  $('#img').on("click", function () {
    window.history.back(-1);
  })

  function toast(msg) {
    show(msg, true);
    setTimeout(() => {
      //停止提示
      show();
    }, 2000);
  }

  function load(load) {
    if (load) {
      //加载中
      show('Đang gửi dữ liệu...', true);
    } else {
      //对话框消失
      show();
    }
  }

  function show(msg, show) {
    if (show) {
      $('#load').css('display', 'block');
      $('#load-msg').text(msg);
    } else {
      $('#load').css('display', 'none');
    }
  }

</script>
</html>
