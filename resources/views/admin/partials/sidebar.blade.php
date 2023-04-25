<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Quản trị trang web</span>
  </a>
  
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">Quản trị tài chính</li>
        <li class="nav-item">
          <a href="{{route('dashboard.kyc.list')}}" class="nav-link {{request()->is('admincp/finances/kyc') ? 'active': ''}}">
            <i class="nav-icon far fa-image"></i>
            <p>
              Danh sách hồ sơ
            </p>
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a href="{{route('dashboard.loan.list')}}" class="nav-link {{request()->is('admincp/finances/loan') ? 'active': ''}}">
            <i class="nav-icon far fa-image"></i>
            <p>
              Danh sách vay
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('dashboard.payer.list')}}" class="nav-link {{request()->is('admincp/finances/payer') ? 'active': ''}}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Danh sách trả nợ
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('dashboard.setting.list')}}" class="nav-link {{request()->is('admincp/finances/settings') ? 'active': ''}}">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Thiết lập
            </p>
          </a>
        </li>
        <li class="nav-header">Quản trị CMS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Landing Page
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('dashboard.cms.landing.domain-name')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tên website</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.intro')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intro</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dịch vụ</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.apply-loan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng ký vay</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.loan-adviser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cố vấn cho vay</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('dashboard.cms.landing.about-us')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Giới thiệu công ty</p>
              </a>
          </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
