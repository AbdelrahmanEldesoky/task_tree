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
                                <form class="auth-login-form p-1" action="{{ route('admin.news.store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>title</label>
                                                <input class="form-control" required type="text" name="title"
                                                    placeholder="How Targeted Drugs Can Vanquish a Virulent Leukemia" />
                                                @error('title')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>description</label>
                                                <input class="form-control" required type="text" name="description"
                                                    placeholder="For patients with acute myeloid leukemia (AML), especially those who are older or have relapsed/refractory disease, standard chemotherapy treatments often"/>
                                                @error('description')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-4 text-right">
                                            <button class="btn btn-info">save</button>
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
