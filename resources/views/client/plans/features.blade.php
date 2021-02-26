
<ul class="list-group plan-select">
    <li class="list-group-item {{ isset($website) && $website ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            <strong class="display-5 fs-4 fw-bold text-success me-2">{{ $website }}</strong> Website giới thiệu thương hiệu
        </div>
        @if (isset($website) && $website)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($template) && $website ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            <strong class="display-5 fs-4 fw-bold text-success me-2">{{ $template }}</strong> giao diện website căn bản
        </div>
        @if (isset($template) && $template)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($store) && $website ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            <strong class="display-5 fs-4 fw-bold text-success me-2">{{ $store }}</strong> cửa hàng
        </div>
        @if (isset($store) && $store)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($ecommerce_connect) && $ecommerce_connect ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            Liên kết <strong class="display-5 fs-4 fw-bold text-success mx-2">{{ $ecommerce_connect }}</strong> sàn TMĐT (Lazada, Shopee, Tikki,...)
        </div>
        @if (isset($ecommerce_connect) && $ecommerce_connect)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($shipping) && $shipping ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            Liên kết giao hàng (GHN, GHTK, ViettelPost,...)
        </div>
        @if (isset($shipping) && $shipping)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($emails) && $emails ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            Email marketing @if (isset($emails) && $emails)(<strong class="display-5 fs-4 fw-bold text-success mx-2">{{ $emails }}</strong> emails/tháng) @endif
        </div>
        @if (isset($emails) && $emails)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($payment) && $payment ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            Thanh toán trực tuyến (PayPal, MoMo, Credit Card,...)
        </div>
        @if (isset($payment) && $payment)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
    <li class="list-group-item {{ isset($brand) && $brand ? '' : 'list-group-item-secondary text-muted' }}">
        <div class="me-auto">
            Nhận dạng thương hiệu (Trang vàng, Bộ Công Thương,...)
        </div>
        @if (isset($brand) && $brand)
            <span data-feather="check-square" class="text-success fs-4 d-block float-end mt-1"></span>
        @else
            <span data-feather="x" class="text-secondary fs-4 d-block float-end mt-1"></span>
        @endif
    </li>
</ul>