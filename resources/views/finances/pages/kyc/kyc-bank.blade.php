<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  {{--    Google Fonts--}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

  <style type="text/css">
    .mui-content {
      margin-top: 44px;
    }
    input{
      font-size: 16px;
    }
    @media screen and (max-width: 320px){
      /*	.entergroup span.t1{margin-top:-6px;}*/
      .entergroup span.t2{ margin-top:-2px;}
      .entergroup span.t3{ margin-top:-2px;}
    }
    .entergroup .w55 {
      height: 32px;
    }

    .entergroup .bainpt{

      width: 65%;
    }
    .hnav{
      /*background-image: linear-gradient(to right, #3C42CA , #5983F8);*/
      background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
    }
    .hnav .mui-action-back, .hnav .mui-title{
      color: #ffffff;
    }
    .entergroup .bainpt {
      width: 65%;
      background: #EEEEEE;.entergroup
    }
    .entergroup, .mui-ngroup, .paynums{
      border: 0;
    }
    .entergroup{
      width: 100%;
      padding: 0 5%;
      background: #EEEEEE;
      margin-top: 10px;
      border-radius: 50px;
    }
    .mui-ngroup, .paynums{
      background: none;
    }
    .fl{
      /*color: #406DEE;*/
      color: #141ed2;
    }
    .mui-group{
      background: #ffffff;
      border-radius: 10px;
      padding: 10px 0 20px;
      margin: 0 12px;
    }
    .banktip {
      background: #f4f4ff;
      padding: 15px;
      margin: 20px 12px;
      border-radius: 10px;
    }
    .banktip p {
      color: #1e1e1e;
    }
    .mui-ngroup {
      padding: 0 10px;
    }
    .bank_icon{
      width: 18px !important;
      background: url(/finances-cn/home/imgs/ic_xiangxia.png) no-repeat scroll center center / 18px 8px content-box content-box;
    }
  </style>
</head>
<body class="newbg">
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <!--<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="/index.php?m=Info&a=index"></a>-->
  <a href="{{route('finances.info')}}" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="padding-top:10px;"></a>
  <h1 class="mui-title">Nhập thẻ ngân hàng</h1>
</header>

<!-- header end-->
<form id="form" method="post" onsubmit="return false" style="margin-top:60px;">
  <section class="mui-content">
    <div class="mui-group">

      <section class="mui-ngroup">
        <!-- group1 -->
        <div class="cf entergroup">
          <span class="fl" style="font-size:10px;">Tên chủ thẻ</span>
          <span class="fr naclas pr0 t1" ></span>
          <input class="fr bainpt pr0 font-sz-12" name="card_placeholder_name" id="card_placeholder_name" type="text" placeholder="Nhập tên chủ thẻ" value="" />
        </div>
        <!-- group1 end-->
        <!-- group1 -->
        <div class="cf entergroup">
          <span class="fl" style="font-size:10px;">Số ID chủ thẻ</span>
          <span class="fr naclas pr0 t2"></span>
          <input class="fr bainpt pr0 font-sz-12" name="card_identity_owner" id="card_identity_owner" type="text" placeholder="Nhập số ID chủ thẻ" value="" />
        </div>
        <!-- group1 end-->
      </section>
      <section class="mt10 mui-ngroup  h_input">
        <!-- group1 -->
        <!-- group1 -->
        <div class="cf entergroup">
          <span class="fl" style="font-size:10px;">Tài khoản ngân hàng</span>
          <a class="selar fr" href="javascript:;" >
            <span id="bankname">ICBC</span>
            <span class="mgarr ml10 bank_icon"></span>
          </a>
          <input type="hidden" name="bank" id="bank_vendor" value="ICBC">
          <select class="form-control selsch" onchange="changeBank();" id="bank">
            <option value="CB Bank">CB Bank</option><option value="Agribank">Agribank</option><option value="OCEAN Bank">OCEAN Bank</option><option value="GP Bank">GP Bank</option><option value="ACB">ACB</option><option value="KS Bank">KS Bank</option><option value="HD Bank">HD Bank</option><option value="VIB">VIB</option><option value="VietBank">VietBank</option><option value="Eximbank">Eximbank</option><option value="Sacombank">Sacombank</option><option value="VIETCAPITAL Bank">VIETCAPITAL Bank</option><option value="ĐÔNG Á Bank">ĐÔNG Á Bank</option><option value="NAM Á Bank">NAM Á Bank</option><option value="OCB Bank">OCB Bank</option><option value="SCB Bank">SCB Bank</option><option value="Saigonbank">Saigonbank</option><option value="TP Bank">TP Bank</option><option value="BacABank">BacABank</option><option value="Techcombank">Techcombank</option><option value="National Citizen Bank">National Citizen Bank</option><option value="VP Bank">VP Bank</option><option value="SHB">SHB</option><option value="MB Bank">MB Bank</option><option value="Vietcombank">Vietcombank</option><option value="VietinBank">VietinBank</option><option value="BIDV">BIDV</option><option value="SeABank">SeABank</option><option value="AB Bank">AB Bank</option><option value="MSB">MSB</option><option value="VietABank">VietABank</option><option value="PVcombank">PVcombank</option><option value="BaoVietBank">BaoVietBank</option><option value="PG Bank">PG Bank</option><option value="Shinhan Bank">Shinhan Bank</option>                            </select>
        </div>
        <!-- group1 -->
        <div class="cf entergroup">
          <span class="fl" style="font-size:10px;">Số tài khoản ngân hàng</span>
          <input class="fr bainpt pr0 font-sz-12" name="card_number" id="card_number" type="text" placeholder="Nhập STK ngân hàng" value="" />
        </div>
        <!-- group1 end-->

      </section>

    </div>
    <div class="banktip" style="position:relative;">
      <!--<p style="position:absolute; top:30px " >-->
      <!--    <img class="" src="/finances-cn/home/imgs/img/index/lingdang.png" alt="" style="width:20px; margin-right:10px" />-->
      <!--</p>-->
      <p style="font-weight: 600;">Thông báo：</p>
      <p style="">Thẻ ngân hàng bạn điền phải là thẻ ghi nợ (debit card) đứng tên bạn</p>
    </div>
    <!-- paymoney end-->


    <section class="msub" style="position: relative;">
      <button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onclick="saveInfo();" id="subBtn">
        Gửi đi                    </button>
      <!-- 提示 -->
      <div style="display: none; position: absolute;" class="errdeo" id="messageBox"></div>
    </section>
</form>
</section>
</body>
</html>
<script src="/finances-cn/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script src="/finances-cn/home/js/jquery.validate.js"></script>
<script>
  var userbank = "";
  if (userbank != '' && userbank != null) {
    $("#bankname").html(userbank);
    $("#banks").val(userbank);
  }
  function salert(msg) {
    $('#messageBox').html(msg);
    $('#messageBox').show();
    setTimeout(function () {
      $('#messageBox').hide();
    }, 2200);
  }
  function changeBank() {
    var bank = $("#bank option:selected").text();
    var bank_mr = "";
    $("#bankname").html(bank);
    $("#banks").val(bank);
    if (bank != bank_mr) {
      $("#bank_card_no").val("");
    }
  }
  function saveInfo() {

    const card_placeholder_name = $("#card_placeholder_name").val();
    const card_identity_owner = $("#card_identity_owner").val();
    const bank_vendor = $("#bank_vendor").val();
    const card_number = $("#card_number").val();
    if (card_placeholder_name != '' && card_identity_owner != null && bank_vendor != '' && card_number != null) {
      $.post(
        "{{route('finances.kyc.bank.submit')}}",
        {
          card_placeholder_name: card_placeholder_name,
          card_identity_owner: card_identity_owner,
          bank_vendor: bank_vendor,
          card_number: card_number,
          _token: '{{csrf_token()}}'
        },
        function (data, state) {
          if (state != "success") {
            salert("Yêu cầu dữ liệu thất bại, hãy thử lại!");
          } else if (data.status == 1) {
            salert("Đã lưu thành công!");
            window.location.href = "{{route('finances.profile')}}";
          } else {
            salert(data.msg);
          }
        }
      );
    } else {
      salert("Thông tin thẻ ngân hàng không đầy đủ!");
    }
  }
</script>
