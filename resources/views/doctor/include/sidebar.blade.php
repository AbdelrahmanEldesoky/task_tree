<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{env('APP_URL')}}">
                <p style="text-align:center;">
                    <img src="{{ asset('logo.png') }}"  style="width: 40%" alt="Logo"></p>
                </a></li>
        </ul>
    </div>
    <hr>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('doctors.home') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <hr>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('doctors.user.index') }}">
                    <i class="fa fa-user-md"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Users</span>
                </a>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('doctors.appointment.index') }}">
                    <i class="fa fa-stethoscope"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Appointments</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('doctors.information.index') }}">
                    <i class="fa fa-comment"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">information</span>
                </a>
            </li>
        </ul>
    </div>
</div>
