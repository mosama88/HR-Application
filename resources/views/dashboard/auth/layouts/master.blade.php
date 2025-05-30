<!DOCTYPE html>
<html>

<head>
    @include('dashboard.auth.layouts.css')
</head>

<body class="hold-transition login-page"
    style="
    background: url({{ asset('dashboard') }}/assets/dist/img/hr-backlogin.webp) no-repeat center center fixed;
    background-size: cover;
    margin: 0;">
    <!-- Semi-transparent overlay -->
    <div
        style="
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
        z-index: -1;
    ">
    </div>

    <div class="login-box">
        <div class="login-logo">
            <span style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.5);">
                <b>مستشفى الحياة<br></b> إدارة شئون العاملين
            </span>
        </div>

        <div class="card" style="background-color: rgba(255, 255, 255, 0.9);"> <!-- 90% white opacity -->
            <div class="card-body login-card-body">
                <h4 class="login-box-msg">قم بتسجيل الدخول</h4>

                <div class="mb-3 text-center">
                    <img src="{{ asset('dashboard') }}/assets/dist/img/hr-manager.jfif" alt="AdminLTE Logo"
                        class="elevation-3"
                        style="
                    width: 100px;
                    height: 100px;
                    object-fit: contain;
                    border-radius: 50%;
                    border: 3px solid rgba(0,0,0,0.1);
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                 "
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
                </div>


                @yield('content')

                <div class="social-auth-links text-center mb-3">
                    <p>- أو -</p>

                    <img src="{{ asset('dashboard') }}/assets/dist/img/ECU Online How to Become a Human Resources Manager.avif"
                        alt="وحدة التحول الرقمى" class="elevation-3"
                        style="
                    width: 50px;
                    height: 50px;
                    object-fit: contain;
                    border-radius: 50%;
                    border: 3px solid rgba(0,0,0,0.1);
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                 "
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
                    التواصل مع
                    مدير إدارة الموارد البشرية

                </div>
            </div>
        </div>
    </div>

    @include('dashboard.auth.layouts.js')

</body>

</html>
