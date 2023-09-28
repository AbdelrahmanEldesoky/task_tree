@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- NEWS DETAIL -->
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <div class="news-image">
                                   <img src="{{$doctor->information[0]->image_path}}" class="img-responsive" alt="">
                              </div>
                              <h3>{{$doctor->name}}</h3>
                              <p>{{$doctor->information[0]->description}}</p>
                              <p>{{$doctor->information[0]->about}}</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4>{{$doctor->name}}</h4>
                                   <p>{{$doctor->information[0]->title_job}}</p>
                              </div>

                              <div class="recent-post">
                                   <h5>{{$doctor->information[0]->specialities}}</h5>
                                   <p>{{$doctor->information[0]->description}}</p>
                              </div>
                              
                              <div class="news-tags">
                                   @if(!auth()->user())
                                   <li class="appointment-btn"><a href="{{route('login_user')}}">Book Now</a></li>

                                   @else
                                   <li class="appointment-btn"><a onclick="showSweetAlert({{ $doctor->id }}, 'from')">Book Now</a></li>
                                   @endif
                              </div>
                            <p>{{$doctor->information[0]->about}}</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <script>
        function showSweetAlert(doctor_id, from) {
            Swal.fire({
                title: 'Book Now',
                html:
                '<form method="POST" action="{{ route('appointment') }}" class="" enctype="multipart/form-data">' +
                    '@csrf' +
                    '<input id="swal-input1" type="date" required name="from" class="swal2-input" value="' + from + '">' +
                    '<input id="swal-input2" type="hidden" name="doctor_id" value="' + doctor_id + '">' +
                    '<button type="submit" class="btn btn-primary submit_btn">Submit</button>' +
                '</form>',
                confirmButtonText: 'return back'
            });
        }
    </script>
@endsection
