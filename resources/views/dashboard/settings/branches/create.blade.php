@extends('dashboard.layouts.master')
@section('active-branches', 'active')
@section('title', 'الصفحة الرئيسية')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'الفروع',
        'previousPage' => 'الفروع',
        'urlPreviousPage' => 'dashboard/branches', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'أضافة فرع جديد',
    ])

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dashboard.branches.store') }}" method="POST" id="storeForm">
                            @csrf

                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">أضافة فرع جديد</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">أسم الفرع</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="مثال:فرع....">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">هاتف
                                                    الفرع</label>
                                                <input class="form-control" type="text"
                                                    id="exampleFormControlReadOnlyInput1" placeholder="010...">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">البريد
                                                    الالكترونى
                                                </label>
                                                <input class="form-control" type="text"
                                                    id="exampleFormControlReadOnlyInput1" placeholder="p@p.com...">
                                            </div>
                                        </div>



                                        <div class="col-md-12 mb-3">
                                            <label for="exampleFormControlReadOnlyInput1" class="form-label">عنوان الفرع
                                            </label>
                                            <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                                placeholder="010...">
                                        </div>



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
    <script>
        document.getElementById('storeForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري الحفظ...'; // Optional: Change text while submitting
        });
    </script>
@endpush
