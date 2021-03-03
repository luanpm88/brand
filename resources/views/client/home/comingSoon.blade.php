@extends('client.layouts.popup.small')

@section('title')
    Thông báo
@endsection

@section('content')
    <div class="text-center my-4">
        <img width="200px" class="mb-4" src="{{ url('image/coming_soon.jpg') }}" />
        <div class="display-5 fs-4 lh-normal">
            Chức năng đang được hoàn thiện.<br />Vui lòng quay lại sau!
        </div>
    </div>
@endsection