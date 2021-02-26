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
            Chúc mừng bạn! Tên miền <strong>{{ $domain }}</strong> đã được lưu thành công. Nhấn nút bên dưới để tiếp tục
        </h4>

        <div class="mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-warning btn-lg px-4">Bước tiếp theo</button>
        </div>
    </form>
@endsection

@section('footer')
    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        <span data-feather="x" class="me-1"></span>
        Chọn tên miền khác
    </button>
@endsection