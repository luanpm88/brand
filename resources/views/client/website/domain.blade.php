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
        'step' => 'domain',
    ])

    <div class="row">
        <div class="col-sm-7">
            <h4>Đăng ký tên miền</h4>
            <p class="">
                Bạn chưa lưu trữ thông tin tên miền với chúng tôi. Vui lòng nhập tên miền bạn đang sở hữu hoặc
                có thể đăng ký mua tên miền với BrandViet.com là nhà cung cấp ủy quyền.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form class="new-domain-form" method="POST" action="{{ action('Client\DomainController@check') }}">
                @csrf

                <input type="hidden" name="type" value="new" />
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <h5 class="card-title fs-4 fw-normal display-5">Đăng ký tên miền mới</h5>
                                <p class="card-text">Đăng ký mua tên miền mới tại VietBrand.com. Là đại lý ủy quyền uy tín của các nhà phân phối như: Mắt Bão, PA Việt Nam</p>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg style="height: 20px; width: 20px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 382.169 382.169" style="enable-background:new 0 0 382.169 382.169;" xml:space="preserve"> <path d="M191.084,0C85.72,0,0,85.72,0,191.084s85.72,191.084,191.084,191.084c105.365,0,191.084-85.72,191.084-191.084 S296.449,0,191.084,0z M366.998,183.584H328.06c-0.993-36.182-9.156-70.613-23.534-100.029c5.258-3.894,10.338-8.08,15.227-12.542 C347.554,100.786,365.169,140.176,366.998,183.584z M235.969,59.18c-4.794-16.515-10.369-29.696-16.591-39.397 c26.124,8.974,49.019,30.085,65.649,58.963c-12.658,8.013-26.239,14.332-40.454,18.847C242.229,83.745,239.351,70.833,235.969,59.18 z M230.042,101.533c-12.644,2.845-25.69,4.31-38.954,4.31c-13.266,0-26.314-1.466-38.961-4.312 C161.302,46.523,177.969,15,191.084,15C204.2,15,220.867,46.523,230.042,101.533z M145.342,183.584 c0.281-24.778,1.945-47.273,4.571-67.176c13.379,2.927,27.165,4.435,41.175,4.435c14.008,0,27.792-1.508,41.168-4.434 c2.626,19.903,4.289,42.398,4.571,67.174H145.342z M236.827,198.584c-0.281,24.78-1.945,47.277-4.572,67.182 c-13.376-2.926-27.16-4.433-41.167-4.433c-14.009,0-27.795,1.508-41.174,4.435c-2.627-19.906-4.291-42.403-4.572-67.184H236.827z M162.792,19.783c-6.222,9.701-11.797,22.882-16.591,39.397c-3.383,11.653-6.26,24.563-8.603,38.41 c-14.214-4.515-27.795-10.833-40.453-18.846C113.774,49.867,136.669,28.757,162.792,19.783z M135.317,112.602 c-2.988,22.089-4.69,46.115-4.976,70.983H69.115c0.988-33.82,8.617-65.203,21.057-91.497 C104.291,100.898,119.451,107.781,135.317,112.602z M130.342,198.584c0.286,24.871,1.988,48.9,4.977,70.991 c-15.865,4.82-31.025,11.702-45.144,20.513c-12.442-26.296-20.072-57.681-21.06-91.504H130.342z M137.599,284.586 c2.343,13.844,5.22,26.752,8.602,38.403c4.794,16.515,10.369,29.696,16.591,39.397c-26.121-8.974-49.015-30.082-65.644-58.955 C109.805,295.419,123.385,289.101,137.599,284.586z M152.128,280.646c12.646-2.846,25.694-4.312,38.959-4.312 c13.263,0,26.309,1.465,38.953,4.31c-9.176,55.005-25.841,86.525-38.956,86.525C177.969,367.169,161.304,335.649,152.128,280.646z M219.377,362.386c6.222-9.701,11.797-22.882,16.591-39.396c3.382-11.651,6.26-24.56,8.602-38.405 c14.214,4.515,27.795,10.833,40.452,18.845C268.393,332.303,245.499,353.412,219.377,362.386z M246.851,269.573 c2.988-22.09,4.69-46.118,4.976-70.989h61.227c-0.988,33.822-8.618,65.206-21.059,91.502 C277.877,281.276,262.717,274.393,246.851,269.573z M251.827,183.584c-0.285-24.867-1.987-48.893-4.975-70.981 c15.867-4.82,31.028-11.703,45.146-20.515c12.44,26.294,20.068,57.676,21.056,91.496H251.827z M309.053,60.475 c-3.778,3.416-7.682,6.65-11.698,9.701c-2.677-4.563-5.511-8.981-8.51-13.23c-6.429-9.109-13.402-17.199-20.816-24.221 C283.012,40.035,296.812,49.407,309.053,60.475z M93.324,56.946c-3,4.249-5.834,8.668-8.51,13.23c-4.017-3.051-7.921-6.284-11.7-9.7 c12.242-11.068,26.042-20.441,41.027-27.751C106.726,39.746,99.754,47.837,93.324,56.946z M62.415,71.014 c4.89,4.461,9.97,8.647,15.229,12.54c-14.378,29.416-22.542,63.847-23.535,100.03H15.171C17,140.176,34.615,100.786,62.415,71.014z M15.171,198.584h38.938c0.993,36.185,9.158,70.619,23.537,100.036c-5.258,3.893-10.338,8.078-15.227,12.539 C34.616,281.386,17,241.995,15.171,198.584z M73.119,321.697c3.778-3.415,7.682-6.648,11.698-9.698 c2.676,4.56,5.509,8.977,8.507,13.225c6.429,9.108,13.401,17.199,20.816,24.22C99.158,342.135,85.36,332.763,73.119,321.697z M288.844,325.224c2.999-4.248,5.832-8.665,8.508-13.225c4.016,3.051,7.92,6.284,11.697,9.7 c-12.24,11.066-26.038,20.437-41.02,27.746C275.443,342.422,282.415,334.332,288.844,325.224z M319.749,311.16 c-4.889-4.461-9.968-8.647-15.226-12.54c14.38-29.417,22.544-63.851,23.537-100.035h38.938 C365.169,241.996,347.552,281.387,319.749,311.16z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                                    </span>
                                    <input name="domain" type="text" class="form-control" placeholder="Nhập tên miền muốn đăng ký" aria-label="Tên miền" aria-describedby="basic-addon1">
                                    <div id="validationServer03Feedback" class="invalid-feedback domain-feedback">
                                        
                                    </div>
                                </div>
                                <button type="submit" href="#" class="btn btn-primary">Kiểm tra & Đăng ký</button>
                            </div>
                            <div class="col-sm-5 text-center">
                                <img src="{{ url('image/domain.jpg') }}" width="200px" />
                            </div>
                        </div>                
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-5">
            <form class="exist-domain-form" method="POST" action="{{ action('Client\DomainController@check') }}">
                @csrf

                <input type="hidden" name="type" value="exist" />
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title fs-4 fw-normal display-5">Tên miền của bạn</h5>
                        <p class="card-text">
                        Nhập tên miền bạn đang sở hữu. Lưu ý tên miền này phải do bạn sở hữu và
                        có quyền quản trị tên miền này để liên kết với website trên BrandViet.com.vn
                        </p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <svg style="height: 20px; width: 20px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 382.169 382.169" style="enable-background:new 0 0 382.169 382.169;" xml:space="preserve"> <path d="M191.084,0C85.72,0,0,85.72,0,191.084s85.72,191.084,191.084,191.084c105.365,0,191.084-85.72,191.084-191.084 S296.449,0,191.084,0z M366.998,183.584H328.06c-0.993-36.182-9.156-70.613-23.534-100.029c5.258-3.894,10.338-8.08,15.227-12.542 C347.554,100.786,365.169,140.176,366.998,183.584z M235.969,59.18c-4.794-16.515-10.369-29.696-16.591-39.397 c26.124,8.974,49.019,30.085,65.649,58.963c-12.658,8.013-26.239,14.332-40.454,18.847C242.229,83.745,239.351,70.833,235.969,59.18 z M230.042,101.533c-12.644,2.845-25.69,4.31-38.954,4.31c-13.266,0-26.314-1.466-38.961-4.312 C161.302,46.523,177.969,15,191.084,15C204.2,15,220.867,46.523,230.042,101.533z M145.342,183.584 c0.281-24.778,1.945-47.273,4.571-67.176c13.379,2.927,27.165,4.435,41.175,4.435c14.008,0,27.792-1.508,41.168-4.434 c2.626,19.903,4.289,42.398,4.571,67.174H145.342z M236.827,198.584c-0.281,24.78-1.945,47.277-4.572,67.182 c-13.376-2.926-27.16-4.433-41.167-4.433c-14.009,0-27.795,1.508-41.174,4.435c-2.627-19.906-4.291-42.403-4.572-67.184H236.827z M162.792,19.783c-6.222,9.701-11.797,22.882-16.591,39.397c-3.383,11.653-6.26,24.563-8.603,38.41 c-14.214-4.515-27.795-10.833-40.453-18.846C113.774,49.867,136.669,28.757,162.792,19.783z M135.317,112.602 c-2.988,22.089-4.69,46.115-4.976,70.983H69.115c0.988-33.82,8.617-65.203,21.057-91.497 C104.291,100.898,119.451,107.781,135.317,112.602z M130.342,198.584c0.286,24.871,1.988,48.9,4.977,70.991 c-15.865,4.82-31.025,11.702-45.144,20.513c-12.442-26.296-20.072-57.681-21.06-91.504H130.342z M137.599,284.586 c2.343,13.844,5.22,26.752,8.602,38.403c4.794,16.515,10.369,29.696,16.591,39.397c-26.121-8.974-49.015-30.082-65.644-58.955 C109.805,295.419,123.385,289.101,137.599,284.586z M152.128,280.646c12.646-2.846,25.694-4.312,38.959-4.312 c13.263,0,26.309,1.465,38.953,4.31c-9.176,55.005-25.841,86.525-38.956,86.525C177.969,367.169,161.304,335.649,152.128,280.646z M219.377,362.386c6.222-9.701,11.797-22.882,16.591-39.396c3.382-11.651,6.26-24.56,8.602-38.405 c14.214,4.515,27.795,10.833,40.452,18.845C268.393,332.303,245.499,353.412,219.377,362.386z M246.851,269.573 c2.988-22.09,4.69-46.118,4.976-70.989h61.227c-0.988,33.822-8.618,65.206-21.059,91.502 C277.877,281.276,262.717,274.393,246.851,269.573z M251.827,183.584c-0.285-24.867-1.987-48.893-4.975-70.981 c15.867-4.82,31.028-11.703,45.146-20.515c12.44,26.294,20.068,57.676,21.056,91.496H251.827z M309.053,60.475 c-3.778,3.416-7.682,6.65-11.698,9.701c-2.677-4.563-5.511-8.981-8.51-13.23c-6.429-9.109-13.402-17.199-20.816-24.221 C283.012,40.035,296.812,49.407,309.053,60.475z M93.324,56.946c-3,4.249-5.834,8.668-8.51,13.23c-4.017-3.051-7.921-6.284-11.7-9.7 c12.242-11.068,26.042-20.441,41.027-27.751C106.726,39.746,99.754,47.837,93.324,56.946z M62.415,71.014 c4.89,4.461,9.97,8.647,15.229,12.54c-14.378,29.416-22.542,63.847-23.535,100.03H15.171C17,140.176,34.615,100.786,62.415,71.014z M15.171,198.584h38.938c0.993,36.185,9.158,70.619,23.537,100.036c-5.258,3.893-10.338,8.078-15.227,12.539 C34.616,281.386,17,241.995,15.171,198.584z M73.119,321.697c3.778-3.415,7.682-6.648,11.698-9.698 c2.676,4.56,5.509,8.977,8.507,13.225c6.429,9.108,13.401,17.199,20.816,24.22C99.158,342.135,85.36,332.763,73.119,321.697z M288.844,325.224c2.999-4.248,5.832-8.665,8.508-13.225c4.016,3.051,7.92,6.284,11.697,9.7 c-12.24,11.066-26.038,20.437-41.02,27.746C275.443,342.422,282.415,334.332,288.844,325.224z M319.749,311.16 c-4.889-4.461-9.968-8.647-15.226-12.54c14.38-29.417,22.544-63.851,23.537-100.035h38.938 C365.169,241.996,347.552,281.387,319.749,311.16z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                            </span>
                            <input name="domain" type="text" class="form-control" placeholder="Nhập tên miền bạn đang có" aria-label="Tên miền" aria-describedby="basic-addon1">
                            <div id="validationServer03Feedback" class="invalid-feedback domain-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <button href="#" class="btn btn-secondary">Lưu thông tin</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        ready(function() {
            // for new domain
            $('.new-domain-form').submit(function(e) {
                e.preventDefault();

                var form = $(this);

                // loading button
                form.find('button').addClass('disabled')
                    .prepend(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> `);

                // save token
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                }).done(function(response) {
                    console.log(response);
                    if (response.status == 'error') {
                        $('.domain-feedback').html(response.error.domain[0]);
                        form.find('[name=domain]').addClass('is-invalid');
                    } else {
                        form.find('[name=domain]').removeClass('is-invalid');

                        // confirm domain
                        var confirmDomain = new Popup({
                            url: '{{ action('Client\DomainController@confirm') }}',
                            data: {
                                domain: form.find('[name=domain]').val(),
                                type: 'new',
                            }
                        });
                        confirmDomain.load();
                    }

                    // unloading button
                    form.find('button').removeClass('disabled')
                        .find('.spinner-grow').remove();

                    
                }).fail(function(jqXHR, textStatus, errorThrown){
                });
            });

            // for exist domain
            $('.exist-domain-form').submit(function(e) {
                e.preventDefault();

                var form = $(this);

                // loading button
                form.find('button').addClass('disabled')
                    .prepend(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> `);

                // save token
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                }).done(function(response) {
                    console.log(response);
                    if (response.status == 'error') {
                        $('.domain-feedback').html(response.error.domain[0]);
                        form.find('[name=domain]').addClass('is-invalid');
                    } else {
                        form.find('[name=domain]').removeClass('is-invalid');

                        // confirm domain
                        var confirmDomain = new Popup({
                            url: '{{ action('Client\DomainController@confirm') }}',
                            data: {
                                domain: form.find('[name=domain]').val(),
                                type: 'exist',
                            }
                        });
                        confirmDomain.load();
                    }

                    // unloading button
                    form.find('button').removeClass('disabled')
                        .find('.spinner-grow').remove();

                    
                }).fail(function(jqXHR, textStatus, errorThrown){
                });
            });
        });
    </script>
@endsection