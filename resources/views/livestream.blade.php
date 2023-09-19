@extends('layouts.master')
@section('title')
LiveStream - {{$artist->title}} -
@endsection
@section('content')
<body>
     <div class="livestream w3-animate-right">
        <div class="btn-up-section">
            <a href="/featured" class="pointer">
            <!-- <img src="assets/Images/arrow-back.png" class="pointer"/> -->
        
            <h5 class="w3-right w3-text-white w3-margin-top w3-margin-left">    <span class="w3-text-white"><i class="fa fa-arrow-left"></i></span> return to festival</h5>
                </a>
       </div>
    
    
       <div class="video-section">

        <iframe width="100%" height="100%" src="{{$artist->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          
       </div>
    
    
     </div>
</body>
     @endsection