@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- NEWS DETAIL -->
     <section id="team" data-stellar-background-ratio="1">
        <div class="container">
             <div class="row">

                  <div class="col-md-6 col-sm-6">
                       <div class="about-info">
                            <h2 class="wow fadeInUp" data-wow-delay="0.1s">All Doctors</h2>
                       </div>
                  </div>

                  <div class="clearfix"></div>
                  @isset($doctors)
                  @foreach ($doctors as $index=>$doctor)
                    <div class="col-md-4 col-sm-6">

                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.{{$index+2}}s">
                        <a href="{{route('doctor-detail',$doctor->id)}}">   <img src="{{$doctor->information[0]->image_path}}" class="img-responsive" alt=""></a>
                                 <div class="team-info">
                                     <a href="{{route('doctor-detail',$doctor->id)}}"><h3>{{$doctor->name}}</h3> </a>
                                      <p>{{$doctor->information[0]->specialities}}</p>
                                      <div class="team-contact-info">
                                           <p><i class="fa fa-phone"></i>{{$doctor->phone}}</p>
                                           <p><i class="fa fa-envelope-o"></i>{{$doctor->email}}</p>
                                      </div>

                             </div>
                       </div>

                  </div>
                  @endforeach
                  @endisset
             </div>
        </div>
   </section>

@endsection
