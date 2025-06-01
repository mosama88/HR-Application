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
                                                <input name="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="exampleFormControlInput1" placeholder="مثال:فرع....">
                                                @error('name')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">هاتف
                                                    الفرع</label>
                                                <input name="phones"
                                                    class="form-control @error('phones') is-invalid @enderror"
                                                    type="text" id="exampleFormControlReadOnlyInput1"
                                                    placeholder="010...">
                                                @error('phones')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">البريد
                                                    الالكترونى
                                                </label>
                                                <input name="email"
                                                    class="form-control @error('email') is-invalid @enderror" type="text"
                                                    id="exampleFormControlReadOnlyInput1" placeholder="p@p.com...">
                                                @error('email')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-12 mb-3">
                                            <label for="exampleFormControlReadOnlyInput1" class="form-label">عنوان الفرع
                                            </label>
                                            <input name="address"
                                                class="form-control @error('address') is-invalid @enderror" type="text"
                                                id="exampleFormControlReadOnlyInput1" placeholder="21 ش...">
                                            @error('address')
                                                <span class="invalid-feedback text-right" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
