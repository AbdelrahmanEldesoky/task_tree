@extends('admin.layouts.admin')
@section('title','Dashboard |Admin')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/dashboard/css/dataTables.bootstrap4.min.css') }}"/>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Doctors</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.doctor.create') }}" class="btn btn-info">Create Doctor</a>
                </div>
            </div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="row-grouping-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body mt-2">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table table-striped projects">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Specialitie</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($doctors)
                                                @foreach ($doctors as $index=>$doctor)
                                                <tr>
                                                    <td>
                                                        {{$index+1}}
                                                    </td>
                                                    <td>
                                                      {{$doctor->name}}
                                                    </td>
                                                    <td>
                                                      {{$doctor->email}}
                                                    </td>
                                                    <td>
                                                        {{$doctor->phone}}
                                                      </td>
                                                      <td>
                                                        {{$doctor->information[0]->specialities}}
                                                      </td>
                                                    <td>
                                                        <form action="{{ route('admin.doctor.destroy', $doctor->id) }}" method="post" style="display: inline-block">
                                                            {{ csrf_field() }}
                                                            {{ method_field('delete') }}
                                                            <button type="submit" class="btn btn-danger delete-btn btn-sm"><i class="fa fa-trash"></i> delete</button>
                                                        </form><!-- end of form -->
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
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{  asset('assets/admin/dashboard/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{  asset('assets/admin/dashboard/js/dataTables.bootstrap4.min.js')}}"></script>

    @if(in_array('data-table',$assets ?? []))
        <script type="text/javascript"
                src="{{ asset('assets/admin/vendor/datatables/dataTables.buttons.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin/vendor/datatables/pdfmake.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin/vendor/datatables/vfs_fonts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin/vendor/datatables/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin/vendor/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/admin/vendor/datatables/buttons.server-side.js')}}"></script>
    @endif

    <script>

    </script>
@endpush
