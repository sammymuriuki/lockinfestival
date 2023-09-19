
@extends('layouts.master')
@section('title')
Home -
@endsection
@section('content')

<body style="background-color:rgb(186, 202, 73 )">
<div class="home">
        <div class="top-graphic">
            <img src="{{ asset('images/new-cg-logo.png')}}" class="graphic"/>
        </div>

        <div class="festival-logo">
            <a href="/"><img src="{{ asset('images/lock-in-logo.png')}}" class="logo2"/></a>
        </div>

        
        <div class="sidemenu">
            <a href="/about">about</a>
            <a href="/artists"><u>featured </u></a>
            <a href="/livestreams">streams</a>
        </div>

        <div class="map-section">
            <div id="hotspotImg" class="responsive-hotspot-wrap">
           <img  src="{{ asset('images/new-fest-map.png')}}" class="map img-responsive " usemap="#festivalmap"/>

          <div class="hot-spot asylum" x="300" y="473">
            <div class="map-icon bounce"><a href="/radio" class="border"><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/radio" class="w3-btn w3-text-white">Asylum Radio</a></div>
        </div>
        <div class="hot-spot podcast">
            <div class="map-icon bounce"><a href="/podcasts" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/podcasts" class="w3-btn w3-text-white">podcasts</a></div>
        </div>
        <div class="hot-spot photography">
            <div class="map-icon bounce"><a href="/photographers"><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/photographers" class="w3-btn w3-text-white">photography</a></div>
        </div>
        <div class="hot-spot djs-corner">
            <div class="map-icon bounce"><a href="/djs" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/djs" class="w3-btn w3-text-white">Djs</a></div>
        </div>
        <div class="hot-spot film-area" x="300" y="473">
            <div class="map-icon bounce"><a href="/movies" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/movies" class="w3-btn w3-text-white">film area</a></div>
        </div>
        <div class="hot-spot art">
            <div class="map-icon bounce"><a href="/art-gallery" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/art-gallery" class="w3-btn w3-text-white">Art Gallery</a></div>
        </div>
        <div class="hot-spot music">
            <div class="map-icon bounce"><a href="/artists" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/artists" class="w3-btn w3-text-white">performances</a></div>
        </div>
        <div class="hot-spot nairobi">
            <div class="map-icon bounce"><a href="/nairobi-design-week" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/nairobi-design-week" class="w3-btn w3-text-white">Nairobi Design week</a></div>
        </div>
        <!-- <div class="hot-spot magazine">
            <div class="map-icon bounce"><a href="artists.html" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="artists.html" class="w3-btn w3-text-white">Magazine</a></div>
        </div> -->
        <div class="hot-spot games">
            <div class="map-icon bounce"><a href="#" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="#" class="w3-btn w3-text-white">Interactive games</a></div>
        </div>

        <div class="hot-spot webinars">
            <div class="map-icon bounce"><a href="/masterclass" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/masterclass" class="w3-btn w3-text-white">webinars/Live shows</a></div>
        </div>
        <div class="hot-spot vendor">
            <div class="map-icon bounce"><a href="/vendors" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/vendors" class="w3-btn w3-text-white">Stalls/Vendors</a></div>
        </div>
        <div class="hot-spot poets">
            <div class="map-icon bounce"><a href="/poetry" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/poetry" class="w3-btn w3-text-white">poetry</a></div>
        </div>
        <div class="hot-spot book">
            <div class="map-icon bounce"><a href="/in-magazine" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/in-magazine" class="w3-btn w3-text-white">In magazine</a></div>
        </div>
        <div class="hot-spot kiddo">
            <div class="map-icon bounce"><a href="/kidscorner" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/kidscorner" class="w3-btn w3-text-white">kids corner</a></div>
        </div>
        <div class="hot-spot well">
            <div class="map-icon bounce"><a href="/wellness" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/wellness" class="w3-btn w3-text-white">Lifestyle</a></div>
        </div>
        <div class="hot-spot mtura-guy">
            <div class="map-icon bounce"><a href="/mutura" ><i class="fa fa-map-marker "></i></a></div>
            <div class="village"><a href="/mutura" class="w3-btn w3-text-white">mutura guy</a></div>
        </div>
    </div>
    </div>
       

    <div class="countdown-block" id="countdown">
        <h4>Festival Goes Live In</h4>
  
        <div class="w3-panel w3-row-padding" id="time-panel">
          <div class="w3-col l3 m3 s6">
            <div class="date-inner w3-hover-shadow">
            <span class="date-title">Days</span>
            <p id="days"></p>
          </div>
          </div>
  
          <div class="w3-col l3 m3 s6">
            <div class="date-inner">
              <span class="date-title">Hours</span>
            <p id="hrs"></p>
            </div>
          </div>
  
          <div class="w3-col l3 m3 s6">
            <div class="date-inner">
              <span class="date-title">Mins</span>
            <p id="mins"></p>
            </div>
          </div>
  
          <div class="w3-col l3 m3 s6">
            <div class="date-inner">
              <span class="date-title">sec</span>
            <p id="secs"></p>
            </div>
          </div>
        </div>
  
      </div>

        <div class="bottom-graphic">
            <img src="{{ asset('images/new-bottom-graphic.png')}}" class="graphic"/>
        </div>
     </div>

</body>
@endsection