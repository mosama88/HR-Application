<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li> --}}
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"
                style="font-size: 18px; color: #343a40; font-weight: 600; border-radius: 8px; padding: 10px 15px; transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center;">
                <!-- عنصر لعرض الوقت في الوقت الفعلي -->
                <p class="time-text mt-2" style="transition: opacity 0.3s ease;" id="live-time"> </p>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
        <div class="dropdown">
            <!-- Dropdown Trigger Button -->
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user"></i> {{ auth()->user()->name }}
            </button>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-user mx-1"></i> الملف الشخصى
                    </a>
                </li>
                <li class="dropdown-divider"></li> <!-- Optional separator -->
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mx-1"></i> تسجيل الخروج
                        </button>
                    </form>
                </li>
            </ul>
        </div>



        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
@push('js')
    <script>
        // دالة لتحديث الوقت الحي كل ثانية
        function updateTime() {
            var currentTime = new Date().toLocaleString('ar-EG', {
                hour12: true
            });
            document.getElementById('live-time').innerHTML = 'الوقت الحالي: ' + currentTime;
        }

        // تحديث الوقت كل ثانية
        setInterval(updateTime, 1000);
    </script>
@endpush
