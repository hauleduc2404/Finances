<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="Lotte finance ">
  <meta name="Keywords" content="Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">

  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css">

  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css">

  <style>

    .dant a {

      font-size: 13px;

      display: inline-block;

    }

    .posfix {

      position: fixed;

      bottom: 0;

    }

    .jumpdown {

      width: 100%;

    }

    .jumpdown img {

      padding-top: 10px;

      width: 100%;

    }


    .hnav {
      /*background-image: linear-gradient(to right, #3C42CA , #5983F8);*/
      background: url('/finances-cn/home/imgs/img/index/index-bg.png');
      background-size: 100% 150px;
      height: 150px;
    }

    .hnav .mui-action-back, .hnav .mui-title {
      color: #ffffff;
    }

    .phlist,
    .jiekuan {
      background: transparent;
      border: 0;
    }

    .combtn {
      /*background-image: none;*/
      /*background-image: linear-gradient(to right, #3C42CA , #5983F8);*/
      background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
    }

    .relative {
      position: relative;
      top: 60px;
      z-index: 9;
    }

    .content {


      margin: 0 12px;
      border-radius: 15px;
      overflow: hidden;
      color: #ffffff;
      background: #ffffff url('/finances-cn/home/imgs/bg_zhongyao_info.png');
      background-size: 100% 100%;

    }

    .bg-box {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 15px 10px;
      margin: 20px 12px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .ac {
      display: flex;
      align-items: center;
    }

    .ys-fe463c {
      color: #141ed2;
    }

    a,
    .orange,
    .fc9,
    .grey {
      color: #ffffff;
    }
  </style>

</head>

<body>

<!-- header -->

<header class="mui-bar mui-bar-nav hnav">

  <a href="{{route('finances.info')}}" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>

  <h1 class="mui-title">Khoản vay của tôi</h1>

</header>

<!-- header end-->
<!--<div class="mui-content">-->
<!--    <article class="mt10 jiekuan">-->
<!--        <div class="cf dant" style="border-bottom:1px solid #e8e8e8;">-->
<!--            Thông tin ngân hàng trả nợ-->
<!--        </div>-->
<!--        <div class="cf dant" style="border-bottom:1px solid #e8e8e8;">-->
<!--            <p>Tên Ngân Hàng：</p>-->
<!--            <input type="text" class="bank" id="bank_name" value="" readonly="readonly" style="border-width:0;width:45%;font-size:10px">-->
<!--            <button class="bt" onclick="bank_name()">Sao chép</button>-->
<!--        </div>-->
<!--        <div class="cf dant" style="border-bottom:1px solid #e8e8e8;">-->
<!--            <p>Tài khoản ngân hàng：</p>-->
<!--            <input type="text" class="bank" id="account" value="" readonly="readonly" style="border-width:0;width:45%;font-size:10px">-->
<!--            <button class="bt" onclick="account()">Sao chép</button>-->
<!--        </div>-->
<!--        <div class="cf dant" style="border-bottom:1px solid #e8e8e8;">-->
<!--            <p>Tên người nhận chuyển khoản：</p>-->
<!--            <input type="text" class="bank" id="name" value="" readonly="readonly" style="border-width:0;width:45%;font-size:10px">-->
<!--            <button class="bt" onclick="sk_name()">Sao chép</button>-->
<!--        </div>-->
<!--    </article>-->
<!--</div>-->


<!--<div class="mui-content">-->
<div class="relative">
  @if(isset($loans) && count($loans) > 0)
    @foreach($loans as $loan)
      <div class="content second-bg-color mb-7">
        <article class="mt10 jiekuan">
          <div class="cf dant">
            <a href="
{{--            javascript:alert('Tính năng đang phát triển...')"--}}
            {{route('finances.my-loan.detail', ['loanId' => $loan->id])}}"
            >
              Mã số hợp đồng：{{$loan->id}} </a>
            <a class="fr f13 danstate datalose" href="#">
              <span class="fr rightarr "></span>
            </a>
          </div>
          <a class="hlist cf phlist" href="
{{--      javascript:alert('Tính năng đang phát triển...')--}}
            {{route('finances.my-loan.detail', ['loanId' => $loan->id])}}
      ">
            {{--                    <img src="/finances-cn/home/imgs/jkjl.png" alt="">--}}
            <img src="/finances-cn/home/svg/bill.svg" alt="">
            <div class="f14">
              <p class="grey"><span class="orange">Số tiền</span>：{{vnd_format($loan->loan_money)}}</p>
              @if($loan->isLoanDone)
                <p class="grey orange"><span class="orange">Trạng thái: {{'Đã hoàn thành'}}</span></p>
              @else
                <p class="grey orange"><span class="orange">Trạng thái: {{$loan->is_activate ? 'Đã duyệt' : 'Đang chờ duyệt'}}</span></p>
              @endif
              <p class="grey orange"><span class="orange">Thanh toán hàng tháng</span></p>
            </div>
          </a>
        </article>
      </div>
    @endforeach
  @else
    <div class="content">

      <div class="xinf">
        <div class="mydiv">
          <img src="/finances-cn/home/imgs/p_01.png" alt="">
        </div>
      </div>
      <div class="atxt">
        Không cần hoàn trả<br>
        Bạn chưa gửi bất kỳ đơn xin vay nào
      </div>
      <section class="bbtn">
        <button onClick="toorder();" class="combtn" type="button">Để đăng ký một khoản vay</button>
      </section>
    </div>
  @endif
  <div class="bg-box jsb">
    <div class="ac">
      <div class="ys-fe463c">
        Số tiền đã vay:
      </div>
      <div class="" style="padding-left: 5px">
        {{vnd_format($totalMoneyLoan)}}
      </div>
    </div>
    <div>
      >
    </div>

  </div>

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

  function bank_name() {
    var bank_name = document.getElementById("bank_name");
    bank_name.select(); // 选择对象
    document.execCommand("copy"); // 执行浏览器复制命令
  }

  function account() {
    var account = document.getElementById("account");
    account.select(); // 选择对象
    document.execCommand("copy"); // 执行浏览器复制命令
  }

  function sk_name() {
    var sk_name = document.getElementById("sk_name");
    sk_name.select(); // 选择对象
    document.execCommand("copy"); // 执行浏览器复制命令
  }

</script>
</body>

</html>
