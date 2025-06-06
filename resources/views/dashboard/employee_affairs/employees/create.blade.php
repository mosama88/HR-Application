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
                                                        بيانات الخدمة العسكرية
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-social" role="tab"
                                                        aria-selected="false">
                                                        بيانات وظيفية
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-addtional" role="tab"
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
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-email">البريد
                                                                    الالكتروني</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="formtabs-email"
                                                                        name="email"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        placeholder="john.doe" aria-label="john.doe"
                                                                        aria-describedby="formtabs-email2" />
                                                                    <span class="input-group-text"
                                                                        id="formtabs-email2">@example.com</span>
                                                                </div>
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

                                                            <!-- ملاحظات علي الموظف -->
                                                            <div class="col-md-12">
                                                                <label class="form-label" for="formtabs-first-name">
                                                                    ملاحظات علي الموظف </label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control @error('notes') is-invalid @enderror"
                                                                    name="notes" placeholder="John" />
                                                                @error('notes')
                                                                    <span class="invalid-feedback text-right" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>



                                                        </div>
                                                </div>

                                                <!-- بيانات الخدمة العسكرية -->
                                                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                                    <div class="row g-3">

                                                        <!-- حالة الخدمة العسكرية -->
                                                        <div class="col-md-3 ">
                                                            <label for="exampleFormControlSelect1" class="form-label">
                                                                حالة الخدمة العسكرية
                                                            </label>
                                                            <select
                                                                class="form-select @error('military') is-invalid @enderror"
                                                                name="military" aria-label="Default select example">
                                                                <option selected value="">-- أختر الحالة --
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                            @error('military')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- تاريخ اعفاء الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">تاريخ اعفاء
                                                                الخدمة العسكرية
                                                            </label>
                                                            <input type="text" name="military_exemption_date"
                                                                id="formtabs-birthdate"
                                                                class="form-control dob-picker @error('military_exemption_date') is-invalid @enderror"
                                                                placeholder="YYYY-MM-DD" />
                                                            @error('military_exemption_date')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- سبب اعفاء الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-first-name">
                                                                سبب اعفاء الخدمة العسكرية </label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control @error('military_exemption_reason') is-invalid @enderror"
                                                                name="military_exemption_reason" placeholder="John" />
                                                            @error('military_exemption_reason')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- سبب ومدة تأجيل الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-first-name">
                                                                سبب ومدة تأجيل الخدمة العسكرية </label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control @error('military_postponement_reason') is-invalid @enderror"
                                                                name="military_postponement_reason" placeholder="John" />
                                                            @error('military_postponement_reason')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- تاريخ بداية الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">تاريخ بداية
                                                                الخدمة العسكرية
                                                            </label>
                                                            <input type="text" name="military_service_start_date"
                                                                id="formtabs-birthdate"
                                                                class="form-control dob-picker @error('military_service_start_date') is-invalid @enderror"
                                                                placeholder="YYYY-MM-DD" />
                                                            @error('military_service_start_date')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- تاريخ نهاية الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">تاريخ نهاية
                                                                الخدمة العسكرية

                                                            </label>
                                                            <input type="text" name="military_service_end_date"
                                                                id="formtabs-birthdate"
                                                                class="form-control dob-picker @error('military_service_end_date') is-invalid @enderror"
                                                                placeholder="YYYY-MM-DD" />
                                                            @error('military_service_end_date')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- سلاح الخدمة العسكرية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-first-name">
                                                                سلاح الخدمة العسكرية </label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control @error('military_wepon') is-invalid @enderror"
                                                                name="military_wepon" placeholder="John" />
                                                            @error('military_wepon')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--  بيانات وظيفية -->
                                                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                                    <div class="row g-3">


                                                        <!-- تاريخ التعيين -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">تاريخ
                                                                التعيين
                                                            </label>
                                                            <input type="text" name="hiring_date"
                                                                id="formtabs-birthdate"
                                                                class="form-control dob-picker @error('hiring_date') is-invalid @enderror"
                                                                placeholder="YYYY-MM-DD" />
                                                            @error('hiring_date')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- الحالة الوظيفية -->
                                                        <div class="col-md-3 ">
                                                            <label for="exampleFormControlSelect1" class="form-label">
                                                                الحالة الوظيفية
                                                            </label>
                                                            <select
                                                                class="form-select @error('functional_status') is-invalid @enderror"
                                                                name="functional_status"
                                                                aria-label="Default select example">
                                                                <option selected value="">-- أختر الحالة --
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                            @error('functional_status')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- الدرجه الوظيفية -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-country">الدرجه
                                                                الوظيفية</label>
                                                            <select name="job_grade_id"
                                                                class="select2 form-select @error('job_grade_id') is-invalid @enderror"
                                                                data-allow-clear="true">
                                                                <option selected value="">-- أختر الدرجه --
                                                                </option>
                                                                <option value="Australia">Australia</option>
                                                            </select>
                                                            @error('job_grade_id')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- الادارة التابع لها الموظف -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-country">الادارة
                                                                التابع لها الموظف</label>
                                                            <select name="department_id"
                                                                class="select2 form-select @error('department_id') is-invalid @enderror"
                                                                data-allow-clear="true">
                                                                <option selected value="">-- أختر الادارة --
                                                                </option>
                                                                <option value="Australia">Australia</option>
                                                            </select>
                                                            @error('department_id')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!--  وظيفة الموظف -->
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-country">وظيفة
                                                                الموظف</label>
                                                            <select name="job_category_id"
                                                                class="select2 form-select @error('job_category_id') is-invalid @enderror"
                                                                data-allow-clear="true">
                                                                <option selected value="">-- أختر الوظيفة --
                                                                </option>
                                                                <option value="Australia">Australia</option>
                                                            </select>
                                                            @error('job_category_id')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- هل له بصمة حضور وانصراف -->
                                                        <div class="col-md-3 ">
                                                            <label for="exampleFormControlSelect1" class="form-label">
                                                                هل له بصمة حضور وانصراف
                                                            </label>
                                                            <select
                                                                class="form-select @error('has_attendance') is-invalid @enderror"
                                                                name="has_attendance" aria-label="Default select example">
                                                                <option selected value="">-- أختر الحالة --
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                            @error('has_attendance')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- هل شفت ثابت -->
                                                        <div class="col-md-3 ">
                                                            <label for="exampleFormControlSelect1" class="form-label">
                                                                هل شفت ثابت
                                                            </label>
                                                            <select
                                                                class="form-select @error('has_fixed_shift') is-invalid @enderror"
                                                                name="has_fixed_shift"
                                                                aria-label="Default select example">
                                                                <option selected value="">-- أختر الحالة --
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                            @error('has_fixed_shift')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <!-- أنواع الشفتات -->
                                                        <div class="col-md-3 ">
                                                            <label for="exampleFormControlSelect1" class="form-label">
                                                                أنواع الشفتات
                                                            </label>
                                                            <select
                                                                class="form-select @error('shifts_type_id') is-invalid @enderror"
                                                                name="shifts_type_id" aria-label="Default select example">
                                                                <option selected value="">-- أختر الحالة --
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                            @error('shifts_type_id')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <!-- عدد ساعات العمل اليومي-->
                                                        <div class="col-md-3 ">
                                                            <label class="form-label" for="formtabs-first-name">
                                                                عدد ساعات العمل اليومي</label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control @error('daily_work_hour') is-invalid @enderror"
                                                                name="daily_work_hour"
                                                                oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                placeholder="John" />
                                                            @error('daily_work_hour')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <!--  راتب الموظف الشهري -->
                                                        <div class="col-md-3 ">
                                                            <label class="form-label" for="formtabs-first-name">
                                                                راتب الموظف الشهري</label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control @error('daily_work_hour') is-invalid @enderror"
                                                                name="daily_work_hour"
                                                                oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                                                placeholder="John" />
                                                            @error('daily_work_hour')
                                                                <span class="invalid-feedback text-right" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="formtabs-twitter">Twitter</label>
                                                            <input type="text" id="formtabs-twitter"
                                                                class="form-control"
                                                                placeholder="https://twitter.com/abc" />
                                                        </div>
                                                    </div>
                                                    <div class="pt-4">

                                                    </div>
                                                </div>

                                                <!--  بيانات إضافية -->
                                                <div class="tab-pane fade" id="form-tabs-addtional" role="tabpanel">
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
