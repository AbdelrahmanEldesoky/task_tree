@extends('admin.layouts.admin')
@section('title','Dashboard |Admin')
@push('css')
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
                                <h4 class="card-title">Content</h4>
                            </div>
                            <div class="card-body mt-2">
                                <form class="auth-login-form p-1" action="{{ route('admin.contact.update',1) }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" required type="text" value="{{$contact->name}}" name="name"
                                                    placeholder="Hero Grinder Logo - Concept Art, Luke Viljoen"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control" required type="text" value="{{$contact->phone}}" name="phone"
                                                    placeholder="Hero Grinder Logo - Concept Art, Luke Viljoen"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>facebook</label>
                                                <input class="form-control" required type="text" value="{{$contact->facebook}}" name="facebook"
                                                    placeholder="Hero Grinder Logo - Concept Art, Luke Viljoen"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>LinkedIn</label>
                                                <input class="form-control" required type="text" value="{{$contact->linkedIn}}" name="linkedIn"
                                                    placeholder="Hero Grinder Logo - Concept Art, Luke Viljoen"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>Map</label>
                                                <input class="form-control" required type="text" value="{{$contact->map}}" name="map"
                                                    placeholder="Hero Grinder Logo - Concept Art, Luke Viljoen"/>
                                                @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>description</label>
                                                <textarea class="form-control"  type="text" name="description" style=" text-align: left;" rows="4" cols="50">
                                                    {{$contact->description}}
                                                </textarea>
                                                    @error('email')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary submit_btn">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
