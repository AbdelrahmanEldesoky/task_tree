@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section id="about">
    <style>
        #about {
          background: url('../images/about-bg.jpg') no-repeat top center;
          background-size: cover;
          padding-top: 150px;
          padding-bottom: 150px;
        }
      </style>

    <div class="container">
           <div class="row">
                <div class="col-md-6 col-sm-6">
                     <div class="about-info">
                          <h2 class="wow fadeInUp" data-wow-delay="0.6s">{{$about->title}}</h2>
                          <div class="wow fadeInUp" data-wow-delay="0.8s">
                               <p>{{$about->description}}</p>
                          </div>
                     </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <img src="{{$about->image_path}}" data-wow-delay="0.3s" style="width:70%" alt="">
                </div>
            </div>
 </section>

@endsection
