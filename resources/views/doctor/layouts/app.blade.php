<link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_files/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_files/css/skin-blue.min.css') }}">

@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>
@else
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE.min.css') }}">
@endif

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
    <div class="container d-flex align-items-center" style="min-height: 100vh">
        <div class="box w-100 text-success">
            <div class="row g-5">
                <div class="col-lg-4"></div>

                <div class="col-lg-4 mb-4">

                    <div class=" card-site">
                        <div class=" text-center">
                            <img src="{{ asset('logo_main.png') }}" style="width: 200px">
                        </div>
                        <form class="auth-login-form p-1" action="{{--route('attempt.login')--}}" method="POST">
                            @csrf
                            @include('partials._errors')
                            <div class="form-group mb-4">
                                <label>@lang('site.Email')</label>
                                <input class="form-control" required id="login-email" type="email" name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                @error('email')
                                <p class="error text-danger">dddddddddddddddddddd</p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">

                                <label for="login-password">@lang('site.Password')</label>
                                    <input class="form-control" required id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
                                    @error('password')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                            </div>
                            <a href="{{--route('password.request')--}}" class="float-end">@lang('site.forget_pass')</a>
                            <button class="btn w-100 btn-submit">@lang('site.login')</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
      </div>
{{--<!-- jQuery 3 -->--}}
<script src="{{ asset('dashboard_files/js/jquery.min.js') }}"></script>

{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>

{{--icheck--}}
<script src="{{ asset('dashboard_files/plugins/icheck/icheck.min.js') }}"></script>

{{--<!-- FastClick -->--}}
<script src="{{ asset('dashboard_files/js/fastclick.js') }}"></script>

</body>
</html>
