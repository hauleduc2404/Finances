@extends('finances.layouts.master')
@push('styles')
    <link rel="stylesheet" href="/finances-cn/home/css/pages/user.css">
@endpush

@section('content')
<div class="mui-content" style="margin-top: -1px;">

  <div class="maotop">
      <div class="hedpic">
          <a href="index.php@m=Order&amp;a=bills.html">
              <img src="/finances-cn/home/imgs/bg-info.jpg" alt="" style="height:220px; ">
          </a>

          <a href="index.php@m=Order&amp;a=bills.html">
              <img src="/finances-cn/home/imgs/jb.png" alt=""
                  style="height:220px;position: absolute;
margin-top: -125px;">
          </a>

      </div>
  </div>
  <div class="rela">


      <!-- group1 -->
      <section class="allgrp mt10">
          <article class="cominfo" style="margin-top:170px;">
              <div class="container">
                  <div class="inpifo">
                      <a href="{{route('finances.my-info')}}">
                          <div class="input-group">
                              <div class="cf kuren">
                                  <div class="fl kuai hsma">
                                      <!--<img src="//finances-cn/home/imgs/wdzl.png" alt="">-->
                                      <img src="/finances-cn/home/imgs/ic_Thôngtincủatôi.png" alt="">
                                  </div>
                                  <div class="fl mname">
                                      <p>Thông tin của tôi</p>
                                  </div>
                                  <div class="fr rarr">
                                      <span class="seltarr2"></span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  <!-- 右箭头 -->
                  <!-- 右箭头 -->
                  <div class="inpifo">
                      <a href="{{route('finances.my-loan')}}">
                          <div class="input-group">
                              <div class="cf kuren">
                                  <div class="fl hsma kuai">
                                      <!--<img src="//finances-cn/home/imgs/dk.png" alt="">-->
                                      <img src="/finances-cn/home/imgs/ic_Khoảnvaycủatôi.png" alt="">
                                  </div>
                                  <div class="fl mname">
                                      <p>Khoản vay của tôi</p>
                                  </div>
                                  <div class="fr rarr">
                                      <span class="seltarr2"></span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>

                  <!-- 右箭头 -->
                  <!-- 右箭头 -->
                  <div class="inpifo">
                      <a href="{{route('finances.my-pay')}}">
                          <div class="input-group">
                              <div class="cf kuren">
                                  <div class="fl hsma kuai">
                                      <!--<img src="//finances-cn/home/imgs/wdhk.png" alt="">-->
                                      <img src="/finances-cn/home/imgs/ic_Trảnợcủatôi.png" alt="">
                                  </div>
                                  <div class="fl mname">
                                      <p>Trả nợ của tôi</p>
                                  </div>
                                  <div class="fr rarr">
                                      <span class="seltarr2"></span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="inpifo">
                      <a target="_blank" href="{{$supportLink}}">
                          <div class="input-group">
                              <div class="cf kuren">
                                  <div class="fl hsma kuai">
                                      <!--<img src="//finances-cn/home/imgs/kefu.png" alt="">-->
                                      <img src="/finances-cn/home/imgs/ic_CSKH.png" alt="">
                                  </div>
                                  <div class="fl mname">
                                      <p>CSKH</p>
                                  </div>
                                  <div class="fr rarr">
                                      <span class="seltarr2"></span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </article>
      </section>
      <!-- group1 end -->
{{--    <section class="allgrp mart50">--}}
{{--      <article class="cominfo">--}}
{{--        <div class="container">--}}
{{--          <!-- 右箭头 -->--}}
{{--          <div class="inpifo">--}}
{{--            <a href="#">--}}
{{--              <div class="input-group">--}}
{{--                <div class="cf kuren">--}}
{{--                  <div class="fl hsma kuai">--}}
{{--                    <img src="/finances-cn/home/imgs/ic_Đổimậtkhẩu.png" alt="">--}}
{{--                  </div>--}}
{{--                  <div class="fl mname">--}}
{{--                    <p>Đổi mật khẩu&nbsp;</p>--}}
{{--                  </div>--}}
{{--                  <div class="fr rarr">--}}
{{--                    <span class="seltarr2"></span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </a>--}}
{{--          </div>--}}
{{--          <!-- 右箭头 -->--}}
{{--        </div>--}}
{{--      </article>--}}
{{--    </section>--}}
{{--    <article class="cominfo logout-btn">--}}
{{--      <div class="container">--}}
{{--        <!-- 右箭头 -->--}}
{{--        <div class="inpifo">--}}
{{--          <a href="#">--}}
{{--            <div class="input-group">--}}
{{--              <div class="cf kuren">--}}
{{--                <!--<div class="fl hsma kuai">-->--}}
{{--                <!--    <img src="/finances-cn/home/imgs/tcdl.png" alt="">-->--}}
{{--                <!--</div>-->--}}
{{--                <div class="logout">--}}
{{--                  đăng xuất--}}
{{--                </div>--}}
{{--                <!--<div class="fr rarr">-->--}}
{{--                <!--    <span class="seltarr2"></span>-->--}}
{{--                <!--</div> -->--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </a>--}}
{{--        </div>--}}
{{--        <!-- 右箭头 -->--}}
{{--      </div>--}}
{{--    </article>--}}
  </div>

</div>


<script src="/finances-cn/home/js/jquery.js"></script>
<script src="/finances-cn/home/js/fontsizeset.js"></script>
<script src="/finances-cn/home/js/fukuang.js"></script>

<script>
  var h = $('#deowin').height();
  var t = -h / 2 + "px";
  $('#deowin').css('marginTop', t);

  function logout() {
      $("#deowin").show();
      $('#mask').show();
  }
  $('.bottom-bar a').click(function() {
      $('.bottom-bar a').removeClass('cur');
      $('.bottom-bar a span').removeClass('cur');
      $(this).addClass('cur');
      $(this).find('span').eq(0).addClass('cur');
  });
  $("#lgbtn").click(function() {
      window.location.href = '/index.php?m=User&a=logout';
  });
  $('#winbtn').click(function() {
      $('#deowin').hide();
      $('#mask').hide();
  });
  layui.use('carousel', function() {
      var carousel = layui.carousel;
      //建造实例
      carousel.render({
          elem: '.layui-carousel',
          width: '100%' //设置容器宽度
              ,
          height: '11rem',
          arrow: 'always' //始终显示箭头
              ,
          anim: 'default' //切换动画方式
              ,
          indicator: 'none' //指示器容器
      });
  });
</script>
@endsection
