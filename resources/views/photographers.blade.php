@extends('layouts.master')
@section('title')
Photographers -
@endsection
@section('content')
    <body>
    
    <div class="artists w3-animate-left">
        
        <div class="btn-up-section">
          <a href="home.html" class="pointer"><img src="{{ asset('/images/arrow-back.png')}}" class="pointer"/></a>
         </div>
    
       <!-- <div class="logo-section">
         <img src="assets/Images/CGBlackLogo.png" class="logo"/>
       </div> -->
    
       <div class="artists-section">
           <div class="w3-panel glider-contain">
               <div class="w3-row-padding glider">
               @forelse($vendors as $vendor)
                   <div class="w3-col l3 m6 s12">
                        <div class="artist w3-hover-shadow  w3-margin-bottom">
                          <a href="{{url('/photographers/'.$vendor->slug)}}"> <img src="{{ asset('images/vendors/'.$vendor->image) }}" class="artist-pic"></a>
                            <div class="w3-panel">
                            <h3 class="artist-name"> {{$vendor->title}}</h3>
                            
                                <p class="artist-synopsis">
                                {{Str::limit($vendor->description, $limit = 200, $end = '...')}}  
                                <br>
                                  <span class="w3-right w3-margin-right"><u><a href="{{url('/photographers/'.$vendor->slug)}}">read more</a></u></span>
                                </p>
                              
                                <a href="{{url('/photographers/'.$vendor->slug)}}" class="w3-btn w3-margin-top  w3-white w3-text-yellow watch-btn w3-right  w3-margin-right  w3-margin-bottom" style="border-radius: 20px">View Photos</a>
                        </div>
                   </div>
                   </div>
               @empty
                <div class="w3-col l12 m12 s12">
                        <div class="artist  w3-margin-bottom">
                        
                            <div class="w3-panel" style="text-align:center; padding-top:100px; color:white">
                                <h2>No Items</h2>
                                <h3> <a href="/artworks" class="pointer"> < Go Back</a></h3>
                            </div>
                            
                        </div>
                    </div>
                     
                @endforelse
                   
                   
              
               </div>
               <button class="glider-prev">&laquo;</button>
               <button class="glider-next">&raquo;</button>
           </div>
    
       </div>
      
       <div class="logo-bottom">
       <a href="/"><img src="{{ asset('/images/lock-in-logo.png')}}" class="logo2"/></a>
      </div>
     </div>
        </body>
  
@endsection