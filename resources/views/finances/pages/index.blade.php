@extends('finances.layouts.master')

@push('styles')
  <link rel="stylesheet" href="/finances-cn/home/css/pages/index.css">
@endpush

@push('scripts')
  <script>

  </script>
@endpush

@section('content')
    <div class="main-color" style="font-size:19px;text-align:center;line-height:61px;
                    ">Thời hạn vay
    </div>
    <div class="im-swiper layui-carousel">
        <div carousel-item>

            <div><img src="/finances-cn/home/imgs/sliders/a.jpg" style="height:234px;max-width: 100%; width: 100%;" /></div>
            <div><img src="/finances-cn/home/imgs/sliders/b.jpg" style="height:234px;max-width: 100%; width: 100%;" /></div>
            <div><img src="/finances-cn/home/imgs/sliders/c.jpg" style="height:234px;max-width: 100%; width: 100%;" /></div>
            <div><img src="/finances-cn/home/imgs/sliders/d.jpg" style="height:234px;max-width: 100%; width: 100%;" /></div>
        </div>
    </div>
    <div class="index-bg"></div>
    <section class="index-main">
        <!--<div class="im-title">Thời hạn vay</div>-->
        <div class="im-title"></div>
        <div class="im-tab">
            <div class="im-t-num divFlex loan-range" id="im-t-num">
{{--              @foreach($loan_range as $key => $range)--}}
{{--                <div id="{{$key}}m" class="list timeBtn act"><span id="timeSpanVal_{{$key}}">{{$range}}</span><p>Tháng</p></div>--}}
{{--              @endforeach--}}
            </div>
            <div class="im-t-body">
                <div class="imtb-block1">
                    <div class="imtn-b1-title">
                        Số tiền vay </div>
                    <div class="imtn-b1-money">
                        <span id="money_str"></span>
                    </div>
                    <div class="imtn-b1-btn">
                        <div>
                            <div id="subtract" class="subtract new-btn" style="text-align:center;"></div>
                            <div id="tap1" class="layout-slider">
                                <input id="SliderSingle11" type="slider" name="money" value="0;40000000;"
                                    style="display: none">
                            </div>
                            <div id="plus" class="plus new-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="imtb-block2">
                    <span>Trả nợ định kỳ</span>
                    <!--<i><strong id="yuegong"></strong>vnđ &nbsp;&nbsp;(Bao gồm cả lãi suất hàng ngày<strong  id="rixi"></strong>% <strong id="fuwufei"></strong>vnđ)</i>-->
                    <i><strong id="yuegong"></strong> - Bao gồm cả lãi suất hàng tháng</i>
                    <p><i>Lãi suất hàng tháng sẽ giảm dần theo số tiền gốc</i></p>
                </div>
            </div>
        </div>
{{--        <div class="im-choose active" id="im-choose">--}}
{{--            <span></span>--}}
{{--            <i>Đồng ý</i>--}}
{{--        </div>--}}
        <div class="im-btn" onclick="subForm()">
            Nộp đơn ngay</div>
        <div class="im-note divFlex">
            <img src="/finances-cn/home/imgs/img/index/note.png" alt="" />
            <div>
                <marquee scrollamount="2" scrolldelay="50" direction="up"
                    style=" font-size: 14px;  height: 73px; z-index:999;">
                    <p class="text-color">0953****5609 Khoản vay giải ngân thành công <span>77 Triệu</span></p>
                    <p class="text-color">0837****4486 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                    <p class="text-color">0835****5853 Khoản vay giải ngân thành công <span>77 Triệu</span></p>
                    <p class="text-color">0838****3044 Khoản vay giải ngân thành công <span>550 Triệu</span></p>
                    <p class="text-color">0956****4730 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                    <p class="text-color">0912****7875 Khoản vay giải ngân thành công <span>77 Triệu</span></p>
                    <p class="text-color">0837****3373 Khoản vay giải ngân thành công <span>770 Triệu</span></p>
                    <p class="text-color">0916****4135 Khoản vay giải ngân thành công <span>330 Triệu</span></p>
                    <p class="text-color">0915****9397 Khoản vay giải ngân thành công <span>99 Triệu</span></p>
                    <p class="text-color">0958****7054 Khoản vay giải ngân thành công <span>88 Triệu</span></p>
                    <p class="text-color">0834****9186 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                    <p class="text-color">0839****0368 Khoản vay giải ngân thành công <span>66 Triệu</span></p>
                    <p class="text-color">0913****8543 Khoản vay giải ngân thành công <span>44 Triệu</span></p>
                    <p class="text-color">0955****9304 Khoản vay giải ngân thành công <span>770 Triệu</span></p>
                    <p class="text-color">0955****6514 Khoản vay giải ngân thành công <span>88 Triệu</span></p>
                    <p class="text-color">0958****5397 Khoản vay giải ngân thành công <span>77 Triệu</span></p>
                    <p class="text-color">0912****3252 Khoản vay giải ngân thành công <span>99 Triệu</span></p>
                    <p class="text-color">0836****6018 Khoản vay giải ngân thành công <span>99 Triệu</span></p>
                    <p class="text-color">0956****5363 Khoản vay giải ngân thành công <span>330 Triệu</span></p>
                    <p class="text-color">0954****7887 Khoản vay giải ngân thành công <span>550 Triệu</span></p>
                    <p class="text-color">0835****2206 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                    <p class="text-color">0956****5379 Khoản vay giải ngân thành công <span>44 Triệu</span></p>
                    <p class="text-color">0838****8832 Khoản vay giải ngân thành công <span>330 Triệu</span></p>
                    <p class="text-color">0956****1655 Khoản vay giải ngân thành công <span>220 Triệu</span></p>
                    <p class="text-color">0957****9338 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                    <p class="text-color">0951****6857 Khoản vay giải ngân thành công <span>770 Triệu</span></p>
                    <p class="text-color">0837****5855 Khoản vay giải ngân thành công <span>99 Triệu</span></p>
                    <p class="text-color">0838****3695 Khoản vay giải ngân thành công <span>77 Triệu</span></p>
                    <p class="text-color">0955****3901 Khoản vay giải ngân thành công <span>66 Triệu</span></p>
                    <p class="text-color">0912****5501 Khoản vay giải ngân thành công <span>110 Triệu</span></p>
                </marquee>
            </div>
        </div>

        <div class="im-nav divFlex">
            <img src="/finances-cn/home/imgs/img/index/index-nav1.png" alt="" />
            <img src="/finances-cn/home/imgs/img/index/index-nav2.png" alt="" />
            <img src="/finances-cn/home/imgs/img/index/index-nav3.png" alt="" />
        </div>
    </section>
    <!-- 加减提示 -->
    <div class="plusmore">Không được lớn hơn số tiền tối đa</div>
    <div class="subtractmore">Không thể giảm số tiền vay tối thiểu</div>
    <!--弹窗-->
    <div class="emask" id="mask3" style="display: none;"></div>
    <div class="deowin2" style="display:none;" id="deowin31">
        <div class="deocon2">
            <div class="divpad2" style="text-align:center;height:110px">
                <p class='tex' style="color: #4c4c4c;line-height: 30px;font-size:16px;"></p>
            </div>
            <div class="wobtn">
                <!-- 一个按钮用这个结构 -->
                <a id="winbtn3" href="javascript:;">Xác nhận</a>
            </div>
        </div>
    </div>
    <div style="display:none;">
        {{-- <form action="http://dk.cscaiwei.cn/index.php?m=Order&amp;a=daikuan" method="post" id="orderform"> --}}
        <form method="POST" id="orderform" action="{{route('finances.loan.confirm')}}">
            {{csrf_field()}}
            <input type="hidden" name="money" value="" id="order_money" />
            <input type="hidden" name="month" value="" id="order_month" />
        </form>
    </div>
    <script>
        // 初始化数据
        var num = 0;
        var MINMONEY = {{$setting->min_loan}};
        var MAXMONEY = {{$setting->max_loan}};
        var MONEY_ADJUST = {{$setting->limit_per_switch_loan}};
        var nowmoney = {};
        var feilv_value = "0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7";
        // var months = [3, 6, 12, 18, 24, 36, 48];
        var months = [{{$setting->loan_month}}];
        var definamonth = 3;
          var feilv = feilv_value.split(',');
        var STEP = 100;
        var user_id = '0';
        var SliderSingle1 = jQuery("#SliderSingle11");
        var LoginUrl = "/index.php?m=User&a=login";
        var PublicUrl = "/Public/";

        // tab选项初始化
        var tmp, html = '';
        for (var i = 0; i < months.length; i++) {
            tmp = months[i];
            html = '<div id="' + i + 'm" class="list timeBtn"><span id="timeSpanVal_' + i + '">' + tmp +
                '</span><p>Tháng</p></div>'
            $("#im-t-num").append(html);
        }

        // 勾选协议
        // $("#im-choose").click(function() {
        //     if ($(this).hasClass("active")) {
        //         $(this).removeClass("active");
        //     } else {
        //         $(this).addClass("active");
        //     }
        // })
        $("#qbtn33").click(function() {
            var url = "";
            $('#deowin33 iframe').attr('src', url);
            setTimeout(function() {
                $('#deowin33').show();
                $('#mask3').show();
            }, 500);
        });
        $('#winbtn33').click(function() {
            $('#deowin33').hide();
            $('#mask3').hide();
            $('#deowin33 iframe').attr('src', '');
        });

        // 轮播图
        layui.use('carousel', function() {
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
                elem: '.layui-carousel',
                width: '100%' //设置容器宽度
                    ,
                height: '12.3rem',
                arrow: 'none' //始终显示箭头
                    ,
                anim: 'default' //切换动画方式
                    ,
                indicator: 'inside' //指示器容器
            });
        });

        // 立即申请
        function subForm() {
            // if (user_id == '0') {
            //     window.location.href = LoginUrl;
            //     return false;
            // }
            // if (!$('#im-choose').hasClass('active')) {
            //     $(".tex").html('Vui lòng đồng ý và kiểm tra thỏa thuận');
            //     $("#deowin31").show();
            //     $('#mask3').show();
            //     return false;
            // }
            //判断失败订单是否超过预期
          $("#orderform").submit();
        }


        SliderSingle1.slider({
          from: MINMONEY,
          to: MAXMONEY,
          value: 30000000,
          step: 10000000,
          // round: 0,
          // dimension: '',
          skin: "round",
          onstatechange: function (a) {
            // console.log(a);
            var t = a.split(';');

            console.log(t)
            t[1] = parseInt(t[1]).toFixed();
            // let reg = /\d{1,3}(?=(\d{3})+$)/g;
            // t[1] = t[1].replace(reg,'$&.')
            $('#money_str').html(convertHumanMoney(t[1]));
            // $('#money_str12').html('đ ' + t[1]);
            getYuegong(t[1]);
            console.log(t[1],"222")
            reset();
          },
          callback: function (a) {
            if (num % 2 == 0) {
              $(".jslider-pointer").css({
                animation: 'myfirst .5s',
                '-webkit-animation': 'myfirst .5s'
              });
            } else {
              $(".jslider-pointer").css({
                animation: 'mysecond .5s',
                '-webkit-animation': 'mysecond .5s'
              })
            }
            num++
          }
        });

        function getYuegong (str){
          xianshi();
        }
        function xianshi () {
          $.each($(".timeBtn"), function(index, val) {
            var spanval = $("#timeSpanVal_"+index).html();
            if(spanval == definamonth){
              $('#'+index+'m').addClass('act').siblings('.timeBtn').removeClass('act');
            }
          });
        }

        function reset() {
          var money = $('#money_str').html();
          console.log(money)
          money = money.replaceAll('.','')
          money = money.replaceAll('đ','')
          money = new Number(money).toFixed(0);
          var month = parseInt($('.timeBtn.act span').html());
          var fuwufei = money * feilv[month - 1] / 100;
          fuwufei = fuwufei.toFixed(0);
          $('#fuwufei').html(fuwufei);
          var tmpval = feilv[month - 1] / 30;
          tmpval = new Number(tmpval).toFixed(0);
          $("#rixi").html(tmpval);
          var benjin = money / month;
          benjin = benjin.toFixed(0);
          $('#benjin').html('¥' + benjin);
          var originMoney = parseFloat(money);
          var firstMoneyMustPaid = originMoney/month;
          var yuegong = (firstMoneyMustPaid + (money * {{$setting->interest_rate}}) / 12)
          // var yuegong = new Number(benjin) + new Number(fuwufei);
          console.log("month", month)
          console.log("money", money)
          console.log("yuegong", yuegong)
          yuegong = yuegong.toFixed(0);
          $('#yuegong').html(convertHumanMoney(yuegong));
          $('#total').html('¥' + yuegong);
          nowmoney['money'] = money;
          $("#order_money").val(money);
          nowmoney['month'] = month;
          $("#order_month").val(month);
          nowmoney['fuwufei'] = fuwufei;
          nowmoney['benjin'] = benjin;
          nowmoney['yuegong'] = yuegong;
          nowmoney['total'] = parseFloat(benjin) + parseFloat(fuwufei);
          console.log(money,nowmoney)
        }

        function changeslider(isPlus) {
          if (isPlus) {
            //加
            scale = parseInt($('.jslider-pointer-to').css('left')) + STEP;
            scale = (scale >= 20000000) ? '1000' : parseInt(scale);
            scale= scale+'%'
            $('.jslider div:nth-child(3)').css('left', scale);
            $('#tap1 i:nth-child(3)').css('width', scale);
            SliderSingle1.slider('value', MINMONEY, (parseInt(nowmoney.money) + MONEY_ADJUST))
            reset();
          } else {
            //减
            scale = parseInt($('.jslider-pointer-to').css('left')) - STEP;
            scale = (scale <= 0) ? '0' : parseInt(scale);
            scale= scale+'%'
            $('.jslider div:nth-child(3)').css('left', scale);
            $('#tap1 i:nth-child(3)').css('width', scale);
            SliderSingle1.slider('value', MINMONEY, (parseInt(nowmoney.money) - MONEY_ADJUST))
            reset()
          }
        }

        function convertHumanMoney(rawMoneyDisplay){
          if (typeof rawMoneyDisplay === "string") {
            rawMoneyDisplay = parseInt(rawMoneyDisplay);
          }
          if (isNaN(rawMoneyDisplay)) {
            return '';
          }
          return rawMoneyDisplay.toLocaleString('en-US').replaceAll(',', '.') + 'đ';
        }

    </script>
    <script src="/finances-cn/home/appjs/Index.js"></script>
@endsection
