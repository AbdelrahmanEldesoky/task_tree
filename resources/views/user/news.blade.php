@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <!-- SECTION TITLE -->
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>All News</h2>
                   </div>
              </div>
              @isset($news)
              @foreach ($news as $index=>$new)
              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.{{$index+4}}s">
                      <a href="news-detail.html">
                          <img src="{{$new->image_path}}" class="img-responsive" alt="">
                     </a>
                        <div class="news-info">
                             <span>{{$new->created_at->format('Y-m-d')}}</span>
                             <h3><a href="news-detail.html">{{$new->title}}</a></h3>
                             <p>{{$new->description}}</p>
                        </div>
                   </div>
              </div>
              @endforeach
              @endisset
         </div>
    </div>
</section>


@endsection
