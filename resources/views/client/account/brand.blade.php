@extends('client.layouts.main')

@section('content')
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item">
                <a href="{{ action('Client\HomeController@dashboard') }}">
                    <span data-feather="home"></span> Trang chính
                </a>
            </li>
        </ol>
        </nav>
        <h4>Tài khoản</h4>
    </div>

    <div class="row g-3 mt-0">
        <div class="col-md-3 col-lg-3">
            <h4 class="mb-4">Logo thương hiệu</h4>
            <div class="user-profile-photo text-center">
                <span><img class="shadow" src="{{ Auth::user()->google_avatar }}" /></span>
                <div>
                    <button type="button" class="mt-3 btn btn-sm btn-outline-secondary me-1">
                        Thay logo
                    </button>
                    <button type="button" class="mt-3 btn btn-sm btn-outline-danger">
                        Xóa logo
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <h4 class="mb-3">Thông tin đơn vị</h4>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Tên đơn vị</label>
                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Tên Công ty | Cửa hàng" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="{{ Auth::user()->email }}">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="120 Lê Văn Sĩ" required="">
                        <div class="invalid-feedback">
                        Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Tỉnh/Thành</label>
                        <select name="province_id" class="form-select d-block w-100" id="country" required="">
                            <option value="">Chọn...</option>
                            @foreach(App\Models\Province::all() as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Quận/Huyện</label>
                        <div class="districts-box">
                            <select name="district_id" class="form-select d-block w-100" id="state" required="">
                            <option value="">Chọn...</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Phường/Xã</label>
                        <div class="wards-box">
                            <select name="ward_id" class="form-select d-block w-100" id="state" required="">
                            <option value="">Chọn...</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                    <script>
                        var districtBox;
                        var wardBox;

                        ready(function() {
                            districtBox = new Box($('.districts-box'), '{{ action('Client\DistrictController@selectBox') }}');
                            wardBox = new Box($('.wards-box'), '{{ action('Client\WardController@selectBox') }}');

                            $('body').on('change', '[name=province_id]', function() {
                                var province_id = $(this).val();
                        
                                districtBox.load({
                                    data: {
                                        province_id: province_id
                                    }
                                })
                            });
                    
                            $('body').on('change', '[name=district_id]', function() {
                                var district_id = $(this).val();
                    
                                wardBox.load({
                                    data: {
                                        district_id: district_id
                                    }
                                })
                            });
                        });
                    </script>            
                </div>

                <button class="btn btn-primary" type="submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
@endsection