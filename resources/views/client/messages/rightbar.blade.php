
  <div class="tab-header">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="home" aria-selected="true">
          Khách hàng
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="home" aria-selected="true">
          Khách hàng
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row mt-4 mx-0">
          <div class="col-md-12 order-md-1 pb-3">
            <div class="d-flex align-items-center sidebar-contact">
                <img class="avatar" src="{{ $contact->picture }}" />
                <div class="ms-3">
                    <h4 class="mb-1">{{ $contact->name() }}</h4>
                    <p class="mb-0 pt-0 contact-status text-muted small">{{ $contact->getStatus() }}</p>
                </div>
                <div class="text-right ms-auto">
                  <button class="btn btn-primary me-1">Đơn hàng</button>
                </div>
            </div>
            <form class="needs-validation contact-form" novalidate="">
              @csrf
  
              <input type="hidden" name="id" value="{{ $contact->id }}" />
  
              <div class="row mt-3">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Tên</label>
                  <input type="text" name="first_name" value="{{ $contact->first_name }}" class="form-control" id="firstName" placeholder="Tên" value="{{ $contact->first_name }}" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Họ</label>
                  <input type="text" name="last_name" value="{{ $contact->last_name }}" class="form-control" id="lastName" placeholder="Họ" value="{{ $contact->last_name }}" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
      
              <div class="mb-3">
                <label for="username">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="email" value="{{ $contact->email }}" class="form-control" id="username" placeholder="Email" required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>
  
              <div class="mb-3">
                <label for="username">Điện thoại</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="material-icons-outlined">phonelink_ring</i></span>
                  </div>
                  <input type="text" name="mobile" value="{{ $contact->mobile }}" class="form-control" id="username" placeholder="Số điện thoại" required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" value="{{ $contact->address }}" class="form-control" id="address" placeholder="123 Cộng Hòa, Phường 17" required="">
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
      
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="country">Quốc gia</label>
                  <select class="custom-select d-block w-100" id="country" required="">
                    <option value="">Chọn...</option>
                    <option value="vn" selected>Việt Nam</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="state">Tỉnh/Thành</label>
                  <select class="custom-select d-block w-100" id="state" required="">
                    <option value="">Chọn...</option>
                    <option>TP. Hồ Chí Minh</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="zip">Quận/Huyện</label>
                  <select class="custom-select d-block w-100" id="state" required="">
                    <option value="">Chọn...</option>
                    <option>Quận Gò Vấp</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống với địa chỉ liên hệ</label>
              </div>
  
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Đồng bộ thông tin theo Facebook</label>
              </div>
              
              <hr class="mb-4">
              <div class="text-center">
                <button class="btn btn-primary me-1">Tạo đơn hàng</button>
                <button class="btn btn-secondary">Xóa liên hệ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
        <div class="order-container mb-4 pt-3">
          <div class="m-5 text-center">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<script>
  // order management
  var order = new Order();
  order.url = '{{ action('Client\MessageController@customerOrder', ['id' => $contact->id]) }}';
  
  order.load();


  // contact update
  $('.contact-form :input').on('change', function() {
    var form = $(this).closest('form');
    var data = form.serialize();

    console.log(data);

    $.ajax({
        url: '{{ action('Client\MessageController@contactSave', $contact->id) }}', 
        type: 'POST',
        data: data
    }).done(function(res){
      console.log('Contact updated:');
      console.log(res);

      // change status
      $('.contact-status').html(res.status);
    }).fail(function(e){
      console.log(e);
    });
  });

</script>