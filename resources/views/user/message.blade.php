@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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


@endsection
