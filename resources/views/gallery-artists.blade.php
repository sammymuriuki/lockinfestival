@extends('layouts.master')
@section('title')
Featured -
@endsection
@section('content')
<body>
    
    <div class="gallery-artists w3-animate-left">
        
        <div class="btn-up-section">
          <a href="/" class="pointer"><img src="{{ asset('images/arrow-back.png')}}" class="pointer"/></a>
         </div>
    
       <!-- <div class="logo-section">
         <img src="assets/Images/CGBlackLogo.png" class="logo"/>
       </div> -->
    
       <div class="artists-section">
           <div class="w3-panel glider-contain">
               <div class="w3-row-padding glider">
                @foreach($artists as $artist)
                   <div class="w3-col l3 m6 s12">
                        <div class="artist w3-hover-shadow  w3-margin-bottom">
                        <a href="{{url('/artworks/artists/'.$artist->slug)}}"><img src="{{ asset('images/galleryartists/'.$artist->image) }}" class="artist-pic"></a>
                            <div class="w3-panel">
                            <h3 class="artist-name">{{$artist->title}}</h3>
                                <p class="artist-synopsis">{{Str::limit($artist->description, $limit = 200, $end = '...')}}
                                </p> 
                                <a href="{{url('/gallery/'.$artist->slug)}}" class="w3-btn w3-margin-top  w3-white w3-text-black watch-btn w3-right  w3-margin-right  w3-margin-bottom" style="border-radius: 20px">visit gallery</a>
                        </div>
                    </div>
                   </div>
                 @endforeach
                  
        
               </div>
               <button class="glider-prev">&laquo;</button>
           <button class="glider-next">&raquo;</button>
           </div>
          </div>

       <div class="logo-bottom">
        <a href="/"><img src="{{ asset('images/logo-bottom.png')}}" class="logo2"/></a>
         </div>
     </div>
        </body>
     @endsection