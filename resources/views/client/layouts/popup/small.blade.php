{{-- <div class="popup-container">
    <div class="popup-header">
        <i class="lnr lnr-arrow-left back"></i>
        <h2 class="title">@yield('title')</h2>
        <i class="lnr lnr-cross close"></i>
    </div>
    <div class="popup-body scrollbar-inner">
        <div class="popup-content">
            <!-- display flash message -->
            @include('common.errors')

            <!-- main inner content -->
            @yield('content')
        </div>
    </div>
</div> --}}

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">@yield('title')</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- display flash message -->
            @include('common.errors')

            <!-- main inner content -->
            @yield('content')
        </div>
        @hasSection('footer')
            <div class="modal-footer">
                @yield('footer')
            </div>
        @endif
    </div>
</div>