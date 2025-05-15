@extends('dashboard.layouts.master')
@section('active-financeCalendars', 'active')
@section('title', 'الصفحة الرئيسية')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'السنوات المالية',
        'previousPage' => 'السنوات المالية',
        'urlPreviousPage' => 'financeCalendars.index', //سيتم تغيير لوحة التحكم لاحقآ
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
                        <form id="storeForm">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputname">السنه</label>
                                    <input type="text" class="form-control" id="exampleInputname"
                                        placeholder="أدخل السنه.....">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdesc">وصف السنه</label>
                                    <input type="text" class="form-control" id="exampleInputdesc"
                                        placeholder="أدخل وصف السنه.....">
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputfrom">من</label>
                                        <input type="date" class="form-control" id="exampleInputfrom"
                                            placeholder="أدخل اتاريخ.....">
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="exampleInputto">إلى</label>
                                        <input type="date" class="form-control" id="exampleInputto"
                                            placeholder="أدخل اتاريخ.....">
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" id="submitButton" class="btn btn-primary"> <i
                                        class="far fa-save"></i> حفظ
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
        document.getElementById('storeForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري الحفظ...'; // Optional: Change text while submitting
        });
    </script>
@endpush
