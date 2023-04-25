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
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newindex-09d04b32f3.css"/>
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css"/>
</head>
<style>
  .shadow {
    display: none;
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 888;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    background-color: rgba(0, 0, 0, .3);
  }

  .shadow .input-account-box {
    margin-top: 9rem;
    margin: 0 auto;
    background-color: white;
    border-radius: 8px;
    width: 280px;
    background-color: white;
  }

  .shadow .input-account-box .tip-name {
    text-align: center;
    width: 240px;
    margin: 0 auto;
    /*display: flex;*/
    align-items: center;
    justify-content: space-between;
    padding: 15px 0 23px;
    font-size: 15px;
    font-weight: 500;
  }

  .shadow .input-account-box .tip-name img {
    /*width: 16px;
    height:26px;*/
  }

  .pay-password {
    width: 240px;
    height: 42px;
    border: 1px solid #999999;
    margin: 0 auto;
    position: relative;
  }

  .pay-password .real-ipt {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 40px;
    line-height: 40px;
    opacity: 0;
    z-index: 3;
  }

  .pay-password .surface-ipts {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 40px;
    line-height: 40px;
    z-index: 4;
    overflow: hidden;
  }

  .pay-password .surface-ipts .surface-ipt {
    height: 40px;
    line-height: 40px;
    display: flex;
    justify-content: space-between;
  }

  .pay-password .surface-ipts .surface-ipt input {
    width: 16.67%;
    height: 40px;
    line-height: 40px;
    border: 0;
    border-right: 1px solid #999999;
    color: #333333;
    font-size: 12px;
    text-align: center;
    padding: 0;
  }

  .deowin2 {
    height: 100rem;
    padding: 0 13%;
    top: 0;
    margin-top: -75px;
    font-size: 14px;
    z-index: 88;
    background-color: rgba(0, 0, 0, .3);
  }

  .divpad2 {
    padding: 38px 24px;
  }

  .hnav {

    background-image: linear-gradient(to right, #313ae5, #141ed2);
  }

  .kprogress {
    text-align: center;
    padding: 5px 0;
  }

  .jac {
    display: flex;
    align-items: center;
    justify-content: center;
    /* align-content: center; */
    font-size: 14px;
  }

  .jiekuan {
    background-color: transparent;
    border: 0;
  }

  .lh1-5 {
    line-height: 1.5;
    margin-top: 5px;
  }

  .okdan,
  .oktit {
    border: 0;

  }

  .oktit {
    font-weight: 600;
  }

  .box {
    background-color: #ffffff;
    border-radius: 10px;
    margin: 0 12px;
    padding: 10px;
  }

  .bg-box {
    background-color: #f4f4ff;
    border-radius: 10px;
    padding-top: 1px;
  }

  .prgbar {
    margin: 20px auto 0;
  }

  .detail {
    background-color: #ffffff;
    margin: 0 12px;
    border-radius: 10px;
    padding: 10px 0;
  }

  .wobtn, .wobtn a {
    color: #FF473D;
  }
</style>
<body>
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <a href="/index.php?m=Order&a=lists" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
  <h1 class="mui-title">Chi tiết khoản vay</h1>
</header>
<!-- header end-->
<div class="mui-content">
  <article class="jiekuan">
    <div class="oktit" id="admin_message">
      Tiến độ cho vay
    </div>
    <div class="cf okdan">
      <div class="box">

        <div class="kprogress">
          <div class="jac txt">
            <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt=""
                 style="width:10px; height:10px; margin: 0 5px;"/>
            Tình trạng khoản vay của bạn
            <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt=""
                 style="width:10px; height:10px; margin: 0 5px;"/>
          </div>
          <span class="f14 red">
                                                            </span>
          <div class="lh1-5 fc9 f26"><p class="f18">Phê duyệt khoản vay </p>{{vnd_format($loan->loan_money)}}</div>
        </div>
        <div class="bg-box">
          <div class="prgbar">
            @if($isLoanDone)
              <div class="prg1">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg2">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg3">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                  <p class="main-color">Đã hoàn thành</p>
                </div>
              </div>
            @elseif($loan->is_activate == 0 || !$loan->is_activate)
              <div class="prg1">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="main-color">Đang chờ duyệt</p>
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg2">
                <div>
                  <span class="procir1"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg3">
                <div>
                  <span class="procir1"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
            @elseif($loan->is_activate == 1 || $loan->is_activate)
              <div class="prg1">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg2">
                <div>
                  <span class="procir2"></span>
                </div>
                <div class="mt4">
                  <p class="main-color">Đã duyệt</p>
                  <p class="f12"></p>
                </div>
              </div>
              <div class="prg3">
                <div>
                  <span class="procir1"></span>
                </div>
                <div class="mt4">
                  <p class="f12"></p>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>


      <!--<div style="float:left; color:#f00; padding:5px;">温馨提示：</div>

</div>
</article>-->

      <!--
    -->
      <article class="mt10 jiekuan">
        <div class="oktit">
          Chi tiết khoản vay
        </div>
        <div class="cf okdan detail">
          <div class="oktable">
            <span class="fc9 listit">Số đơn hàng</span>
            <span>{{$loan->id}}</span>
          </div>
          <div class="oktable">
            <span class="fc9 listit">Số tiền vay</span>
            <span>{{vnd_format($loan->loan_money)}}</span>
          </div>
          <div class="oktable">
            <span class="fc9 listit">Thời gian</span>
            <span>{{$loan->duration_month}} tháng</span>
          </div>
          <div class="oktable">
            <span class="fc9 listit">Trả khoản ngân hàng</span>
            <span>{{isset($user->kycBank->card_number) ? $user->kycBank->card_number . ' ('.$user->kycBank->bank_vendor.')' :''}}</span>
          </div>
          <div class="oktable">
            <span class="fc9 listit">Trả nợ hàng tháng</span>
            <span>{{vnd_format($moneyFirstMonthMustPay)}} (Giảm dần)</span>
          </div>
          <div class="oktable">
            <span class="fc9 fl listit">Hướng dẫn trả nợ</span>
            <span class="fl deinfo">Bạn cần phải thanh toán trả góp khoản vay trước ngày 15 hàng tháng, vào phần danh sách trả nợ của tôi và thực hiện trả nợ.</span>
          </div>
        </div>

        @if($loan->is_activate == 1 || $loan->is_avativate)
        <div class="jac txt mt-4 custom-btn">
          <div class="button" id="drawback">RÚT TIỀN</div>
        </div>
        @endif
      </article>
      <!--
-->


      <div class="deowin2" style="display:none;" id="deowin31">
        <div class="deocon2" style="    background: #fff;    margin-top: 107%;">
          <div class="divpad2" style="text-align:center;height:110px;background-color: #ffffff">
            <p class='tex' style="color: #4c4c4c;line-height: 24px;font-size:16px;"></p>
          </div>
          <div class="wobtn"><!-- 一个按钮用这个结构 -->
            <a id="winbtn3" href="javascript:;">Xác nhận</a>
          </div>
        </div>
      </div>

      <div class="emask" id="mask3" style="display: none;"></div>

      <div class="deowin2"
           style="display:none;text-align: center; position: absolute; top:25%;left: 4.9%;width: 90%;padding: 0;"
           id="deowin32">
        <div class="deocon2">
          <div class="divpad2" style="text-align:center;height:80%;font-size: 16px">
            <!--<div>请联系出借人员</div>-->
            <div>
              Rút tiền
              <!--img src="./Upload/code/11.jpg?p=3554324" style="width:100%;"-->
            </div>
          </div>
          <div class="wobtn">
            <!-- 一个按钮用这个结构 -->
            <a id="winbtn3" href="javascript:;" onclick="gb()">Xác nhận</a>
          </div>
        </div>
      </div>

    </div>
  </article>
</div>
</body>
<!--<script src="/finances-cn/home/js/jquery.js"></script>-->
<!--<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>-->
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="/finances-cn/home/js/mui.min.js"></script>
<script type="text/javascript">


  function qm() {
    window.location.href = "/index.php?m=Order&a=qm";


  }

  $('#winbtn3').click(function () {
    $("#deowin31").hide();
    window.location.reload();
  });


  $('#drawback').on('click', function(){
    mui.alert('Rút tiền thành công! Quý khách vui lòng chờ trong giây lát!', 'Thông báo', function ()
    {
      $("#admin_message").html('{{$loan->message_withdraw ?? 'Tiến độ cho vay'}}')
    });
  });
  // 发起代付
  function tixian(txpassword) {
    return
    var tixian = $('#txpassword').val();
    // $("#deowin32").show();
    // $('#mask3').show();
    //  $('#wobtn').show();


    if (tixian == "") {
      alert("Hãy nhập mật khẩu rút lui.");
      return false;
    }

    $.post(
      "/index.php?m=Order&a=tixian",
      {
        //  txpassword:$('#txpassword').val(),
        txpassword: txpassword,
        ordernum: "A25801268570181",
      },
      function (data, state, news) {
        console.log(data);
        //  return false;
        if (state != "success") {
          $(".tex").html("Yêu cầu dữ liệu thất bại, hãy thử lại!");
          $("#deowin31").show();
          $('#mask3').show();
        } else if (data.status != 1) {
          //  console.log(data);
          //  return false;
          $(".tex").html(data.msg);
          $("#deowin31").show();
          //   $('#mask3').show();
          // alert(data.msg);
        } else {
          $(".tex").html("Đang thực hiện giao dịch, vui lòng chờ.");
          $("#deowin31").show();
          //   $('#mask3').show();
          //   window.location.href = "/index.php?m=Order&a=lists";
          // alert("Đang thực hiện giao dịch, vui lòng chờ.");
          return;
          $(".tex").html(data.msg);
          $("#deowin31").show();
          $('#mask3').show();

          $(".tex").html("Yêu cầu dữ liệu thất bại, hãy thử lại!");
          $("#deowin32").show();
          $('#mask3').show();
        }

      });
  }

  function gb() {
    $("#deowin31").hide();
    $("#deowin32").hide();
    $("#mask3").hide();

  }

  $("#wobtn").click(function () {
    // $("#deowin31").hide();
    $("#deowin32").hide();

  });
  // $(function(){
  //        var news_status = 0;
  //        var status1 = 0;
  //        var msg = "";
  //        console.log(msg);
  //        if(news_status == 1 && status1 == 1){
  //        	alert(msg);
  //   //      	$(".tex").html(msg);
  // 		// $("#deowin31").show();
  // 		// $('#mask3').show();
  //        }
  //    })

  function topay() {
    $(".tex").html('Yêu cầu dữ liệu thất bại, hãy thử lại!');
    $("#deowin32").show();
    $('#mask3').show();

  }

  $(function () {
    mui("#demo1").progressbar().hide();
    $('#mask3').click(function () {
      $('#deowin32').hide();
      $('#mask3').hide();
      $("#winbtn3").click();
    });
  });

  function pay() {
    $.post(
      "/index.php?m=Order&a=PreFeeOrder",
      {
        order_id: "A25801268570181",
      },
      function (data, state) {
        if (data.status == 1) {
          if (data.redirect_url) {
            window.location.href = data.redirect_url;
          }
        } else {
          $(".tex").html('请求数据失败,请重试!');
        }
      });

    // window.location.href='/index.php?m=Order&a=PreFeeOrder&order_id=6';
  }
</script>

<script>

  function tx() {
    $('#shadow').show();
  }

  function gb() {
    $('#shadow').hide();
  }

  /******************************密码设置*************************/
  var type_number = 1;
  var password_val = '';
  var password_val_confirm = '';
  //点击关闭
  $('.close-flag > img').on('click', function () {

  });

  //定位焦点
  $('#pay-password').on('click', function () {

    $("#pay-password :enabled").eq(0).focus();
  });

  //按下键盘事件
  $("#pay-password input").keyup(function () {

    //回退
    if (event.which == 8) {
      $(this).prev('input').removeAttr('disabled');
      $(this).prev('input').focus();
      $(this).prev('input').val('');
      //清除密码
      if (type_number == 1) {
        password_val = password_val.substring(0, password_val.length - 1);
      } else if (type_number == 2) {
        password_val_confirm = password_val_confirm.substring(0, password_val_confirm.length - 1);
      }
      return;
    }

    var regName = /^\d$/;
    if (!regName.test($(this).val())) {
      $(this).val('');
      return false;
    }

    if (parseInt($(this).index()) + 1 <= $("#pay-password input").length) {
      if (type_number == 1) {
        password_val += $(this).val();
      } else if (type_number == 2) {
        password_val_confirm += $(this).val();
      }
      $(this).blur();
      $(this).attr('disabled', 'true');
      if (parseInt($(this).index()) + 1 <= $("#pay-password input").length) {
        $(this).next('input').removeAttr('disabled');
        $(this).next('input').focus();
      }

      //输入满6个密码切换第二次
      if (parseInt($(this).index()) >= 5 && type_number == 1) {
        console.log(password_val)
        $("#shadow").hide()

        tixian(password_val);

        // pay_password_init(2);
      } else if (parseInt($(this).index()) >= 5 && type_number == 2) {
        //成功跳转
        if (password_val !== password_val_confirm) {
          layer.msg('两次密码不一致');
          $('#shadow').hide();
          return;
        }

        $.ajax({
          type: 'post',
          url: "/personal/set_password",
          data: {password: password_val_confirm},
          success: function (result) {
            var json_result = JSON.parse(result);
            console.log(json_result);
            if (json_result.code == 1) {
              //获取验证码成功
              window.location.href = '/personal/index';
            } else {
              layer.msg('设置密码失败');
              return;
            }
          }
        });

      }
    }
  });

  //初始化
  function pay_password_init(type) {
    $('#shadow').show();
    // if(type == 1){
    //     password_val = '';
    //     $('#shadow .tip-name-content').text('请设置支付密码');
    //     $('.tip-name img').attr('src','');
    // }else if(type == 2){
    //     password_val_confirm = '';
    //     $('#shadow .tip-name-content').text('请再次输入支付密码');
    //     $('.tip-name img').attr('src','/static/images/left_more.png');
    // }
    type_number = type;
    $('#pay-password input').each(function (i, v) {
      $(this).val('');
      if (i == 0) {
        $(this).removeAttr('disabled');
      } else {
        $(this).attr('disabled', 'disabled');
      }
      $("#pay-password :enabled").eq(0).focus();
    });
  }

  $('.tip-name img').on('click', function () {
    if ($(this).attr('src') != '') {
      pay_password_init(1);
    }
  });


</script>
</html>
