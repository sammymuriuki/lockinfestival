
@extends('layouts.master')
@section('title')
{{$movie->title}} -
@endsection
@section('content')
 <body>
<div class="movie-stream">
        <div class="btn-up-section">
            <a href="{{url($movie->type)}}" class="pointer">
            <h4 class="w3-right w3-text-white w3-margin-top w3-margin-left">   
                 <span class="w3-text-white"><i class="fa fa-arrow-left"></i></span>
                 Go Back</h4>

                </a>
           
       </div>
    
    
       <div class="movie-section">
        <!-- <video data-dashjs-player autoplay src="{{$movie->video_link}}" controls></video> -->
        <iframe width="100%" height="100%"  src="{{$movie->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
     
         </div>
</body>
@endsection