<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>لوحة التحكم | @yield('title')</title>
<!-- Logo -->
<link rel="icon" href="{{ asset('dashboard') }}/assets/dist/img/administrativprosecution.png" type="image/x-icon">

<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
    href="{{ asset('dashboard') }}/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/jqvmap/jqvmap.min.css">

<!-- Font Arabic -->
<link rel="stylesheet" href="{{ asset('fonts') }}/stylesheet.css">


<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Bootstrap 4 RTL -->
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
<!-- Custom style for RTL -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/dist/css/custom.css">
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/dist/css/style.css">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/toastr/toastr.min.css">

<!-- flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@stack('css')
<style>
    .select2-container--default .select2-selection--single {
        height: 40px;
        /* لتحديد ارتفاع الحقل */
        /* line-height: 40px; */
        /* لضبط النص في المنتصف */
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 40px;
        /* لضبط السهم */
    }
</style>
