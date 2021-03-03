@extends('client.layouts.main')
@section('content')
    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2">
          {{-- <li class="breadcrumb-item"><a href="#"><span data-feather="home"></span></a></li> --}}
          <li class="breadcrumb-item active" aria-current="page">
            <span data-feather="home"></span> Trang chính
          </li>
        </ol>
      </nav>
      <h4>Website của bạn</h4>
    </div>
    
    <div class="row">
      <div class="col-md-6">
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
      </div>
    </div>
@endsection