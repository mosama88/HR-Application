@extends('dashboard.layouts.master')
@section('active-branches', 'active')
@section('title', 'عرض بيانات الفرع')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'الفروع',
        'previousPage' => 'الفروع',
        'urlPreviousPage' => 'dashboard/branches', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'عرض بيانات الفرع',
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
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">عرض بيانات الفرع</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">أسم الفرع</label>
                                            <input readonly="" name="name" value="{{ $branch->name }}" type="text"
                                                class="form-control"
                                                id="exampleFormControlInput1" placeholder="مثال:فرع....">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlReadOnlyInput1" class="form-label">هاتف
                                                الفرع</label>
                                            <input readonly="" name="phones"
                                                class="form-control"
                                                value="{{ $branch->phones }}" type="text"
                                                id="exampleFormControlReadOnlyInput1" placeholder="010...">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlReadOnlyInput1" class="form-label">البريد
                                                الالكترونى
                                            </label>
                                            <input readonly="" name="email"
                                                class="form-control"
                                                value="{{ $branch->email }}" type="text"
                                                id="exampleFormControlReadOnlyInput1" placeholder="p@p.com...">
                                        </div>
                                    </div>



                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlReadOnlyInput1" class="form-label">عنوان الفرع
                                        </label>
                                        <input readonly="" name="address"
                                            class="form-control"
                                            value="{{ $branch->address }}" type="text"
                                            id="exampleFormControlReadOnlyInput1" placeholder="21 ش...">
                                    </div>



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
