@php
    use App\Enums\AdminGenderEnum;
    use App\Enum\EmployeeGender;
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dashboard') }}/assets/dist/img/administrativprosecution.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">هيئة النيابة الأدارية</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->gender == AdminGenderEnum::Male)
                    <img src="{{ asset('dashboard') }}/assets/dist/img/employees-default.png"
                        class="img-circle elevation-2" alt="User Image">
                @elseif (Auth::user()->gender == AdminGenderEnum::Female)
                    <img src="{{ asset('dashboard') }}/assets/dist/img/employees-female-default.png"
                        class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{ asset('dashboard') }}/assets/dist/img/avatar5.png" class="img-circle elevation-2"
                        alt="User Image">
                @endif

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->username }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link @yield('active-dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الصفحة الرئيسية
                        </p>
                    </a>

                </li>
                <li
                    class="nav-item has-treeview {{ request()->is('dashboard/financeCalendars*') || request()->is('dashboard/admin_panel_settings*') || request()->is('jobGrades*') || request()->is('jobTypes*') ? 'menu-open' : '' }} ">
                    <a href="#"
                        class="nav-link {{ request()->is('dashboard/financeCalendars*') || request()->is('dashboard/admin_panel_settings*') || request()->is('branches*') || request()->is('jobGrades*') || request()->is('jobTypes*') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            الأعدادت
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('dashboard.admin_panel_settings.index') }}"
                                class="nav-link @yield('active-admin_panel_settings')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>إعدادت الشركة</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('dashboard.financeCalendars.index') }}"
                                class="nav-link @yield('active-financeCalendars')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>السنوات المالية</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
