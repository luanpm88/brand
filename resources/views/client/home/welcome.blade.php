@extends('client.layouts.main')
@section('content')
    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2">
          {{-- <li class="breadcrumb-item"><a href="#"><span data-feather="package"></span></a></li> --}}
          <li class="breadcrumb-item active" aria-current="page">
            <span data-feather="shield"></span> Chào mừng thành viên
          </li>
        </ol>
      </nav>
      <h5></h5>
    </div>
    
    <div class="row">
      <div class="col-sm">
        <div class="text-center">
          <img style="margin:15px 0; width: 22rem" src="{{ url('image/welcome2.jpg') }}" class="" alt="...">
        </div>
        <p class="fs-4 display-5 text-center mx-md-5 mt-0 mb-2">Xin chào <strong>{{ Auth::user()->name }}</strong>,
        </p>
        <p class="fs-5 lh-base display-5 text-center mx-md-5 px-md-4 mb-5">
          Chào mừng bạn là thành viên mới tại BrandViet.com Hãy cùng kinh doanh với chúng tôi bằng cách
          <br>chọn 1 trong những dịch vụ phù hợp với bạn bên dưới để bắt đầu:
        </p>
      </div>
    </div>

    <div class="">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <img style="margin:7px 0" src="{{ url('image/website-banner2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <form class="new-domain-form" method="POST" action="{{ action('Client\HomeController@wizard') }}">
                @csrf

                <input type="hidden" name="wizard" value="website" />

                <h5 class="card-title display-4 fs-4 fw-normal">Tạo website của mình & Xây dựng thương hiệu</h5>
                <p class="card-text">
                  Đăng ký tiên miền & hosting. Thiết kế website chuyên nghiệp. Đăng bán sản phẩm của chính mình ngay trên website.
                </p>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary select-wizard">Bắt đầu ngay</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/store-banner2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title display-4 fs-4 fw-normal">Kinh doanh, quản lý sản phẩm & Liên kết sàn TMĐT</h5>
              <p class="card-text">
                Bán hàng trên website, Facebook, Live stream, liên kết sàn TMĐT, cửa hàng và quản lý tập trung trên BranViet.com.
              </p>
              <div class="d-grid gap-2">
                <a href="javascript:;" class="btn btn-success stretched-link">Bắt đầu ngay</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/store-banner.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title display-4 fs-4 fw-normal">Quản lý cửa hàng, bán hàng và giao nhận hàng</h5>
              <p class="card-text">Tính tiền, in hóa đơn nhanh chóng, xem báo cáo bán hàng theo ngày - Quản lý bán hàng và giao hàng tập trung, đa kênh.</p>
              <div class="d-grid gap-2">
                <a href="javascript:;" class="btn btn-warning stretched-link">Bắt đầu ngay</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      ready(function() {
        $('.select-wizard').on(function(e) {
          e.prevenDefault();
        });
      });
    </script>
@endsection