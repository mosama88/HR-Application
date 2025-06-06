@extends('dashboard.layouts.master')
@section('active-employees', 'active')
@section('title', 'الموظفين')
@push('css')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/vendor/libs/select2/select2.css" />
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'الموظفين',
        'previousPage' => 'الموظفين',
        'urlPreviousPage' => 'dashboard/employees', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'أضافة موظف جديد',
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
                            <h5 class="card-header">أضافة موظف جديد</h5>
                            <div class="card-body">




                                <div class="row">
                                    <div class="col">
                                        <div class="nav-align-top mb-3">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-personal" role="tab"
                                                        aria-selected="true">
                                                        بيانات شخصية
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-account" role="tab"
                                                        aria-selected="false">
                                                        بيانات وظيفية
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-social" role="tab"
                                                        aria-selected="false">
                                                        بيانات إضافية
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="form-tabs-personal"
                                                    role="tabpanel">
                                                    <form action="{{ route('dashboard.employees.store') }}" method="POST"
                                                        id="storeForm">
                                                        @csrf <div class="row g-3">
                                                            <!-- كود البصمة -->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">كود بصمة
                                                                    الموظف</label>
                                                                <input type="text"
                                                                    class="form-control @error('fp_code') is-invalid @enderror"
                                                                    name="fp_code"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('fp_code')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <!-- الأسم -->
                                                            <div class="col-md-6 ">
                                                                <label class="form-label" for="formtabs-last-name">اسم
                                                                    الموظف بالكامل <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="name"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    placeholder="Doe" />
                                                                @error('name')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- الجنس -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1"
                                                                    class="form-label">نوع الجنس</label>
                                                                <select
                                                                    class="form-select @error('gender') is-invalid @enderror"
                                                                    name="gender" aria-label="Default select example">
                                                                    <option selected value="">-- أختر نوع الجنس --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('gender')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- الفرع -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">الفرع
                                                                    التابع له الموظف</label>
                                                                <select
                                                                    class="select2 form-select @error('branch_id') is-invalid @enderror"
                                                                    name="branch_id" data-allow-clear="true">
                                                                    <option selected value="">-- أختر الفرع --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('branch_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- المؤهل الدراسي  -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">المؤهل
                                                                    الدراسي</label>
                                                                <select name="qualification_id"
                                                                    class="select2 form-select @error('qualification_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر المؤهل --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('qualification_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!--  سنة التخرج -->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    سنة التخرج </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('qualification_year') is-invalid @enderror"
                                                                    name="qualification_year"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('qualification_year')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- تقدير التخرج -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    تقدير التخرج</label>
                                                                <select
                                                                    class="form-select @error('graduation_estimate') is-invalid @enderror"
                                                                    name="graduation_estimate"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر تقدير التخرج --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('graduation_estimate')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- تخصص  التخرج -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    تخصص التخرج</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('major') is-invalid @enderror"
                                                                    name="major" placeholder="John" />
                                                                @error('major')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- تاريخ الميلاد -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-birthdate">تاريخ
                                                                    الميلاد</label>
                                                                <input type="text" name="birth_date"
                                                                    id="formtabs-birthdate"
                                                                    class="form-control dob-picker @error('birth_date') is-invalid @enderror"
                                                                    placeholder="YYYY-MM-DD" />
                                                                @error('birth_date')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!--  رقم بطاقة الهوية -->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    رقم بطاقة الهوية </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('national_id') is-invalid @enderror"
                                                                    name="national_id"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('national_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!--  مركز اصدار بطاقة الهوية -->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    مركز اصدار بطاقة الهوية </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('national_id_place') is-invalid @enderror"
                                                                    name="national_id_place" placeholder="John" />
                                                                @error('national_id_place')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>



                                                            <!-- تاريخ انتهاء بطاقة الهوية -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-birthdate">تاريخ
                                                                    انتهاء بطاقة الهوية</label>
                                                                <input type="text" name="end_national_id"
                                                                    id="formtabs-birthdate"
                                                                    class="form-control dob-picker @error('end_national_id') is-invalid @enderror"
                                                                    placeholder="YYYY-MM-DD" />
                                                                @error('end_national_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- الحالة الأجتماعية -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    الحالة الأجتماعية</label>
                                                                <select
                                                                    class="form-select @error('social_status') is-invalid @enderror"
                                                                    name="social_status"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر الحالة
                                                                        الأجتماعية --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('social_status')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- عدد الأطفال-->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    عدد الأطفال</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('children_number') is-invalid @enderror"
                                                                    name="children_number"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('children_number')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- فصيلة الدم   -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">فصيلة
                                                                    الدم </label>
                                                                <select name="blood_type_id"
                                                                    class="select2 form-select @error('blood_type_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر نوع فصيلة الدم
                                                                        --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('blood_type_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- الجنسية  -->
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-country">الجنسية</label>
                                                                <select name="nationality_id"
                                                                    class="select2 form-select @error('nationality_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر الجنسية --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('nationality_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- اللغة الاساسية التي يتحدث بها   -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">اللغة
                                                                    الاساسية التي يتحدث بها </label>
                                                                <select name="language_id"
                                                                    class="select2 form-select @error('language_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر اللغة --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('language_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- الديانة -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    الديانة</label>
                                                                <select
                                                                    class="form-select @error('religion') is-invalid @enderror"
                                                                    name="religion" aria-label="Default select example">
                                                                    <option selected value="">-- أختر الديانة --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('religion')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- البريد الالكتروني-->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    البريد الالكتروني</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email" placeholder="John" />
                                                                @error('email')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- الدولة التابع لها الموظف   -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">الدولة
                                                                    التابع لها الموظف</label>
                                                                <select name="country_id"
                                                                    class="select2 form-select @error('country_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر الدولة --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('country_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- المحافظة التابع لها الموظف   -->
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-country">المحافظة
                                                                    التابع لها الموظف</label>
                                                                <select name="governorate_id"
                                                                    class="select2 form-select @error('governorate_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر المحافظة --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('governorate_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- المدينة التابع لها الموظف   -->
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-country">المدينة/المركز</label>
                                                                <select name="city_id"
                                                                    class="select2 form-select @error('city_id') is-invalid @enderror"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر المدينة/المركز
                                                                        --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                                @error('city_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- عنوان الاقامة -->
                                                            <div class="col-md-12">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    عنوان الاقامة </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('address') is-invalid @enderror"
                                                                    name="address" placeholder="John" />
                                                                @error('address')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- هاتف المحمول-->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    هاتف المحمول</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('mobile') is-invalid @enderror"
                                                                    name="mobile"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('mobile')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- هاتف المنزل-->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    هاتف المنزل</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('home_telephone') is-invalid @enderror"
                                                                    name="home_telephone"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('home_telephone')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- هل يمتلك رخصة قيادة -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    هل يمتلك رخصة قيادة</label>
                                                                <select
                                                                    class="form-select @error('driving_license') is-invalid @enderror"
                                                                    name="driving_license"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر الحالة --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('driving_license')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- رقم رخصة القيادة-->
                                                            <div class="col-md-3 ">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    رقم رخصة القيادة</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('driving_License_id') is-invalid @enderror"
                                                                    name="driving_License_id"
                                                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                    placeholder="John" />
                                                                @error('driving_License_id')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- نوع رخصة القيادة  -->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    نوع رخصة القيادة </label>
                                                                <select
                                                                    class="form-select @error('driving_license_type') is-invalid @enderror"
                                                                    name="driving_license_type"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر النوع --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('driving_license_type')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>


                                                            <!-- هل يمتلك أقارب بالعمل-->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    هل يمتلك أقارب بالعمل</label>
                                                                <select
                                                                    class="form-select @error('has_relatives') is-invalid @enderror"
                                                                    name="has_relatives"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر الحالة --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('has_relatives')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- تفاصيل الاقارب -->
                                                            <div class="col-md-12">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    تفاصيل الاقارب </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('relatives_details') is-invalid @enderror"
                                                                    name="relatives_details" placeholder="John" />
                                                                @error('relatives_details')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!--هل يمتلك اعاقة / عمليات سابقة-->
                                                            <div class="col-md-3 ">
                                                                <label for="exampleFormControlSelect1" class="form-label">
                                                                    هل يمتلك اعاقة / عمليات سابقة</label>
                                                                <select
                                                                    class="form-select @error('has_disabilities') is-invalid @enderror"
                                                                    name="has_disabilities"
                                                                    aria-label="Default select example">
                                                                    <option selected value="">-- أختر الحالة --
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                </select>
                                                                @error('has_disabilities')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- تفاصيل الاعاقة / عمليات سابقة -->
                                                            <div class="col-md-12">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    تفاصيل الاعاقة / عمليات سابقة </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('disabilities_details') is-invalid @enderror"
                                                                    name="disabilities_details" placeholder="John" />
                                                                @error('disabilities_details')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <!-- الدولة  -->
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-country">الدولة</label>
                                                                <select class="select2 form-select"
                                                                    data-allow-clear="true">
                                                                    <option selected value="">-- أختر نوع الدولة --
                                                                    </option>
                                                                    <option value="Australia">Australia</option>
                                                                </select>
                                                            </div>


                                                            <div class="col-md-6 select2-primary">
                                                                <label class="form-label"
                                                                    for="formtabs-language">اللغات</label>
                                                                <select id="formtabs-language" class="select2 form-select"
                                                                    multiple>
                                                                    <option value="en" selected>English</option>
                                                                    <option value="fr" selected>French</option>
                                                                    <option value="de">German</option>
                                                                    <option value="pt">Portuguese</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-birthdate">Birth
                                                                    Date</label>
                                                                <input type="text" id="formtabs-birthdate"
                                                                    class="form-control dob-picker"
                                                                    placeholder="YYYY-MM-DD" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-phone">Phone
                                                                    No</label>
                                                                <input type="text" id="formtabs-phone"
                                                                    class="form-control phone-mask"
                                                                    placeholder="658 799 8941"
                                                                    aria-label="658 799 8941" />
                                                            </div>
                                                        </div>


                                                </div>
                                                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                                    <form>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-username">Username</label>
                                                                <input type="text" id="formtabs-username"
                                                                    class="form-control" placeholder="john.doe" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-email">Email</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="formtabs-email"
                                                                        class="form-control" placeholder="john.doe"
                                                                        aria-label="john.doe"
                                                                        aria-describedby="formtabs-email2" />
                                                                    <span class="input-group-text"
                                                                        id="formtabs-email2">@example.com</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-password-toggle">
                                                                    <label class="form-label"
                                                                        for="formtabs-password">Password</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <input type="password" id="formtabs-password"
                                                                            class="form-control"
                                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                            aria-describedby="formtabs-password2" />
                                                                        <span class="input-group-text cursor-pointer"
                                                                            id="formtabs-password2"><i
                                                                                class="bx bx-hide"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-password-toggle">
                                                                    <label class="form-label"
                                                                        for="formtabs-confirm-password">Confirm
                                                                        Password</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <input type="password"
                                                                            id="formtabs-confirm-password"
                                                                            class="form-control"
                                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                            aria-describedby="formtabs-confirm-password2" />
                                                                        <span class="input-group-text cursor-pointer"
                                                                            id="formtabs-confirm-password2"><i
                                                                                class="bx bx-hide"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-twitter">Twitter</label>
                                                            <input type="text" id="formtabs-twitter"
                                                                class="form-control"
                                                                placeholder="https://twitter.com/abc" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-facebook">Facebook</label>
                                                            <input type="text" id="formtabs-facebook"
                                                                class="form-control"
                                                                placeholder="https://facebook.com/abc" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-google">Google+</label>
                                                            <input type="text" id="formtabs-google"
                                                                class="form-control"
                                                                placeholder="https://plus.google.com/abc" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-linkedin">Linkedin</label>
                                                            <input type="text" id="formtabs-linkedin"
                                                                class="form-control"
                                                                placeholder="https://linkedin.com/abc" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-instagram">Instagram</label>
                                                            <input type="text" id="formtabs-instagram"
                                                                class="form-control"
                                                                placeholder="https://instagram.com/abc" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-quora">Quora</label>
                                                            <input type="text" id="formtabs-quora"
                                                                class="form-control"
                                                                placeholder="https://quora.com/abc" />
                                                        </div>
                                                    </div>
                                                    <div class="pt-4">
                                                        <x-create-button-component></x-create-button-component>

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /.card-body -->


                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>


@endsection
@push('js')
    <!-- Vendors JS -->
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('dashboard') }}/assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->

    <!-- Page JS -->
    <script src="{{ asset('dashboard') }}/assets/js/form-layouts.js"></script>
@endpush
