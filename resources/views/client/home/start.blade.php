@extends('client.layouts.main')
@section('content')
    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
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
          <img style="margin:15px 0; width: 22rem" src="{{ url('image/get_start.jpg') }}" class="" alt="...">
        </div>
        <p class="fs-4 display-5 text-center mx-md-5 mt-0 mb-2">Xin chào <strong>{{ Auth::user()->name }}</strong>,
        </p>
        <p class="fs-5 lh-base display-5 text-center mx-md-5 px-md-4 mb-5">
          Cám ơn Quý Khách đã đăng ký thành công gói dịch vụ <strong>{{ trans('messages.plan.' . Auth::user()->getCurrentPlanName()) }}</strong>
          của chúng tôi.
          <br>Hãy chọn nơi bạn muốn bắt đầu khởi nghiệp kinh doanh của bạn nhé:
        </p>
      </div>
    </div>

    <div class="">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/product-empty.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <form class="new-domain-form" method="POST" action="{{ action('Client\ProductController@index') }}">
                @csrf

                <input type="hidden" name="wizard" value="website" />

                <h5 class="card-title display-4 fs-4 fw-normal">Tạo sản phẩm đầu tiên</h5>
                <p class="card-text">
                  Hãy thêm sản phẩm đầu tiên của bạn hoặc nhập từ các sàn TMĐT khách (Shopee, Lazada,...)
                </p>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary select-wizard">Quản lý sản phẩm</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/brand-config.png') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title display-4 fs-4 fw-normal">Cấu hình thông tin Kinh doanh</h5>
              <p class="card-text">
                Cấu hình thông tin căn bản cho thương hiệu của bạn để bắt đầu kinh doanh ngay hôm nay
              </p>
              <div class="d-grid gap-2">
                <a href="javascript:;" class="btn btn-success stretched-link coming_soon">Cấu hình Thương hiệu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/contact-connect.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title display-4 fs-4 fw-normal">Kết nối với khách hàng</h5>
              <p class="card-text">
                Hiện danh bạ của bạn mới khởi tạo. Hãy liên kết và kết nối danh bạ Khách hàng tiềm năng
              </p>
              <div class="d-grid gap-2">
                <a href="javascript:;" class="btn btn-warning stretched-link">Khách hàng của bạn</a>
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