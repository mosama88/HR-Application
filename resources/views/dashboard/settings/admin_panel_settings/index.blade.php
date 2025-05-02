@extends('dashboard.layouts.master')
@section('active-dashboard', 'active')
@section('title', 'الصفحة الرئيسية')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">لوحة التحكم</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->

    <!-- /.content -->


@endsection
@push('js')
@endpush
