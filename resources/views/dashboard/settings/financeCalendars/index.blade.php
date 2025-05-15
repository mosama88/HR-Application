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

                            <h4> السنوات المالية </h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>السنه المالية</th>
                                            <th>وصف السنه</th>
                                            <th>من</th>
                                            <th>الى</th>
                                            <th>أضافة بواسطة</th>
                                            <th>تعديل بواسطة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>183</td>
                                            <td>183</td>
                                            <td>183</td>
                                            <td>183</td>
                                            <td>183</td>
                                            <td>
                                                <div style="display: flex; gap: 10px;">
                                                    <a href="" class="btn btn-actions btn-sm btn-primary"
                                                        title="تعديل">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="" class="btn btn-actions btn-sm btn-info"
                                                        title="عرض">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <form action="" method="POST"
                                                        onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-actions btn-sm btn-danger"
                                                            title="حذف">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
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
