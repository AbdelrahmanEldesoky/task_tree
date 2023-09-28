@extends('doctor.layouts.admin')
@section('title','Dashboard |Admin')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/admin/dashboard/css/dataTables.bootstrap4.min.css') }}" />
@endpush
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section>
                <div class="card">
                    <div class="card-header d-sm-flex d-block">
                        <div class="me-auto mb-sm-0  text-primary">
                            <h4 class="card-title mb-0 text-primary">Messages</h4>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>title</th>
                                    <th>description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($messages)
                                @foreach ($messages as $index=>$message)
                                <tr>
                                    <td>
                                        {{$index+1}}
                                    </td>
                                    <td>
                                      {{$messages->name}}
                                    </td>
                                    <td>
                                      {{$messages->phone}}
                                    </td>
                                    <td>
                                        {{$messages->title}}
                                      </td>
                                      <td class="w-100" style="border: 1px solid;
                                      border-radius: 3px;
                                      padding: 10px;">
                                        {{$messages->description}}
                                      </td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('assets/admin/app-assets/js/fetchRecord.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>

<script src="{{  asset('assets/admin/dashboard/js/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('assets/admin/dashboard/js/dataTables.bootstrap4.min.js')}}"></script>


@endpush


