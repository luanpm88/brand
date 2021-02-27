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
        @foreach ($plans as $plan)
            <div class="col-md-6">
                <div class="card plan mb-4 shadow">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="">
                                <h4 class="card-title display-4 fs-3 mb-3 fw-normal">{{ $plan['title'] }}</h4>
                                <p class="card-text">
                                    {{ $plan['desc'] }}
                                </p>
                            </div>
                            <div class="">

                            </div>
                        </div>

                        <div class="display-5 fs-4 text-center mb-3">
                            <span class="display-5 fs-2 fw-bold text-center text">
                                {{ App\Helpers\Currency::formatNumber($plan['price']) }}<sup class="d">đ</sup>
                            </span> / tháng
                        </div>

                        <div class="text-center my-4">
                            <form class="new-domain-form" method="POST" action="{{ action('Client\PlanController@addPlan') }}">
                                @csrf
                                <input type="hidden" name="plan" value="{{ $plan['name'] }}" />
                                <button type="submit" class="btn btn-lg btn-{{ $plan['button'] }} px-4">Đăng ký</button>
                            </form>
                        </div>

                        <div class="my-2 text-center">
                            <img width="250px" src="{{ url('image/divider4.jpeg') }}" />
                        </div>

                        @include('client.plans.features', $plan['features'])
                    </div>                
                </div>            
            </div>
        @endforeach
    </div>
    
    <script>
        ready(function() {
            
        });
    </script>
@endsection