@extends('finances.layouts.master')
@push('styles')
  <link rel="stylesheet" href="/finances-cn/home/css/pages/user.css">
  <link rel="stylesheet" href="/finances-cn/home/css/pages/custom.css">
  <link rel="stylesheet" href="/finances-cn/home/css/pages/my-info.css">
  <link rel="stylesheet" href="/finances-cn/home/css/fontawesome.min.css">
@endpush

@section('content')
  <header class="mui-bar mui-bar-nav hnav">
    <a href="{{route('finances.profile')}}"
       class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title text-upper text-bold">Thông tin của tôi</h1>
  </header>
  <!-- header end-->
  <div class="mui-content">
    <section class="allgrp">
      <!-- 头部提示 -->
      <article class="arhead2">
      </article>
      <!-- 头部提示1 -->
      <!-- 上 -->
      <article class="cominfo">
        <div class="container">
          <!-- 右箭头 -->
          <!--<a href="/index.php?m=Info&a=baseinfo" class="wrapline" style="background:url(/Public/home/imgs/baseinfo.png) no-repeat;background-size:100% 100%"> -->
          <a href="{{route('finances.kyc.identity')}}" class="wrapline">
            <div class="inpifo">
              <div class="input-group">
                <div class="fdc">
                  <div class="fl sma sma2">
                    <img src="/finances-cn/home/imgs/ic_Thôngtincủatôi.png" alt="">
                  </div>
                  <div class="fl" style="height:84px;">
                    <p class="datatip text-color">Thông tin cá nhân</p>
                    <p class="f1 cole">* Hãy cho chúng tôi biết thông tin cơ bản của bạn</p>
                  </div>
                  <div class="jend">
                    <div class="selar moren checkInfo">
                      <p class="org col9">Cung cấp thông tin cá nhân</p> <span
                        class="seltarr2"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- 右箭头 -->
          <!-- 右箭头 -->
          <!--<a href="/index.php?m=Info&a=unitinfo" class="wrapline" id="baseInfo1"  style="background:url(/Public/home/imgs/unitinfo.png) no-repeat;background-size:100% 100%"> -->
          <a href="{{route('finances.kyc.information')}}" class="wrapline" id="baseInfo1">
            <div class="inpifo">
              <div class="input-group">
                <div class="fdc">
                  <div class="fl sma sma2">
                    <img src="/finances-cn/home/imgs/ic_gerendangan.png" alt="">
                  </div>
                  <div class="fl" style="height:84px;">
                    <p class="datatip text-color">Thông tin hồ sơ</p>
                    <p class="f1 cole">* Hãy cho chúng tôi biết thông tin hồ sơ của bạn</p>
                  </div>
                  <div class="jend">
                    <div class="selar moren checkInfo">
                      <p class="org col9">Cung cấp thông tin cá nhân</p> <span
                        class="seltarr2"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- 右箭头 -->
          <!-- 右箭头 -->
          <!--<a id='yinHangka1'  href="/index.php?m=Info&a=bankinfo" class="wrapline"    style="background:url(/Public/home/imgs/bankinfo.png) no-repeat;background-size:100% 100%">-->
          <a id="yinHangka1" href="{{route('finances.kyc.bank')}}" class="wrapline">
            <div class="inpifo">
              <div class="input-group">
                <div class="fdc">
                  <div class="fl sma sma2">
                    <img src="/finances-cn/home/imgs/xinyongka.png" alt="">
                  </div>
                  <div class="fl" style="height:84px;">
                    <p class="datatip text-color">Nhập thẻ ngân hàng</p>
                    <p class="f1 cole">* Chúng tôi sẽ chuyển tiền vào thẻ</p>
                  </div>
                  <div class="jend">
                    <div class="selar moren checkInfo">
                      <p class="org col9">Cung cấp thông tin cá nhân</p> <span
                        class="seltarr2"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!--<a id='zhima1'  href="/index.php?m=User&a=qm" class="wrapline"   style="background:#FCC92E;" >-->
          <a id="zhima1" href="{{route('finances.kyc.signature')}}" class="wrapline">
            <div class="inpifo">
              <div class="input-group">
                <div class="fdc">
                  <div class="fl sma sma2">
                    <!--<i style="    font-size: 30px;" class="fa   bell" aria-hidden="true"></i>-->
                    <img src="/finances-cn/home/imgs/qm.png" alt="">
                  </div>
                  <div class="fl" style="height:84px;">
                    <p class="datatip text-color">Chữ ký viết tay</p>
                    <p class="f14 cole">*Vui lòng ký trước khi gửi</p>
                  </div>

                </div>
              </div>
            </div>
          </a>
          <!-- 右箭头 -->
          <!-- 右箭头 -->
          <!--	<a id='yinHangka1'  href="/index.php?m=Info&a=phoneinfo" class="wrapline"  >
                <div class="inpifo">
                                <div class="input-group">
                                        <div class="fdc">
                                                <div class="fl sma sma2">
                                                <img src="/Public/home/imgs/g_12-2467ef1cf5.png" alt="">
                                            </div>
                                            <div class="fl" style="height:84px;">
                                                <p class="datatip">手机号认证</p>
                                                <p class="f14 col9">*认证您本人的手机号</p>
                                            </div>
                                            <div class="jend">
                                                    <div class="selar moren">
                                                                                                                                <span class="org">不完整</span>                                                                        <span class="seltarr2"></span>
                                                    </div>
                                        </div>
                                    </div>
                        </div>
                </div>
                </a>-->
          <!-- 右箭头 -->
        </div>
      </article>
      <article class="arhead2">
      </article>
      <article class="cominfo">
        <div class="container">
          <!-- 右箭头 -->
          <!--<a id='zhima1'  href="/index.php?m=Info&a=zhimastepone" class="wrapline">
        <div class="inpifo">
                        <div class="input-group">
                                <div class="fdc">
                                        <div class="fl sma sma2">
                                        <img src="/Public/home/imgs/g_10.png" alt="">
                                    </div>
                                    <div class="fl" style="height:84px;">
                                        <p class="datatip">芝麻信用</p>
                                        <p class="f14 col9">*测评您的信用资质</p>
                                    </div>
                                    <div class="jend">
                                            <div class="selar moren">
                                                                                                                <span class="col9">不完整</span>                                                                <span class="seltarr2"></span>
                                            </div>
                                </div>
                            </div>
                </div>
        </div>
        </a>-->
          <!-- 右箭头 -->

          <!-- 右箭头 -->
          <!--<a id='zhima1'  href="/index.php?m=Info&a=otherinfo" class="wrapline" style="background:url(/Public/home/imgs/otherinfo.png) no-repeat;background-size:100% 100%" >-->
          <!--<a id='zhima1'  href="/index.php?m=Info&a=otherinfo" class="wrapline">-->
          <!--    <div class="inpifo">-->
          <!--        <div class="input-group">-->
          <!--            <div class="fdc">-->
          <!--                <div class="fl sma sma2">-->
          <!--                    <img src="/Public/home/imgs/ic_danju.png" alt="">-->
          <!--                </div>-->
          <!--                <div class="fl" style="height:84px;">-->
          <!--                    <p class="datatip">Tải lên biên nhận và cam kết</p>-->
          <!--                    <p class="f14 cole">*Tải lên giấy biên nhận và giấy cam kết</p>-->
          <!--                </div>-->
          <!--                <div class="jend">-->
          <!--                    <div class="selar moren checkInfo">-->
          <!--                        -->
          <!--                            <span class="org col9">Cung cấp thông tin cá nhân</span>-->
          <!---->
          <!--                        <span class="seltarr2"></span>-->
          <!--                    </div>-->
          <!--                </div>-->
          <!--            </div>-->
          <!--        </div>-->
          <!--    </div>-->
          <!--</a>-->
          <!-- 右箭头 -->

          <!-- 右箭头 -->
          <!-- <a id='zhima1'  href="/index.php?m=Info&a=zhima" class="wrapline">
        <div class="inpifo">
                        <div class="input-group">
                                <div class="fdc">
                                        <div class="fl sma sma2">
                                        <img src="/Public/home/imgs/g_10.png" alt="">
                                    </div>
                                    <div class="fl" style="height:84px;">
                                        <p class="datatip">芝麻信用</p>
                                        <p class="f14 col9">*测评您的信用资质</p>
                                    </div>
                                    <div class="jend">
                                            <div class="selar moren">
                                                                                                                <span class="col9">不完整</span>                                                                <span class="seltarr2"></span>
                                            </div>
                                </div>
                            </div>
                </div>
        </div>
        </a> -->
          <!-- 右箭头 -->

          <!-- 右箭头 -->
          <!-- <a id='zhima1'  href="/index.php?m=Info&a=taobao" class="wrapline">
        <div class="inpifo">
                        <div class="input-group">
                                <div class="fdc">
                                        <div class="fl sma sma2">
                                        <img src="/Public/home/imgs/taobao.jpg" alt="">
                                    </div>
                                    <div class="fl" style="height:84px;">
                                        <p class="datatip">淘宝授权</p>
                                        <p class="f14 col9">*测评您的信用资质</p>
                                    </div>
                                    <div class="jend">
                                            <div class="selar moren">
                                                                                                                <span class="col9">未授权</span>                                                                <span class="seltarr2"></span>
                                            </div>
                                </div>
                            </div>
                </div>
        </div>
        </a> -->
          <!-- 右箭头 -->
        </div>
      </article>
      <!-- 下 -->
      <section class="msub" style="position: relative;display: none">
        <a href="#"
           class="mui-btn mui-btn-danger mui-button-pay main-bg-color text-upper text-bold">
          Vay ngay </a>
        <div style="display: none;position: absolute;" class="errdeo" id="messageBox">
        </div>
      </section>
    </section>
  </div>
  <!-- step -->
  <!--share-->
  <div id="shareit">
    <img class="arrow" src="/finances-cn/home/imgs/guide1.png">
  </div>
  <!--share-->
  <script src="/finances-cn/home/imgs/jquery.js.download"></script>
  <script>
    //分享朋友圈

    function showalert(msg) {
      $("#messageBox").html(msg);
      $("#messageBox").show();
    }

    function sharewechat() {
      $("#shareit").show();
    }

    $("#shareit").click(function () {
      $("#shareit").hide();
    });
  </script>
@endsection
