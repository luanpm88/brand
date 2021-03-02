@extends('client.layouts.main')
@section('content')
    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2">
          {{-- <li class="breadcrumb-item"><a href="#"><span data-feather="home"></span></a></li> --}}
          <li class="breadcrumb-item active" aria-current="page">
            <span data-feather="home"></span> Trang chính
          </li>
        </ol>
      </nav>
      <h4>Tổng quan</h4>
    </div>

    <div class="row">
      <div class="col-sm">
        <div class="text-center">
          <img style="margin:15px 0; width: 18rem" src="{{ url('image/get_start.jpg') }}" class="" alt="...">
        </div>
        <p class="fs-4 display-5 text-center mx-md-5 mt-0 mb-2">Xin chào <strong>{{ Auth::user()->name }}</strong>,
        </p>
        <p class="fs-5 lh-base display-5 text-center mx-md-5 px-md-4 mb-5">
          Cám ơn Quý Khách đã đăng ký thành công gói dịch vụ <strong>{{ trans('messages.plan.' . Auth::user()->getCurrentPlanName()) }}</strong>
          của chúng tôi.
          <br>Hãy chọn nơi bạn muốn bắt đầu khởi nghiệp kinh doanh của bạn.
        </p>
      </div>
    </div>

    <div class="">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <img src="{{ url('image/product-empty.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <input type="hidden" name="wizard" value="website" />

                <h5 class="card-title display-4 fs-4 fw-normal">Tạo sản phẩm đầu tiên</h5>
                <p class="card-text">
                  Hãy thêm sản phẩm đầu tiên của bạn hoặc nhập từ các sàn TMĐT khách (Shopee, Lazada,...)
                </p>
                <div class="d-grid gap-2">
                  <a href="{{ action('Client\ProductController@index') }}" class="btn btn-primary select-wizard" role="button">Quản lý sản phẩm</a>
                </div>
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
                <a href="{{ action('Client\AccountController@brand') }}" class="btn btn-success stretched-link">Cấu hình Thương hiệu</a>
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

    <hr class="my-4" >
    
    <div class="row">
      <div class="col-sm">
        <div class="card mb-4">
          <div class="card-header">
            Gói dịch vụ kinh doanh
          </div>
          <div class="card-body">
            <h5 class="card-title text-uppercase">GÓI {{ trans('messages.plan.' . Auth::user()->getCurrentPlanName()) }}</h5>
            <p class="card-text">Gói dịch vụ đang được sử dụng. Còn <span class="fw-bold text-success">{{ Auth::user()->getCurrentPlan()->created_at->addMonthsNoOverflow(1)->diffInDays(\Carbon\Carbon::now()) }}</span> ngày nữa là hết hạn.
              Thời hạn sử dụng đến ngày <span class="fw-bold text-danger">{{ Auth::user()->getCurrentPlan()->created_at->addMonthsNoOverflow(1)->format('Y-m-d') }}</span></p>
            <div style="margin-left: -17px;
            margin-right: -17px;">
              @include('client.plans.features', Auth::user()->getPlan(Auth::user()->getCurrentPlanName())['features'])
            </div>
            <div class="mt-3">
              <a href="#" class="btn btn-primary me-1">
                <span data-feather="clock" class="float-left me-1"></span>
                Gia hạn
              </a>
              <a href="#" class="btn btn-secondary">
                <span data-feather="refresh-ccw" class="float-left me-1"></span>
                Chuyển đổi gói dịch vụ
              </a>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header">
            Biểu đồ
          </div>
          <div class="card-body">
            <h5 class="card-title fw-normal">Doanh thu bán hàng tháng <strong>02/2021</strong></h5>

            <canvas class="my-4 mb-2 w-100" id="myChart" width="900" height="380"></canvas>

            <div class="text-center text-muted small">
              Từ ngày 01/02/2021 đến 28/02/2021
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card mb-4">
          <div class="card-header">
            Website
          </div>
          <div class="card-body">
            <h5 class="card-title">Website {{ trans('messages.plan.' . Auth::user()->getCurrentTemplateName()) }}</h5>

            <div class="alert alert-info d-flex align-items-center mt-3 mb-0">
              <div class="me-3">
                <div class="spinner-border text-info" role="status">
                    <span class="sr-only"></span>
                </div>
              </div>
              <p class="card-text mb-0">
                Website đang được khởi tạo. Vui lòng đợi từ <strong>30 phút</strong> đến <strong>1 tiếng</strong>
                để website hoàn thành và đi vào sử dụng.
              </p>
            </div>

            <hr>

            <div class="d-flex">
              <div class="me-4">
                <div class="summary-template-image shadow">
                  <img class="" src="{{ url('image/template/giao-dien-1.jpg') }}" class="card-img-top" alt="...">
                </div>
              </div>
              <div style="width:100%">
                <p class="card-text mb-0">
                  Giao diện website bao gồm trong gói dịch vụ kinh doanh
                </p>
                <ul class="list-group plan-select mt-2">
                  <li class="list-group-item bg-light">
                    <div class="me-auto">
                      Loại giao diện
                    </div>
                    <div>
                      {{ trans('messages.plan.' . Auth::user()->getCurrentTemplateName()) }}
                    </div>
                  </li>
                  <li class="list-group-item bg-light">
                    <div class="me-auto">
                      Giá
                    </div>
                    <div>
                      <strong class="">{{ App\Helpers\Currency::formatPrice(Auth::user()->getCurrentTemplate()->price) }}</strong>
                    </div>
                  </li>
                  <li class="list-group-item bg-light">
                    <div class="me-auto">
                      Thời hạn sử dụng
                    </div>
                    <div>
                      <span class="text-success">không thời hạn</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-header">
            Tên miền
          </div>
          <div class="card-body">
            <h5 class="card-title fw-normal">Tên miền: <strong>{{ Auth::user()->getCurrentDomainName() }}</strong></h5>
            <p class="card-text">Gói dịch vụ đang được sử dụng. Còn <span class="fw-bold text-success">{{ Auth::user()->getCurrentDomain()->created_at->addYearsNoOverflow(1)->diffInDays(\Carbon\Carbon::now()) }}</span> ngày nữa là hết hạn.
              Thời hạn sử dụng đến ngày <span class="fw-bold text-danger">{{ Auth::user()->getCurrentDomain()->created_at->addYearsNoOverflow(1)->format('Y-m-d') }}</span></p>
            <a href="#" class="btn btn-secondary">Quản lý tên miền</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      ready(function() {
        // Graphs
        var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: [
              'Sunday',
              'Monday',
              'Tuesday',
              'Wednesday',
              'Thursday',
              'Friday',
              'Saturday'
            ],
            datasets: [{
              data: [
                15339,
                21345,
                18483,
                24003,
                23489,
                24092,
                12034
              ],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff'
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: false
                }
              }]
            },
            legend: {
              display: false
            }
          }
        })
      });
    </script>
@endsection