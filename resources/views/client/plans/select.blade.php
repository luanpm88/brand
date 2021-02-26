@extends('client.layouts.main')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2 mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Cài đặt website của bạn
            </li>
        </ol>
    </nav>

    @include('client.home.steps', [
        'step' => 'plan',
    ])

    

    <div class="row">
        <div class="col-md-7 pt-4 pb-4">
            <h4 class="display-5 fs-1">Chọn gói dịch vụ BranViet.com</h4>
            <p class="fs-5">
                Chọn giải pháp phù hợp với nhu cầu của bạn trên BrandViet.com.
                Xem chi tiết các gói dịch vụ ngay danh sách bên dưới:
            </p>
        </div>
        <div class="col-md-5">
            <div class="text-center mb-3">
                <img width="100%" src="{{ url('image/support2.jpg') }}" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card plan mb-3 shadow">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="">
                            <h4 class="card-title display-4 fs-3 mb-3 fw-normal">CƠ BẢN</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="">

                        </div>
                    </div>

                    <div class="display-5 fs-4 text-center mb-3">
                        <span class="display-5 fs-2 fw-bold text-center text">
                            {{ App\Helpers\Currency::formatNumber(380000) }}<sup class="d">đ</sup>
                        </span> / tháng
                    </div>

                    <div class="text-center my-4">
                        <button type="button" class="btn btn-lg btn-primary px-4">Đăng ký</button>
                    </div>

                    <div class="my-2 text-center">
                        <img width="250px" src="{{ url('image/divider4.jpeg') }}" />
                    </div>

                    @include('client.plans.features', [
                        'website' => 1,
                        'template' => 1,
                        'store' => 1,
                        'ecommerce_connect' => 1,                
                        'shipping' => 0,
                        'payment' => 0,
                    ])
                </div>                
            </div>
            
        </div>
        <div class="col-md">
            <div class="card plan mb-3 shadow">
                <div class="card-body">
                    <h4 class="card-title display-4 fs-3 mb-3 fw-normal">PHỔ BIẾN</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                    <div class="display-5 fs-4 text-center mb-3">
                        <span class="display-5 fs-2 fw-bold text-center text">
                            {{ App\Helpers\Currency::formatNumber(520000) }}<sup class="d">đ</sup>
                        </span> / tháng
                    </div>

                    <div class="text-center my-4">
                        <button type="button" class="btn btn-lg btn-danger px-4">Đăng ký</button>
                    </div>

                    <div class="my-3 text-center">
                        <img width="250px" src="{{ url('image/divider4.jpeg') }}" />
                    </div>

                    @include('client.plans.features', [
                        'website' => 1,
                        'template' => 2,
                        'store' => 3,
                        'ecommerce_connect' => 3,                
                        'shipping' => 1,
                        'payment' => 0,
                        'emails' => '1,000',
                    ])
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <div class="card plan mb-3 shadow">
                <div class="card-body">
                    <h4 class="card-title display-4 fs-3 mb-3 fw-normal">NÂNG CAO</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                    <div class="display-5 fs-4 text-center mb-3">
                        <span class="display-5 fs-2 fw-bold text-center text">
                            {{ App\Helpers\Currency::formatNumber(1020000) }}<sup class="d">đ</sup>
                        </span> / tháng
                    </div>

                    <div class="text-center my-4">
                        <button type="button" class="btn btn-lg btn-info px-4">Đăng ký</button>
                    </div>

                    <div class="my-3 text-center">
                        <img width="250px" src="{{ url('image/divider4.jpeg') }}" />
                    </div>

                    @include('client.plans.features', [
                        'website' => 2,
                        'template' => 3,
                        'store' => 5,
                        'ecommerce_connect' => '∞',                
                        'shipping' => '∞',
                        'payment' => '∞',
                        'emails' => '10,000',
                    ])
                </div>
            </div>
            
        </div>
        <div class="col-md">
            <div class="card plan mb-3 shadow">
                <div class="card-body">
                    <h4 class="card-title display-4 fs-3 mb-3 fw-normal">CHUYÊN NGHIỆP</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                    <div class="display-5 fs-4 text-center mb-3">
                        <span class="display-5 fs-2 fw-bold text-center text">
                            {{ App\Helpers\Currency::formatNumber(2500000) }}<sup class="d">đ</sup>
                        </span> / tháng
                    </div>

                    <div class="text-center my-4">
                        <button type="button" class="btn btn-lg btn-warning px-4">Đăng ký</button>
                    </div>

                    <div class="my-3 text-center">
                        <img width="250px" src="{{ url('image/divider4.jpeg') }}" />
                    </div>
                    
                    @include('client.plans.features', [
                        'website' => '∞',
                        'template' => 5,
                        'store' => '∞',
                        'ecommerce_connect' => '∞',                
                        'shipping' => '∞',
                        'payment' => '∞',
                        'emails' => '100,000',
                    ])
                </div>
            </div>
        </div>
    </div>

    <script>
        ready(function() {
            
        });
    </script>
@endsection