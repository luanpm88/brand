<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Brand</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('client/assets/js/app.js') }}" defer></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Popup -->
    <script src="{{ asset('client/js/popup.js') }}"></script> 

    <!-- Box -->
    <script src="{{ asset('client/js/box.js') }}"></script> 

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

    <!-- Dialog -->
    <script src="{{ asset('client/js/dialog.js') }}"></script> 

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

    <script>
      var COMING_SOON_URL = '{{ action('Client\HomeController@comingSoon') }}';
    </script>
    
    <!-- Custom styles for this template -->
    <link href="{{ url('/client/css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 d-flex align-items-center" href="{{ url('/') }}">
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
      <ul class="navbar-nav px-3 flex-row">
        <li class="nav-item">
          <a class="nav-link active p-3 nav-link-icon notification-bell text-nowarp d-flex align-items-center coming_soon" aria-current="page" href="#">
            <span data-feather="credit-card" class="me-0"></span>
            <span class="badge bg-secondary shadow d-block money">2,000,000 ₫</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active p-3 nav-link-icon shopping-cart coming_soon" aria-current="page" href="#">
            <span data-feather="bell" class="me-0"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active p-3 nav-link-icon shopping-cart coming_soon" aria-current="page" href="#">
            <span data-feather="shopping-cart" class="me-0"></span>
            <span class="badge bg-danger shadow">2</span>
          </a>
        </li>
        <li class="nav-item me-2 ms-2">
          <a class="nav-link active py-3 pe-2 text-muted" aria-current="page" href="#">
            |
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="me-2" style="border-radius: 100%;
              width: 35px;
              height: 35px;
              border: solid 1px rgba(255,255,255,0.6);" src="{{ action('Client\UserController@picture', Auth::user()->id) }}" />
            <span class="d-flex align-items-center">
              <span>{{ Auth::user()->getName() }}</span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-start dropdown-menu-md-end position-absolute" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="{{ action('Client\AccountController@profile') }}">
                <span data-feather="user" class="me-1"></span> Tài khoản
              </a>
            </li>
            <li>
              <a class="dropdown-item coming_soon" href="#">
                <span data-feather="key" class="me-1"></span> Đổi mật khẩu
              </a>
            </li>
            <li><a class="dropdown-item coming_soon" href="#"><span data-feather="bell" class="me-1"></span> Thông báo</a></li>
            <li><a class="dropdown-item coming_soon" href="#"><span data-feather="credit-card" class="me-1"></span> Thanh toán</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item logout" href="javascript:;">
                  <span data-feather="power" class="me-1"></span> Đăng xuất
                </a>
              </form>
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
                <a class="nav-link" href="{{ action('Client\HomeController@dashboard') }}" data-name="HomeController@dashboard" aria-current="page">
                  <span data-feather="home"></span>
                  Tổng quan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="settings"></span>
                  Cấu hình chung
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ action('Client\DomainController@index') }}">
                  <span data-feather="at-sign"></span>
                  Tên miền & Lưu trữ
                </a>
              </li>              
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="users"></span>
                  Khách hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ action('Client\WebsiteController@index') }}">
                  <span data-feather="layout"></span>
                  Website của bạn
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Bán hàng</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" data-name="ProductController@index" href="{{ action('Client\ProductController@index') }}">
                  <span data-feather="package"></span>
                  Sản phẩm
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="file-text"></span>
                  Đơn hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ action('Client\MessageController@index') }}">
                  <svg class="me-1" style="width:17px;height:17px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 800 800">
                    <radialGradient id="Gradient" cx="101.925" cy="809.0079" r="1.0896" gradientTransform="matrix(800 0 0 -799.9985 -81386 648000.75)" gradientUnits="userSpaceOnUse">
                     <stop offset="0" style="stop-color:#0099FF"/>
                     <stop offset="0.6098" style="stop-color:#A033FF"/>
                     <stop offset="0.9348" style="stop-color:#FF5280"/>
                     <stop offset="1" style="stop-color:#FF7061"/>
                    </radialGradient>
                    <path fill="url(#Gradient)" d="M400,0C174.7,0,0,165.1,0,388c0,116.6,47.8,217.4,125.6,287c6.5,5.8,10.5,14,10.7,22.8l2.2,71.2  c0.7,22.7,24.1,37.5,44.9,28.3l79.4-35c6.7-3,14.3-3.5,21.4-1.6c36.5,10,75.3,15.4,115.8,15.4c225.3,0,400-165.1,400-388  S625.3,0,400,0z"/>
                    <path fill="#FFFFFF" d="M159.8,501.5l117.5-186.4c18.7-29.7,58.7-37,86.8-16l93.5,70.1c8.6,6.4,20.4,6.4,28.9-0.1    l126.2-95.8c16.8-12.8,38.8,7.4,27.6,25.3L522.7,484.9c-18.7,29.7-58.7,37-86.8,16l-93.5-70.1c-8.6-6.4-20.4-6.4-28.9,0.1    l-126.2,95.8C170.5,539.5,148.5,519.4,159.8,501.5z"/>
                   </svg>
                  Messenger
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ action('Client\ProductController@index') }}">
                  <span data-feather="shopping-bag"></span>
                  Kết nối sàn TMĐT
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Tài khoản</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{ action('Client\AccountController@profile') }}">
                  <span data-feather="user"></span>
                  Tài khoản & Bảo mật
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="key"></span>
                  API Key
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="dollar-sign"></span>
                  Ví điện tử
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
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="file-text"></span>
                  Bán hàng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link coming_soon" href="#">
                  <span data-feather="file-text"></span>
                  Lịch sử giao dịch
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <script>
          ready(function() {
            $('[data-name="{{ App\Helpers\General::controllerAction() }}"]').addClass('active');
          });
        </script>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5 pb-5 pt-3">
          @include('client.commons.flash')

          @yield('content')
        </main>
      </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <script>
      function ready(method) {
        window.addEventListener("DOMContentLoaded", function(){
          method();
        });

        initJs();
      };
      
      ready(function() {
        $('.logout').on('mouseup', function(e) { $(this).closest('form').submit(); });
      });
    </script>
  </body>
</html>