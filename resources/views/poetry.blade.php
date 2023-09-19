@extends('layouts.master')
@section('title')
Poetry -
@endsection
@section('content')

<body>
    
    <div class="poetry w3-animate-left">
        
        <div class="btn-up-section">
          <a href="/" class="pointer"><img src="{{ asset('/images/arrow-back.png')}}" class="pointer"/></a>
         </div>
    
       <!-- <div class="logo-section">
         <img src="assets/Images/CGBlackLogo.png" class="logo"/>
       </div> -->
    
       <div class="artists-section">
           <div class="w3-panel glider-contain">
               <div class="w3-row-padding glider">
               @forelse($performances as $performance)
                   <div class="w3-col l3 m6 s12">
                        <div class="artist w3-hover-shadow  w3-margin-bottom">
                          <img src="{{ asset('images/poetry/'.$performance->image)}}" class="artist-pic">
                            <div class="w3-panel">
                            <h3 class="artist-name">{{$performance->title}}</h3>
                                <p class="artist-synopsis">
                                {{Str::limit($performance->description, $limit = 200, $end = '...')}}
                                </p> 
                                <a class="w3-btn w3-text-black mpesa-btn w3-left  w3-margin-left  w3-margin-bottom" style="border-radius: 50%; border: 2px solid black;
                                background-color: rgba(255,255,255,0.6);">Mpesa <br> tip jar </a>

                                <a href="{{url('/poetry/'.$performance->slug)}}" class="w3-btn w3-margin-top  w3-white w3-text-black watch-btn w3-right  w3-margin-right  w3-margin-bottom" style="border-radius: 20px"><i class="fa fa-play"></i> watch film</a>
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

