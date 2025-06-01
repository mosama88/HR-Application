@php

    use App\Enums\FinanceClnPeriodsIsOpen;

@endphp
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
        'urlPreviousPage' => 'dashboard/financeCalendars', //سيتم تغيير لوحة التحكم لاحقآ
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

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الشهر</th>
                                        <th>بداية الشهر</th>
                                        <th>نهاية الشهر</th>
                                        <th>عدد الأيام</th>
                                        <th>حالة الشهر</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($financeClnPeriods as $financeClnPeriod)
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($financeClnPeriod->year_and_month)->translatedFormat('F') }}
                                            </td>
                                            <td>{{ $financeClnPeriod->start_date_m }}</td>
                                            <td>{{ $financeClnPeriod->end_date_m }}</td>
                                            <td>{{ $financeClnPeriod->number_of_days }}</td>
                                            <td>
                                                @if ($financeClnPeriod->is_open == FinanceClnPeriodsIsOpen::Pending)
                                                    <span class="badge bg-warning">
                                                        {{ FinanceClnPeriodsIsOpen::Pending->label() }}
                                                    </span>
                                                @elseif($financeClnPeriod->is_open == FinanceClnPeriodsIsOpen::Open)
                                                    <span class="badge bg-success">
                                                        {{ FinanceClnPeriodsIsOpen::Open->label() }}
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        {{ FinanceClnPeriodsIsOpen::Archived->label() }}
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        لا توجد بيانات
                                    @endforelse


                                </tbody>
                            </table>

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
