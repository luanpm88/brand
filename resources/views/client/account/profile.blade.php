@extends('client.layouts.main')

@section('content')
    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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

    @if ($errors->any())
        <div class="alert alert-danger">
            Có lỗi trong quá trình lưu. Vui lòng kiểm tra lại nội dung bạn nhập bên dưới.
        </div>
    @endif

    <form method="POST" action="{{ action('Client\AccountController@profile') }}" enctype="multipart/form-data">
        @csrf

        <div class="row g-3 mt-0">
            <div class="col-md-3 col-lg-3">
                <div class="user-profile-photo text-center">
                    <span class="user-picture-box">
                        <img class="shadow user-picture" src="{{ action('Client\UserController@picture', $user->id) }}" />
                    </span>
                    <input class="d-none" type="file" name="picture" />
                    <div>
                        <button type="button" class="mt-3 btn btn-sm btn-outline-secondary me-1 change-picture">
                            <span data-feather="upload"></span>
                            Tải ảnh từ máy
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <h4 class="mb-3">Hồ sơ cá nhân</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Tên</label>
                            <input type="text"
                                name="first_name"
                                class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                                value="{{ $user->first_name }}"
                            >
                            <div class="invalid-feedback">
                                {{ $errors->first('first_name') }}
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Họ</label>
                            <input type="text"
                                name="last_name"
                                class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                value="{{ $user->last_name }}"
                            >
                            <div class="invalid-feedback">
                                {{ $errors->first('last_name') }}
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" disabled id="email" placeholder="{{ Auth::user()->email }}">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text"
                                name="address"
                                class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                value="{{ $user->address }}"
                            >
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tỉnh/Thành</label>
                            <select name="province_id" class="form-select d-block w-100" id="country" required="">
                                <option value="">Chọn...</option>
                                @foreach(App\Models\Province::all() as $province)
                                    <option value="{{ $province->id }}" {{ $user->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
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
                                @foreach($user->province->districts as $district)
                                    <option value="{{ $district->id }}" {{ $user->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phường/Xã</label>
                            <div class="wards-box">
                                <select name="ward_id" class="form-select d-block w-100" id="state">
                                    @foreach($user->district->wards as $ward)
                                    <option value="{{ $ward->id }}" {{ $user->ward_id == $ward->id ? 'selected' : '' }}>{{ $ward->name }}</option>
                                @endforeach
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
    </form>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                    $('.user-picture').attr('src', e.target.result);
                }
                    
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        ready(function() {
            $('.change-picture').on('click', function() {
                $('[name=picture]').click();
            });

            $('[name=picture]').on('change', function() {
                readURL(this);
            });
        });
    </script>
@endsection