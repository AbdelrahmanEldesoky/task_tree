@extends('doctor.layouts.admin')
@section('title','User')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/dashboard/css/dataTables.bootstrap4.min.css') }}"/>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="row-grouping-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom d-flex justify-content-between">
                                    <h4 class="card-title">Users</h4>
                                    <div>
                                    {{-- <a href="{{route('admin.hospitals.create')}}"
                                       class="btn btn-primary">Add More</a> --}}
                                    </div>
                                </div>
                                <div class="card-body mt-2">
                                    <div class="table-responsive">
                                        <table class="table table-striped projects">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>mobile</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($appointments)
                                                @foreach ($appointments as $index=>$appointment)
                                                <tr>
                                                    <td>
                                                        {{$index+1}}
                                                    </td>
                                                    <td>
                                                      {{$appointment->user->name}}
                                                    </td>
                                                    <td>
                                                      {{$appointment->user->email}}
                                                    </td>
                                                    <td>
                                                      {{$appointment->user->phone}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@push('js')

    {{--    <script src="{{  asset('assets/admin/dashboard/js/jquery.min.js')}}"></script>--}}
    <script src="{{  asset('assets/admin/dashboard/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{  asset('assets/admin/dashboard/js/dataTables.bootstrap4.min.js')}}"></script>

@endpush
