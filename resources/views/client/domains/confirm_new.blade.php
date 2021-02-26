@extends('client.layouts.popup.small')

@section('title')
    Thành công
@endsection

@section('content')
    <form class="confirm-domain-form" method="POST" action="{{ action('Client\DomainController@confirm') }}">
        @csrf
        <input type="hidden" name="domain" value="{{ $domain }}" />
        <input type="hidden" name="type" value="{{ $type }}" />

        <div class="text-center mb-3">
            <span data-feather="check-circle" class="me-0 fs-2 text-success"></span>
        </div>
        <h4 class="display-5 fs-5 px-md-4 text-center lh-base">
            Chúc mừng bạn! Tên miền <strong>{{ $domain }}</strong> khả dụng. Vui lòng xem bảng giá bên dưới và xác nhận
        </h4>

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">Tên miền</th>
                <th scope="col">Khả dụng</th>
                <th scope="col" class="text-end">Giá</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><span class="display-4 fs-5 fw-normal text-success">{{ $domain }}</span></th>
                <td><span data-feather="check-circle" class="me-0 text-success"></span></td>
                <td class="text-end"><span class="display-5 fs-5 fw-bold">{{ App\Helpers\Currency::formatPrice($price) }}</span> / năm</td>
            </tr>
            </tbody>
        </table>

        <div class="mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-warning btn-lg px-4">Đăng ký & Bước tiếp theo</button>
        </div>
    </form>
@endsection

@section('footer')
    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        <span data-feather="x" class="me-1"></span>
        Chọn tên miền khác
    </button>
@endsection