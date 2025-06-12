{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/adminlte-rtl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.rtl.min.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
