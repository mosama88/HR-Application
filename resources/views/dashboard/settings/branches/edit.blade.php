@extends('dashboard.layouts.master')
@section('active-branches', 'active')
@section('title', 'تعديل الفرع')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'السنوات المالية',
        'previousPage' => 'السنوات المالية',
        'urlPreviousPage' => 'dashboard/branches', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'تعديل الفرع ',
    ])

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">تعديل الفرع </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dashboard.branches.update', $financeCalendar->id) }}" method="POST"
                            id="updateForm">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="exampleInputname">السنه</label>
                                        <input type="text" name="finance_yr"
                                            class="form-control @error('finance_yr') is-invalid @enderror"
                                            value="{{ old('finance_yr', $financeCalendar->finance_yr) }}"
                                            id="exampleInputname" placeholder="أدخل السنه.....">
                                        @error('finance_yr')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-10">
                                        <label for="exampleInputdesc">وصف السنه</label>
                                        <input type="text" name="finance_yr_desc"
                                            class="form-control @error('finance_yr_desc') is-invalid @enderror"
                                            id="exampleInputdesc"
                                            value="{{ old('finance_yr_desc', $financeCalendar->finance_yr_desc) }}"
                                            placeholder="أدخل وصف السنه.....">
                                        @error('finance_yr_desc')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputfrom">من</label>
                                        <input type="date" name="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            value="{{ old('start_date', $financeCalendar->start_date) }}"
                                            id="exampleInputfrom" placeholder="أدخل اتاريخ.....">
                                        @error('start_date')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="exampleInputto">إلى</label>
                                        <input type="date" name="end_date"
                                            class="form-control @error('end_date') is-invalid @enderror"
                                            value="{{ old('end_date', $financeCalendar->end_date) }}" id="exampleInputto"
                                            placeholder="أدخل اتاريخ.....">
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
                                <button type="submit" id="submitButton" class="btn btn-info"> <i class="fas fa-marker"></i>
                                    تعديل
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
    <script>
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري التعديل...'; // Optional: Change text while submitting
        });
    </script>
@endpush
