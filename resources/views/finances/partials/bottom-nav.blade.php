<nav class="mui-bar mui-bar-tab bottom-bar">

  <a target="_blank" class="mui-tab-item" href="{{$supportLink}}">
      <p style="margin-bottom:5px;">
          <img src="/finances-cn/home/imgs/img/common/nav1.png" style="width: 22px;height: 22px;">
      </p>
      <span class="mui-tab-label">CSKH</span>
  </a>
  <a class="mui-tab-item cur" href="{{route('finances.profile')}}">
      <img src="/finances-cn/home/svg/icons8-home.svg" class="main-bg-color"
          style="box-sizing: content-box;
              padding: 15px;
              margin-top: -45px;
              border: 10px solid #F6F6F6;
              border-radius: 50%;">
      <!--<span class="mui-tab-label">Trang chủ</span>-->
  </a>
  <!--a class="mui-tab-item" href="/index.php?m=User&a=complaint"-->
  <a class="mui-tab-item" href="{{route('finances.info')}}">
      <p style="margin-bottom:5px;">
          <img src="/finances-cn/home/imgs/img/common/nav3.png" style="width: 20px;height: 22px;">
      </p>
      <span class="mui-tab-label">Tôi</span>
  </a>
</nav>
