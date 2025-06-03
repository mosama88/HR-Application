@extends('dashboard.layouts.master')
@section('active-countries', 'active')
@section('title', 'البلاد')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'البلاد',
        'previousPage' => 'البلاد',
        'urlPreviousPage' => 'dashboard/countries', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'أضافة بلد جديدة',
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
                        <form action="{{ route('dashboard.countries.store') }}" method="POST" id="storeForm">
                            @csrf
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">أضافة بلد جديدة</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">أسم البلد</label>
                                                <input name="name" type="text" value="{{ old('name') }}"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="exampleFormControlInput1" placeholder="مثال:بلد....">
                                                @error('name')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">كود
                                                    البلد</label>
                                                <input name="country_code" value="{{ old('country_code') }}"
                                                    class="form-control @error('country_code') is-invalid @enderror"
                                                    type="text" id="exampleFormControlReadOnlyInput1"
                                                    placeholder="EG...">
                                                @error('country_code')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
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
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>


@endsection
@push('js')
@endpush
