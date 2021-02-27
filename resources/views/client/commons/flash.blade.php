{{-- <script>
    @foreach (['success'] as $msg)
        @if(Session::has($msg))
            $(document).ready(function() {
                notify("{{ $msg }}", '{{ trans('messages.notify.' . $msg)}}', '{!! preg_replace('/[\r\n]+/', ' ', Session::get('alert-' . $msg)) !!}');
            });

        @endif
    @endforeach

    @if (request()->session()->get('user-activated'))
        $(document).ready(function() {
            // Success alert
            swal({
                title: "{!! request()->session()->get('user-activated') !!}",
                text: "",
                confirmButtonColor: "#00695C",
                type: "success",
                allowOutsideClick: true,
                confirmButtonText: "{{ trans('messages.ok') }}",
                customClass: "swl-success",
                html:true
            });

        });
        <?php request()->session()->forget('user-activated'); ?>
    @endif
</script> --}}

@foreach (['success'] as $msg)
    @if(Session::has($msg))
        <div class="alert alert-{{ $msg }} mt-3">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <span data-feather="check-circle" class="text-success fs-2"></span>
                </div>
                <div class="">
                    <h5 class="mb-1">Thành công</h5>
                    <p class="mb-0">{{ Session::get($msg) }}</p>
                </div>
            </div>
        </div>
    @endif
@endforeach
