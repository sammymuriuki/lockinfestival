@extends('layouts.master')
@section('title')
{{$vendor->title}} -
@endsection
@section('content')
<body>

    <div class="gallery w3-animate-left">
        
        <div class="btn-up-section">
          <a href="/artworks" class="pointer"><img src="{{ asset('/images/arrow-back.png') }}" class="pointer"/></a>
         </div>
        
       <div class="gallery-section">
        <br><br><br>
           <div class="w3-panel">
               <div class="w3-row-padding">
               @forelse($artworks as $artwork)
                   <div class="w3-col l6 m6 s12">
                        <div class="artist w3-hover-shadow  w3-margin-bottom">
                        <img src="{{ asset('images/gallery/'.$artwork->image) }}" class="art-pic">
                            <div class="w3-panel">
                                <h3 class="art-name">{{$artwork->title}}</h3>
                                <div class="w3-row-padding">
                                    <div class="w3-col l8 m8 s12">
                                        <p class="art-synopsis">
                                        {{$artwork->description}}
                                        </p>
                                    
                                    </div>
                                    <div class="w3-col l4 m4 s12">
                                        <a href="#" class="w3-btn w3-margin-top w3-text-black watch-btn w3-right  w3-margin-right  w3-margin-bottom" style="border-radius: 20px;background-color: #B2F4EC;">+ buy</a>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="w3-col l12 m12 s12">
                        <div class="artist  w3-margin-bottom">
                        
                            <div class="w3-panel" style="text-align:center; padding-top:100px;">
                                <h2>No Items</h2>
                                <h3> <a href="/artworks" class="pointer"> < Go Back</a></h3>
                            </div>
                            
                        </div>
                    </div>
                     
                @endforelse
        
                 
               </div>
           </div>
       </div>
    
       <!-- <div class="design-section2">
           <img src="assets/Images/memphis_02.png" class="memphis"/>
         </div> -->
     </div>
</body>
<script>
        (function($){
          $(document).on('contextmenu', 'img', function() {
              return false;
          })
        })(jQuery);
        </script>
     @endsection