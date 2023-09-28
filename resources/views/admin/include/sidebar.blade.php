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
                <a class="d-flex align-items-center" href="{{ route('admin.home') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <hr>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.user.index') }}">
                    <i class="fa fa-user-md"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Users</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.doctor.index') }}">
                    <i class="fa fa-user-md"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Doctors</span>
                </a>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.appointment.index') }}">
                    <i class="fa fa-stethoscope"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Appointments</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.message.index') }}">
                    <i class="fa fa-comment"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Message</span>
                </a>
            </li>
            {{-- <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.contact.index') }}">
                    <i class="fa fa-stethoscope"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Contact Messages</span>
                </a>
            </li> --}}
            <hr>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.about.index') }}">
                    <i data-feather='settings'></i>
                    <span class="menu-title text-truncate" data-i18n="Email"> About</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.news.index') }}">
                    <i class="fa fa-user-md"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">News</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.contact.index') }}">
                    <i class="fa fa-user-md"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</div>
