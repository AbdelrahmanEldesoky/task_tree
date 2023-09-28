@extends('layouts.app')
@section('content')
     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                            <h3>{{$advice->title1}}</h3>
                                            <h1>{{$advice->advices1}}</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>{{$advice->title2}}</h3>
                                             <h1>{{$advice->advices2}}</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                            <h3>{{$advice->title3}}</h3>
                                            <h1>{{$advice->advices3}}</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>

     <!-- ABOUT -->
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


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
        <div class="container">
             <div class="row">

                  <div class="col-md-6 col-sm-6">
                       <div class="about-info">
                            <h2 class="wow fadeInUp" data-wow-delay="0.1s">OUR Doctors</h2>
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


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
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


     <!-- MAKE AN Message -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="{{ asset('doctor/images/appointment-image.jpg') }}" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                            <form id="appointment-form" role="form" action="{{ route('message') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Send Message</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" required id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" required id="phone" name="phone" placeholder="Phone">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Title</label>
                                        <input type="text" class="form-control" id="phone" required name="title" placeholder="title">
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="description" required placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit">Send Message</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="{{$contact->map}}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>
@endsection
