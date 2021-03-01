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
        'step' => 'checkout',
    ])

    <div class="row g-3">
        <div class="col-md-8 col-lg-8">
            <div class="alert alert-info fs-6 d-flex align-items-center">
                <div class="text-center me-4">
                    <svg style="width: 90px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <circle style="fill:#88C5CC;" cx="256" cy="256" r="256"/> <rect x="124" y="200" style="fill:#406A80;" width="264" height="232"/> <rect x="108" y="216" style="fill:#E6E6E6;" width="64" height="200"/> <g> <rect x="116" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="136" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="156" y="216" style="fill:#CCCCCC;" width="8" height="200"/> </g> <g> <rect x="340" y="216" style="fill:#E6E6E6;" width="64" height="200"/> <path style="fill:#E6E6E6;" d="M40,512v-32c0-4.4,3.6-8,8-8h416c4.4,0,8,3.6,8,8v32H40z"/> <path style="fill:#E6E6E6;" d="M64,472v-32c0-4.4,3.6-8,8-8h368c4.4,0,8,3.6,8,8v32H64z"/> </g> <path style="fill:#F5F5F5;" d="M433.656,170.344l-176-120C256.096,48.784,254.048,48,252,48s-4.096,0.784-5.656,2.344l-176,120 c-1.548,1.544-2.328,3.628-2.344,5.656c-0.016,2.068,0.764,4.08,2.344,5.656C71.908,183.22,73.952,184,76,184h176h176 c2.048,0,4.092-0.78,5.656-2.344c1.58-1.58,2.36-3.588,2.344-5.656C435.984,173.972,435.204,171.888,433.656,170.344z"/> <g> <polygon style="fill:#CCCCCC;" points="102.184,168 252,65.852 401.816,168 "/> <path style="fill:#CCCCCC;" d="M452,192c0,4.4-3.6,8-8,8H60c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h384C448.4,184,452,187.6,452,192 L452,192z"/> </g> <rect x="224" y="216" style="fill:#E6E6E6;" width="64" height="200"/> <g> <rect x="232" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="252" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="272" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="348" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="368" y="216" style="fill:#CCCCCC;" width="8" height="200"/> <rect x="388" y="216" style="fill:#CCCCCC;" width="8" height="200"/> </g> <g> <path style="fill:#F5F5F5;" d="M180,424c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C176.4,416,180,419.6,180,424 L180,424z"/> <path style="fill:#F5F5F5;" d="M180,208c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C176.4,200,180,203.6,180,208 L180,208z"/> <path style="fill:#F5F5F5;" d="M296,424c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C292.4,416,296,419.6,296,424 L296,424z"/> <path style="fill:#F5F5F5;" d="M296,208c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C292.4,200,296,203.6,296,208 L296,208z"/> <path style="fill:#F5F5F5;" d="M412,424c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C408.4,416,412,419.6,412,424 L412,424z"/> <path style="fill:#F5F5F5;" d="M412,208c0,4.4-3.6,8-8,8h-64c-4.4,0-8-3.6-8-8l0,0c0-4.4,3.6-8,8-8h64C408.4,200,412,203.6,412,208 L412,208z"/> </g> <rect x="64" y="468" style="fill:#CCCCCC;" width="384" height="4"/> <g> <path style="fill:#2179A6;" d="M252,140c-6.616,0-12-5.384-12-12c0-2.208,1.792-4,4-4s4,1.792,4,4c0,2.204,1.796,4,4,4s4-1.796,4-4 s-1.796-4-4-4c-6.616,0-12-5.384-12-12s5.384-12,12-12s12,5.384,12,12c0,2.208-1.792,4-4,4s-4-1.792-4-4c0-2.204-1.796-4-4-4 s-4,1.796-4,4s1.796,4,4,4c6.616,0,12,5.384,12,12S258.616,140,252,140z"/> <path style="fill:#2179A6;" d="M252,108c-2.208,0-4-1.792-4-4v-8c0-2.208,1.792-4,4-4s4,1.792,4,4v8 C256,106.208,254.208,108,252,108z"/> <path style="fill:#2179A6;" d="M252,148c-2.208,0-4-1.792-4-4v-8c0-2.208,1.792-4,4-4s4,1.792,4,4v8 C256,146.208,254.208,148,252,148z"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                </div>
                <div class="">
                    <h4>Chuyển khoản ngân hàng</h4>
                    Bạn đã xác nhận đăng ký các dịch vụ tại BrandViet.com thành công.
                    Vui lòng thực hiện theo thông tin chuyển khoản bên dưới đế tiến hành thanh toán.
                    <br />
                    (Nếu bạn đã thanh toán, vui lòng đợi xác nhận thanh toán từ BrandViet.com)
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-6 col-lg-6">
            <ul class="list-group shadow">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light bg-gradient">
                    Tài khoản số
                    <span class="fw-bold">0102 900 4556</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light bg-gradient">
                    Tại ngân hàng
                    <span class="fw-bold">ACB,  chi nhánh TP.HCM</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light bg-gradient">
                    Số tiền thanh toán
                    <span class="fw-bold fs-4 text-success">
                        {{ App\Helpers\Currency::formatNumber($total) }}<sup class="d">đ</sup>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light bg-gradient">
                    Nội dung chuyển khoản
                    <span class="">
                        BrandViet.com
                    </span>
                </li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <form method="POST" action="{{ action('Client\PaymentController@cancel') }}" class="needs-validation" novalidate="">
            @csrf
            <button type="button" class="btn btn-danger payment-cancel">Hủy đăng ký</button>
        </form>
    </div>

    <div class="row g-3 mt-4">
        <div class="col-md-8 col-lg-8">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="fs-4">Dịch vụ đăng ký</span>
                <span class="badge bg-primary rounded-pill">3</span>
            </h4>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col" class="text-center">Thời hạn</th>
                    <th scope="col" class="text-end">Giá</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($services as $key => $service)
                        <tr>
                            <th scope="row"><span class="badge bg-secondary fs-7 rounded-pill">{{ $key+1 }}</span></th>
                            <td>
                                <span class="fs-6 m-0 fw-normal">{!! $service->getName() !!}</span>
                            </td>
                            <td class="fs-6 text-center">{{ $service->getUnit() }}</td>
                            <td class="fs-6 text-end fw-bold">{{ App\Helpers\Currency::formatNumber($service->price) }}<sup class="d">đ</sup></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="fs-6 text-end" colspan="3">Tổng cộng</td>
                        <td class="fs-5 text-end text-success fw-bold">{{ App\Helpers\Currency::formatNumber($total) }}<sup class="d">đ</sup></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        function hightlightPayment() {
            $('.payment-select .list-group-item').removeClass('active');
            if ($('[name="payment"]:checked')) {
                $('[name="payment"]:checked').closest('.list-group-item').addClass('active');
            }
        }
        ready(function() {
            $('.payment-select .form-check-input').on('change', function() {
                hightlightPayment();
            });

            $('.payment-cancel').on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');

                var a = new Dialog('confirm', {
                    message: 'Bạn có chắc muốn hủy các đăng ký dịch vụ tại BrandViet.com',
                    ok: function() {
                        form.submit();
                    },
                });
            });
        });

        
    </script>
@endsection