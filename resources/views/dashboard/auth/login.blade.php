@extends('dashboard.auth.layouts.master')
@section('title', 'صفحة تسجيل الدخول')
@section('content')
    @include('dashboard.layouts.message')

    <form action="{{ route('login.store') }}" method="POST" id="loginForm">
        @csrf
        <div class="mb-3">
            <label for="text" name="username" class="form-label">أسم المستخدم</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="text"
                name="text-username" placeholder="Enter username" autofocus />
            @error('username')
                <span class="invalid-feedback text-right" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">كلمة المرور</label>
                <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control @error('username') is-invalid @enderror"
                    name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                @error('password')
                    <span class="invalid-feedback text-right" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> تذكرنى </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" id="submitButton" type="submit">تسجيل
                الدخول</button>
        </div>
    </form>
@endsection
