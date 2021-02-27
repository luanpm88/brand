<ul class="nav nav-pills nav-fill wizard my-4 shadow-sm">
    <li class="nav-item">
        <a class="nav-link" data-step="domain" aria-current="page" href="#">
            <h4 class="fs-5 display-4 fw-normal mb-1">Bước 1</h4>
            <p class="mb-0">Đăng ký tên miền</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-step="plan" aria-current="page" href="#">
            <h4 class="fs-5 display-4 fw-normal mb-1">Bước 2</h4>
            <p class="mb-0">Chọn gói dịch vụ</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-step="checkout" aria-current="page" href="#">
            <h4 class="fs-5 display-4 fw-normal mb-1">Bước 3</h4>
            <p class="mb-0">Thanh toán</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">
            <h4 class="fs-5 display-4 fw-normal mb-1">Bước 4</h4>
            <p class="mb-0">Bắt đầu</p>
        </a>
    </li>
</ul>
<div class="my-3 text-center">
    <img width="200px" src="{{ url('image/divider2.png') }}" />
</div>

<script>
    ready(function() {
        $('[data-step={{ $step }}]').addClass('active');
    });
</script>