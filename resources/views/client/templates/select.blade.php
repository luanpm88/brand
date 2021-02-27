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

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="text-center mb-3">
                <img width="100%" src="{{ url('image/design.jpg') }}" />
            </div>
        </div>
        <div class="col-md-6 pt-4 pb-4">
            <h4 class="display-5 fs-2 fw-normal">Chọn giao diện website</h4>
            <p class="fs-5">
                Chọn giao diện mặc định cho website của bạn. Bạn có thể chọn mẫu căn bản miễn phí
                hoặc chọn mua những giao diện chuyên nghiệp khác.
            </p>
        </div>
        
    </div>
    <div class="row">
        @foreach ($templates as $template)
            <div class="col-md-4">
                <div class="card template mb-4 shadow overflow-hidden">
                    <div class="template-image-container mb-1 shadow">
                        <img src="{{ url('image/template/' . $template['photo']) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="">
                                <h4 class="card-title display-4 fs-5 mb-3 fw-normal">{{ $template['title'] }}</h4>
                            </div>
                        </div>

                        <div class="display-5 fs-4 text-center mb-3">
                            @if ($template['price'] == 0)
                                <span class="display-5 fs-3 text-grey text-center text">
                                    MIỄN PHÍ
                                </span>
                            @else
                                <span class="display-5 fs-3 fw-bold text-center text">
                                    {{ App\Helpers\Currency::formatNumber($template['price']) }}<sup class="d">đ</sup>
                                </span> / tháng
                            @endif
                        </div>

                        <div class="text-center my-4">
                            <form class="new-domain-form" method="POST" action="{{ action('Client\TemplateController@addTemplate') }}">
                                @csrf
                                <input type="hidden" name="template" value="{{ $template['name'] }}" />
                                <button type="submit" class="btn btn-lg btn-{{ $template['button'] }} px-4">Chọn giao diện</button>
                            </form>
                        </div>

                        <div class="my-2 text-center">
                            <img width="250px" src="{{ url('image/divider5.png') }}" />
                        </div>
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