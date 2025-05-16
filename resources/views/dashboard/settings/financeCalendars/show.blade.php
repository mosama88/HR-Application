@extends('dashboard.layouts.master')
@section('active-financeCalendars', 'active')
@section('title', 'عرض السنه المالية')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'السنوات المالية',
        'previousPage' => 'السنوات المالية',
        'urlPreviousPage' => 'financeCalendars.index', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'عرض السنه المالية ',
    ])

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">عرض السنه المالية لسنه {{ $financeCalendar->finance_yr }} </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-2">
                                    <label for="exampleInputname">السنه</label>
                                    <input readonly type="text" name="finance_yr" class="form-control bg-white"
                                        value="{{ old('finance_yr', $financeCalendar->finance_yr) }}" id="exampleInputname"
                                        placeholder="أدخل السنه.....">
                                </div>

                                <div class="form-group col-10">
                                    <label for="exampleInputdesc">وصف السنه</label>
                                    <input readonly type="text" name="finance_yr_desc" class="form-control bg-white"
                                        id="exampleInputdesc"
                                        value="{{ old('finance_yr_desc', $financeCalendar->finance_yr_desc) }}"
                                        placeholder="أدخل وصف السنه.....">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInputfrom">من</label>
                                    <input readonly type="date" name="start_date" class="form-control bg-white"
                                        value="{{ old('start_date', $financeCalendar->start_date) }}" id="exampleInputfrom"
                                        placeholder="أدخل اتاريخ.....">
                                </div>

                                <div class="form-group col-6">
                                    <label for="exampleInputto">إلى</label>
                                    <input readonly type="date" name="end_date" class="form-control bg-white"
                                        value="{{ old('end_date', $financeCalendar->end_date) }}" id="exampleInputto"
                                        placeholder="أدخل اتاريخ.....">
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->


                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
    </section>


@endsection
@push('js')
@endpush
