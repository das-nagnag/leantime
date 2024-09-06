<dialog class="modal scroll-py-5" {{ $attributes }}>
    <div class="modal-box w-fit min-w-60 min-h-16 max-w-none mt-xl mb-xl max-sm:modal-bottom max-sm:w-full">
        <div class="modal-loader text-center"><span class="loading loading-ring loading-lg text-primary"></span></div>
        <div class="modal-box-content">
            {{ $slot }}
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
