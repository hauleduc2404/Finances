@if(session()->has('fail'))
    <div class="toasts-top-right fixed alert-fail-cs">
        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Thất bại</strong>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="toast-body">{{ session()->get('fail') }}</div>
        </div>
    </div>
    <script>
        setTimeout(function (){
            $('.alert-fail-cs').fadeOut()
        }, 3000)

    </script>
@endif
