
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <script type="text/javascript" nonce="487e3b1472514cd5ac376bc52da" src="//local.adguard.org?ts=1666521412073&amp;type=content-script&amp;dmn=dk.cscaiwei.cn&amp;pth=%2Findex.php%3Fm%3DOrder%26a%3Ddaikuan&amp;app=chrome.exe&amp;css=3&amp;js=1&amp;rel=1&amp;rji=1&amp;sbe=1"></script>
  <script type="text/javascript" nonce="487e3b1472514cd5ac376bc52da" src="//local.adguard.org?ts=1666521412073&amp;name=AdGuard%20Extra&amp;name=AdGuard%20Popup%20Blocker&amp;type=user-script"></script><link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newindex-09d04b32f3.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newindex-09d04b32f3.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css">
</head>
<style>
  .hnav{
    background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
  }
  .hnav .mui-action-back, .hnav .mui-title{
    color: #FFFFFF;
  }
  .oktable{
    margin-top: 20px;
    width: 95%;
    margin-left: 2.5%;
    background: #EEEEEE;
    margin-top: 10px;
    border-radius: 10px;
  }
  .listit {
    width: 50%;
    color: #141ed2;

  }
  .oktit{
    display: flex;
    align-items: center;
  }
  .logBtn{
    background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
    color: #FFFFFF;
  }
</style>
<body style="background:#f5f5f9;">
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <a href="/index.php?m=Index&a=index" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
  <h1 class="mui-title">
    Đăng ký khoản vay</h1>
</header>
<!-- header end-->
<div class="mui-content">
  <article class="mt10 jiekuan">
    <div class="oktit"><img class="" src="/finances-cn/home/imgs/img/index/lingdang.png" alt="" style="width:20px; margin-right:10px;" />Xác nhận thông tin khoản vay</div>
    <div class="cf okdan">
      <div class="oktable">
        <span class="fc9 listit">Số tiền vay</span>
        <input hidden type="number" id="money" value="{{$data['money']}}">
        <span>{{vnd_format($data['money'])}}</span>
      </div>
      <div class="oktable">
        <span class="fc9 listit">Thời gian vay</span>
        <input hidden type="number" id="month" value="{{$data['month']}}">
        <span>{{$data['month']}} tháng</span>
      </div>
      <div class="oktable">
        <span class="fc9 listit">Trả nợ hàng tháng</span>
        <span>{{vnd_format($payAnnual)}}</span>

      </div>
      <div class="oktable">
        <span class="fc9 listit"></span>
        <span class="fc9">（Bao gồm cả lãi suất {{$rate*100/12}}%/Tháng, ({{$rate*100}}%/Năm), {{vnd_format($interestRateMoney)}}）</span>
        <span class="fc9">Số tiền lãi sẽ giảm dần theo số tiền gốc còn lại</span>
      </div>
      <!--<div class="oktable">-->
      <!--    <span class="fc9 listit">tài khoản ngân hàng</span>-->
      <!--    <span>ICBC</span>-->
      <!--</div>-->
      <!--<div class="oktable">-->
      <!--    <span class="fc9 listit">Nhận tài khoản</span>-->
      <!--    <span>123123123213</span>-->
      <!--</div>-->
      <div class="oktable">
        <span class="fc9 listit">Tên chủ thẻ</span>
        <span>{{$user->kycBank->card_placeholder_name}}</span>
      </div>
      <div class="oktable">
        <span class="fc9 listit">Số ID chủ thẻ</span>
        <span>{{$user->kycBank->card_identity_owner}}</span>
      </div>
      <div class="oktable">
        <span class="fc9 listit">Chi phí kiểm toán</span>
        <span>0đ</span>
      </div>
      <!--<div class="oktable">
             <span class="fc9 listit">推荐人ID</span>
             <span><input type="text" name="userid" id="userid" value="" class="mui-input-clear mui-input nofocus" placeholder="请输入推荐人ID"></span>
     </div>-->
    </div>
  </article>

  <div class="cf mt20">
{{--    <label class="fl rev">--}}
{{--      <input type="checkbox" id="xieyi">--}}
{{--      <em></em>--}}
{{--    </label>--}}
{{--    <span class="fl arge" onClick="xieyiChange();">--}}
{{--                                    </span>--}}
  </div>
  <div class="protit sevagreee " style="background-color:#f5f5f9;">
    <a class="logBtn main-bg-color" href="javascript:subForm();">Vay ngay</a>
  </div>
</div>

<div class="deowin2" style="display:none;" id="deowin31">
  <div class="deocon2">
    <div class="divpad2" style="text-align:center;height:110px">
      <p class='tex' style="color: #4c4c4c;line-height: 30px;font-size:16px;"></p>
    </div>
    <div class="wobtn">
      <!-- 一个按钮用这个结构 -->
      <a id="winbtn3" href="javascript:;">Đồng ý</a>
    </div>
  </div>
</div>
<div class="deowin2" style="display:none;" id="deowin32">
  <div class="deocon2">
    <div class="divpad2" style="text-align:center;height:85px">
      <p class='tex' style="color: #4c4c4c;line-height: 30px;font-size:16px;"></p>
    </div>

  </div>
</div>
<div class="emask" id="mask3" style="display: none;"></div>
<div style="display: none;position: absolute; top: 45%" class="errdeo" id="messageBox">
</div>
<script src="/finances-cn/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.picker.css">
<link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.poppicker.css">
<script src="/finances-cn/home/js/mui.min.js"></script>
<script src="/finances-cn/home/js/mui-bd98b45634.picker.js"></script>
<script src="/finances-cn/home/js/mui-9fb36284ae.poppicker.js"></script>

<script>
  var tongyi = false;
  var isload = false;//避免重复提交
  $(function () {
    $("#winbtn3").click(function () {
      $("#deowin31").hide();
      $('#mask3').hide();
    });
    $("#xieyi").click(function () {
      if (tongyi) {
        tongyi = false;
      } else {
        tongyi = true;
      }
    });
  });
  function xieyiChange() {
    $("#xieyi").click();
  }
  function showalert(msg) {
    $("#messageBox").html(msg);
    $("#messageBox").show();
  }
  function subForm() {
    //var userid = $("#userid").val();
    // $.post(
    //	"/index.php?m=Order&a=user",
    //	{
    //		userid:userid,
    // 	},
    // 	function(data,state){
    //		if(state != "success"){
    //		    $(".tex").html('请求数据失败,请重试!');
    //		    $("#deowin31").show();
    //		    $('#mask3').show();
    //   	}else if(data.status != 1){
    //		    $(".tex").html(data.msg);
    //		    $("#deowin31").show();
    // 		    $('#mask3').show();
    //    	}else{

    // if (!tongyi) {
    //   $(".tex").html('Vui lòng đồng ý và kiểm tra thỏa thuận');
    //   $("#deowin31").show();
    //   $('#mask3').show();
    //   return false;
    // }
    if (isload) {
      $(".tex").html('Không gửi nhiều lần!');
      $("#deowin31").show();
      $('#mask3').show();
    } else {
      isload = true;
      //提交获取支付订单号

      var steps = [
        "Nộp đơn đăng ký",
        "Kiểm tra thông tin nhận dạng của bạn",
        "Đang đánh giá tín dụng",
        "Đang tiến hành đánh giá rủi ro"
      ];
      showalert(steps[0]);
      var stepIndex = 1;
      var timer = setInterval(function () {
        if (stepIndex >= steps.length) {
          clearInterval(timer);
          $.post(
            "{{route('finances.loan.apply')}}",
            {
              money: $("#money").val(),
              month: $("#month").val(),
              _token: '{{csrf_token()}}'
              //userid:userid,
            },
            function (data, state) {
              if (state != "success") {
                $(".tex").html('Yêu cầu dữ liệu thất bại, hãy thử lại!');
                $("#deowin31").show();
                $('#mask3').show();
              } else if (data.status != 1) {
                $(".tex").html(data.msg);
                $("#deowin31").show();
                $('#mask3').show();
                setTimeout(function() {
                  window.location.href = '{{route('finances.profile')}}';
                }, (2500));
              } else {
                mui.alert('Đơn của bạn đã được chấp nhận! Bạn có thể theo dõi tiến độ xét duyệt khoản vay trong khoản vay của tôi!', 'Thông báo', function ()
                {
                  window.location.href = '{{route('finances.profile')}}'
                });
              }
            }
          );
        } else {
          showalert(steps[stepIndex]);
          stepIndex++;
        }
      }, 1000);
      isload = false;
    }

    //}
    //}
    // );
  }
</script>
</html>
