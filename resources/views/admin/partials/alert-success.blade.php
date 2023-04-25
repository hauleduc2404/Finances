@if(session()->has('success'))
    <div class="toasts-top-right fixed alert-success-cs">
        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Thành công</strong>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="toast-body">{{ session()->get('success') }}</div>
        </div>
    </div>
    <script>
        setTimeout(function (){
            $('.alert-success-cs').fadeOut()
        }, 2000)

    </script>
@endif
