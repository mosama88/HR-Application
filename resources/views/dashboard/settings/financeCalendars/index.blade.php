@php
    use App\Enums\FinanceCalendarsIsOpen;
@endphp
@extends('dashboard.layouts.master')
@section('active-financeCalendars', 'active')
@section('title', 'الصفحة الرئيسية')
@push('css')
    <style>
        .btn-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 6px;
            padding: 0;
        }
    </style>
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'السنوات المالية',
        'previousPage' => 'لوحة التحكم',
        'urlPreviousPage' => 'index', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'جدول السنوات المالية',
    ])

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('dashboard.financeCalendars.create') }}"
                                    class="btn btn-block text-white btn-info"> <i class="fas fa-edit mx-1"></i>
                                    أضافة</a>
                            </h3>

                            <h4> جدول السنوات المالية </h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>السنه المالية</th>
                                            <th>وصف السنه</th>
                                            <th>من</th>
                                            <th>الى</th>
                                            <th>الحالة</th>
                                            <th>أضافة بواسطة</th>
                                            <th>تعديل بواسطة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @forelse ($data as $info)
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $info->finance_yr }}</td>
                                                <td>{{ $info->finance_yr_desc }}</td>
                                                <td>{{ $info->start_date }}</td>
                                                <td>{{ $info->end_date }}</td>
                                                <td>
                                                    @if ($info->is_open == FinanceCalendarsIsOpen::Open)
                                                        <span class="badge bg-success">مفعل</span>
                                                    @elseif ($info->is_open == FinanceCalendarsIsOpen::Pending)
                                                        <span class="badge bg-warning">معلق</span>
                                                    @else
                                                        <span class="badge bg-danger">مؤرشف</span>
                                                    @endif
                                                </td>
                                                <td>{{ $info->createdBy->name }}</td>
                                                <td>
                                                    @if ($info->updated_by > 0)
                                                        {{ $info->updatedBy->name }}
                                                    @else
                                                        لا يوجد تحديث
                                                    @endif

                                                </td>

                                                <td>
                                                    @include('dashboard.partials.actions', [
                                                        'name' => 'financeCalendars',
                                                        'name_id' => $info->id,
                                                    ])
                                                </td>
                                        </tr>
                                    @empty
                                        عفوآ لا توجد بيانات
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
    </section>


@endsection
@push('js')
@endpush
