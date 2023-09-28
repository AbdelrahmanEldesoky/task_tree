@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
