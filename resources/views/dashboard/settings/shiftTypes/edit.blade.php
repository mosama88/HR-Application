@php
    use App\Enums\StatusActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('active-shiftTypes', 'active')
@section('title', 'تعديل بيانات الفرع')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->
    @include('dashboard.layouts.breadcrumb', [
        'pageTitle' => 'الفروع',
        'previousPage' => 'الفروع',
        'urlPreviousPage' => 'dashboard/branches', //سيتم تغيير لوحة التحكم لاحقآ
        'currentPage' => 'تعديل بيانات الفرع',
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
                                <h5 class="card-header">تعديل بيانات الفرع</h5>
                                <form action="{{ route('dashboard.shiftTypes.update', $branch->slug) }}" method="POST"
                                    id="updateForm">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">نوع الشفت</label>
                                                <select name="type"
                                                    class="form-select @error('type') is-invalid @enderror"
                                                    id="exampleFormControlSelect1" aria-label="Default select example">
                                                    <option selected="">-- أختر الحالة--</option>
                                                    <option @if (old('type') == ShiftTypesEnum::MORNING) selected @endif
                                                        value="{{ ShiftTypesEnum::MORNING }}">
                                                        {{ ShiftTypesEnum::MORNING->label() }}
                                                    </option>
                                                    <option @if (old('type') == ShiftTypesEnum::NIGHT) selected @endif
                                                        value="{{ ShiftTypesEnum::NIGHT }}">
                                                        {{ ShiftTypesEnum::NIGHT->label() }}
                                                    </option>
                                                    <option @if (old('type') == ShiftTypesEnum::FULLTIME) selected @endif
                                                        value="{{ ShiftTypesEnum::FULLTIME }}">
                                                        {{ ShiftTypesEnum::FULLTIME->label() }}
                                                    </option>
                                                </select>
                                                @error('type')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">من
                                                    الساعه</label>
                                                <input type="text" name="from_time"
                                                    class="form-control flatpickr-input @error('from_time') is-invalid @enderror"
                                                    placeholder="HH:MM" id="from_time" readonly="readonly"
                                                    onchange="calculateHours()">
                                                @error('from_time')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">إلى
                                                    الساعه</label>
                                                <input type="text" name="to_time"
                                                    class="form-control flatpickr-input  @error('to_time') is-invalid @enderror"
                                                    placeholder="HH:MM" id="to_time" readonly="readonly"
                                                    onchange="calculateHours()">
                                                @error('to_time')
                                                    <span class="invalid-feedback text-right" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="exampleFormControlReadOnlyInput1" class="form-label">عدد
                                                    الساعات</label>
                                                <input type="text" name="total_hours"
                                                    class="form-control @error('total_hours') is-invalid @enderror"
                                                    id="total_hours" readonly="readonly">
                                                @error('total_hours')
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
                            <button type="submit" id="submitButton" class="btn btn-info"> <i
                                    class="fas fa-marker mx-1"></i>
                                تعديل
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
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = 'جاري التعديل...'; // Optional: Change text while submitting
        });
    </script>
@endpush
