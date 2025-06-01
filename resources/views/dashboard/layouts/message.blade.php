@if (session('success') || session('error'))
    <div class="bs-toast toast toast-ex animate__animated my-2 fade bg-primary animate__tada hide {{ session('success') ? 'bg-success' : 'bg-danger' }}"
        role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">{{ session('success') ? 'Success' : 'Error' }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body"> {{ session('success') ?? session('error') }}
        </div>
    </div>
@endif


@push('js')
    @if (session('success') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toastEl = document.querySelector('.toast');
                var bsToast = new bootstrap.Toast(toastEl);
                bsToast.show();
            });
        </script>
    @endif
@endpush
