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
      <h4>Tên miền của bạn</h4>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-header">
            Tên miền
          </div>
          <div class="card-body">
            <h5 class="card-title fw-normal">Tên miền: <strong>{{ Auth::user()->getCurrentDomainName() }}</strong></h5>
            <p class="card-text">Gói dịch vụ đang được sử dụng. Còn <span class="fw-bold text-success">{{ Auth::user()->getCurrentDomain()->created_at->addYearsNoOverflow(1)->diffInDays(\Carbon\Carbon::now()) }}</span> ngày nữa là hết hạn.
              Thời hạn sử dụng đến ngày <span class="fw-bold text-danger">{{ Auth::user()->getCurrentDomain()->created_at->addYearsNoOverflow(1)->format('Y-m-d') }}</span></p>
            {{-- <a href="#" class="btn btn-secondary">Quản lý tên miền</a> --}}
          </div>
        </div>
      </div>
    </div>
@endsection