@extends('admin.layouts.admin')
@section('title','Doctor |Detail')
@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <main class="container mb-3 mt-1 card">


                    <div class="row g-5">

                        <div class="col-lg-12 ">

                            <div class="card-site" >
                                <div class=" text-center mb-3">
                                    <h1 class="GraphikArabic-Black-Web text-white">
                                        @lang('site.register')
                                    </h1>
                                </div>
                                <form class="auth-login-form p-1" action="{{ route('admin.doctor.store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>name</label>
                                                <input class="form-control" required type="text" name="name"
                                                    placeholder="Abdelrahman El-Desoky" />
                                                @error('name')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>email</label>
                                                <input class="form-control" required type="email" name="email"
                                                    placeholder="dev.desoky@gmail.com"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>phone</label>
                                                <input class="form-control" required type="number" name="phone"
                                                    placeholder="01200816003"/>
                                                @error('phone')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>Specialities</label>
                                                <input class="form-control" required type="text" name="specialities"
                                                    placeholder="Neurologists"/>
                                                @error('specialities')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>state</label>
                                                <select name="state">
                                                  <option value="male" selected>Male</option>
                                                  <option value="female">Female</option>
                                                </select>
                                                @error('state')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-4 text-right">
                                            <button class="btn btn-info">register</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </main>

            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script type="text/javascript">
        $(".select2").select2({});
    </script>
@endpush
