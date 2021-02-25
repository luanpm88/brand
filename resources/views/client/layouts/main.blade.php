<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Brand</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('client/assets/js/app.js') }}" defer></script>

    <!-- Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">

    <!-- Popup -->
    <link href="{{ asset('client/css/popup.css') }}" rel="stylesheet">
    <script src="{{ asset('client/js/popup.js') }}"></script> 

    <!-- DataList -->
    <link href="{{ asset('client/css/datalist.css') }}" rel="stylesheet">
    <script src="{{ asset('client/js/datalist.js') }}"></script> 

    <link href="{{ asset('client/css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('client/js/main.js') }}"></script> 

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ url('/client/css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 d-flex align-items-center" href="#">
      <svg style="height: 24px;
      width: 33px;
      float: left;
      margin-right: 0;" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 57.09 45.74"><title>v-systems-vsys-logo</title><path d="M0.51,0H16.83a0.51,0.51,0,0,1,.25.06,0.5,0.5,0,0,1,.18.17h0L37.13,32a0.49,0.49,0,0,1,0,.54h0L29,45.51h0a0.5,0.5,0,0,1-.18.17,0.51,0.51,0,0,1-.49,0,0.5,0.5,0,0,1-.18-0.17h0L0.08,0.77A0.5,0.5,0,0,1,0,.52H0A0.5,0.5,0,0,1,.06.26,0.5,0.5,0,0,1,.25.07h0A0.5,0.5,0,0,1,.51,0h0ZM34.72,0H56.58a0.5,0.5,0,0,1,.26.07h0A0.5,0.5,0,0,1,57,.26a0.51,0.51,0,0,1,.06.26h0A0.5,0.5,0,0,1,57,.77L46.08,18.21h0a0.5,0.5,0,0,1-.18.17,0.51,0.51,0,0,1-.49,0,0.5,0.5,0,0,1-.18-0.17h0L34.3,0.77A0.5,0.5,0,0,1,34.22.52h0A0.5,0.5,0,0,1,34.28.26,0.5,0.5,0,0,1,34.47.07h0A0.5,0.5,0,0,1,34.72,0h0Z" style="fill:#ff8836;fill-rule:evenodd"/></svg>
      
      <span class="me-auto" style="font-family: 'Montserrat Alternates';
      font-size: 22px;
      line-height: 30px;
      background: transparent;
      float: left;
      display: inline-block;
      margin-block-end: -10px;color:#c8e3ff">brand</span>

      <span style="font-size: 22px;line-height:10px;"" class="material-icons-outlined menu-toggle-button d-none d-sm-none d-md-block">
        menu
      </span>
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 ms-1" type="text" placeholder="Gõ từ khóa tìm kiếm" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="me-2" style="border-radius: 100%;
              width: 35px;
              height: 35px;
              border: solid 1px rgba(255,255,255,0.6);" src="{{ Auth::user()->google_avatar }}" />
            <span class="d-flex align-items-center">
              <span>{{ Auth::user()->name }}</span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-start dropdown-menu-md-end position-absolute" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><span data-feather="user" class="me-1"></span> Tài khoản</a></li>
            <li><a class="dropdown-item" href="#"><span data-feather="key" class="me-1"></span> Đổi mật khẩu</a></li>
            <li><a class="dropdown-item" href="#"><span data-feather="bell" class="me-1"></span> Thông báo</a></li>
            <li><a class="dropdown-item" href="#"><span data-feather="credit-card" class="me-1"></span> Thanh toán</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item logout" href="javascript:;">
                  <span data-feather="power" class="me-1"></span> Đăng xuất
                </a>
              </form>
              <script>
                window.addEventListener("DOMContentLoaded", function(){
                  $('.logout').on('mouseup', function(e) { $(this).closest('form').submit(); });
                });
              </script>
            </li>
          </ul>
        </li>
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Đơn hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Sản phẩm
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Khách hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Báo cáo & Thống kê
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Kết nối TMĐT
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Báo cáo</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Bán hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Doanh thu
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Dịch vụ
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Tổng hợp
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
        </main>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
		<script src="{{ url('/client/js/dashboard.js') }}"></script>
  </body>
</html>