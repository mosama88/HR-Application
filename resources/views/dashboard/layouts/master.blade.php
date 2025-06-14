{{-- @php
    use App\Enums\AdminGenderEnum;
@endphp
<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard') }}/assets/" data-template="vertical-menu-template">

<head>
    @include('dashboard.layouts.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('dashboard.layouts.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('dashboard.layouts.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                     

                        @yield('content')

                        
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('dashboard.layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>

    </div>
    <!-- / Layout wrapper -->

    @include('dashboard.layouts.scripts')
</body>

</html> --}}




{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    @if (app()->getLocale() == 'ar')
        <h4 class="mt-4 text-dark">تحميل</h4>
    @else
        <h4 class="mt-4 text-dark">Loading</h4>
    @endif

@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>
        <ol class="breadcrumb">
            <h1>
                @foreach (generate_breadcrumbs() as $breadcrumb)
                    @if ($loop->last)
                        {{ __('adminlte::menu.' . strtolower($breadcrumb['text'])) }}
                    @else
                        <a href="{{ $breadcrumb['url'] }}">{{ __('adminlte::menu.' . $breadcrumb['text']) }} / </a>
                    @endif
                @endforeach
            </h1>

        </ol>
    </h1>

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/adminlte-rtl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.rtl.min.css">
@endpush

@push('js')
    <script>
        // حل بديل أكثر موثوقية
        function disableButton() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الحفظ';

            // إرسال النموذج تلقائيًا بعد تعطيل الزر
            document.getElementById('storeForm').submit();
        }

        // أو يمكنك استخدام هذا الحدث
        document.getElementById('storeForm').addEventListener('submit', function() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الحفظ';
        });
    </script>
    <script>
        // حل بديل أكثر موثوقية
        function disableButton() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التعديل';

            // إرسال النموذج تلقائيًا بعد تعطيل الزر
            document.getElementById('editForm').submit();
        }

        // أو يمكنك استخدام هذا الحدث
        document.getElementById('editForm').addEventListener('submit', function() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التعديل';
        });
    </script>
@endpush
