    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('dashboard') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="{{ asset('dashboard') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('dashboard') }}/assets/js/dashboards-analytics.js"></script>

    <!-- flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ar.js"></script>


    <!-- Toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    @stack('js')
    <script>
        document.getElementById('storeForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري الحفظ...'; // Optional: Change text while submitting
        });

        //التعديل
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري التعديل...'; // Optional: Change text while submitting
        });
    </script>
