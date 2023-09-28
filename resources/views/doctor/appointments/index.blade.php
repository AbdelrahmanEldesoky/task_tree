@extends('doctor.layouts.admin')
@section('title','Dashboard |Admin')
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
                                    <h4 class="card-title">Appointments</h4>
                                </div>
                                <div class="card-body mt-2">
                                    <div class="table-responsive">
                                         <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                            doctor
                        </th>
                        <th>
                            user
                        </th>
                        <th>
                            from
                        </th>
                        <th>
                            action
                        </th>
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

                        </td>
                        <td>
                            {{$appointment->user->name}} - {{$appointment->user->phone}}
                        </td>
                        <td>
                            {{$appointment->status}}
                        </td>

                        <td>
                            @if($appointment->status == 'processing')
                            <form action="{{ route('admin.appointment.update', $appointment->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" value="done" name="status">
                                <button type="submit" class="btn btn-success  btn-sm"><i class="fa fa-"></i> Done</button>
                            </form>
                            <form action="{{ route('admin.appointment.update', $appointment->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" value="cancel" name="status">
                                <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-warning"></i>cancel</button>
                            </form>
                            @endif
                            <form action="{{ route('admin.appointment.destroy', $appointment->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete-btn btn-sm"><i class="fa fa-trash"></i> Delete</button>
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

    {{--    <script src="{{  asset('assets/admin/dashboard/js/jquery.min.js')}}"></script>--}}
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



@endpush
