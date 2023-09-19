
@extends('layouts.master')
@section('title')
Lock In Festival - {{$artist->title}}
@endsection
@section('content')
<body>
<div class="about-image w3-animate-right">
    
    <div class="btn-up-section">
    @if($artist->type == 'artist')
        <a href="/featured" class="pointer">
        <img src="{{URL::asset('images/arrow-back.png')}}" class="pointer"/>
        <h5 class="w3-right w3-margin-left">Go Back</h5>
            </a>
    @else
        <a href="/djs" class="pointer">
        <img src="{{URL::asset('images/arrow-back.png')}}" class="pointer"/>
        <h5 class="w3-right w3-margin-left">Go Back</h5>
        </a>
    @endif

     </div>
     
     <div class="forward-section">
        <a href="{{url('/livestream/'.$artist->slug)}}" class="w3-right forward-btn">
          <h5 class="w3-left w3-margin-right">Livestream</h5>
        <img src="{{URL::asset('images/arrow-forward.png')}}" class=""/>
            </a>
    </div>



   <div class="about-section">
         <h2 class="w3-large w3-margin-left">{{$artist->title}}</h2>
           <div class="w3-row-padding">
               <div class="w3-col l6 m6 s12">
                   <p>
                      {{$artist->description}}
                   </p>
               </div>

               <div class="w3-col l6 m6 s12">
                   <div class="w3-panel">
                     <img src="{{ asset('images/artists/'.$artist->image) }}" class="round-img w3-hover-shadow" style="border-radius: 50%">
                    
                   </div>
               </div>
           </div>
   </div>


 </div>
</body>
      @endsection