@extends('layouts.master')
@section('title')
LiveStream
@endsection
@section('content')
<body>
<div class="main-container w3-animate-left">

<!-- <div class='loader'></div> -->

  <div class="btn-up-section">
    <a href="/" class="pointer"><img src="{{ asset('/images/arrow-back.png')}}" class="pointer"/></a>
   </div>

 <div class="livestreams-section">
     <div class="w3-panel">
         <div class="w3-row-padding">
             <div class="w3-col l4 m6 s12">
                  <div class="artist w3-margin-bottom">
                      <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
             </div>
             </div>

             <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="artist">
                  <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                  </div>
             </div>
             <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="artist">
                  <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                  </div>
          </div>
              <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="artist">
                  <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                  </div>
          </div>
          <div class="w3-col l4 m6 s12 w3-margin-bottom">
              <div class="artist">
                  <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                </div>
        </div>
          <div class="w3-col l4 m6 s12 w3-margin-bottom">
            <div class="artist">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
              </div>
      </div>
      <div class="w3-col l4 m6 s12 w3-margin-bottom">
          <div class="artist">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
            </div>
    </div>
    <div class="w3-col l4 m6 s12 w3-margin-bottom">
        <div class="artist">
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
          </div>
  </div>
    <div class="w3-col l4 m6 s12 w3-margin-bottom">
      <div class="artist">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
        </div>
</div>
         </div>
         
     </div>

 </div>

 <!-- <div class="design-section2">
     <img src="assets/Images/memphis_02.png" class="memphis"/>
   </div> -->
</div>
        </body>
     @endsection