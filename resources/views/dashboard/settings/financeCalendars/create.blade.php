@extends('dashboard.layouts.master')
@section('active-financeCalendars', 'active')
@section('title', 'أضافة سنه مالية')
@push('css')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet"
        href="{{ asset('dashboard') }}/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'السنوات المالية',
        'previousPage' => 'السنوات المالية',
        'urlPreviousPage' => 'dashboard/financeCalendars', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'أضافة سنه مالية جديدة',
    ])

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">أضافة سنه مالية جديده</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dashboard.financeCalendars.store') }}" method="POST" id="storeForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group mb-3 col-2">
                                        <label for="exampleInputname">السنه</label>
                                        <input type="text" name="finance_yr"
                                            class="form-control @error('finance_yr') is-invalid @enderror"
                                            value="{{ old('finance_yr') }}" id="exampleInputname"
                                            placeholder="أدخل السنه.....">
                                        @error('finance_yr')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3 col-10">
                                        <label for="exampleInputdesc">وصف السنه</label>
                                        <input type="text" name="finance_yr_desc"
                                            class="form-control @error('finance_yr_desc') is-invalid @enderror"
                                            id="exampleInputdesc" value="{{ old('finance_yr_desc') }}"
                                            placeholder="أدخل وصف السنه.....">
                                        @error('finance_yr_desc')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group mb-3 col-6">
                                        <label for="start_date" class="form-label">من</label>
                                        <input type="text" name="start_date" value="{{ old('start_date') }}"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            placeholder="YYYY-MM-DD" id="start_date_picker" />
                                        @error('start_date')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3 col-6">
                                        <label for="end_date" class="form-label">إلى</label>
                                        <input type="text" name="end_date" value="{{ old('end_date') }}"
                                            class="form-control @error('end_date') is-invalid @enderror"
                                            placeholder="YYYY-MM-DD" id="end_date_picker" />
                                        @error('end_date')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" id="submitButton" class="btn btn-primary"> <i
                                        class="far fa-save mx-1"></i> حفظ
                                    البيانات</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
    </section>


@endsection
@push('js')
    <script src="{{ asset('dashboard') }}/assets/js/forms-pickers.js"></script>
   
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#start_date_picker", {
                dateFormat: "Y-m-d"
            });

            flatpickr("#end_date_picker", {
                dateFormat: "Y-m-d"
            });
        });
    </script>
@endpush
