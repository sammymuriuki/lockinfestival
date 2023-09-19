
@extends('layouts.master')
@section('title')
About -
@endsection
@section('content')
<body>
<div class="about-lockin-image w3-animate-left">
   
    <div class="btn-up-section">
        <a href="/" class="pointer">
        <img src="{{URL::asset('images/arrow-back.png')}}" class="pointer"/>
        <h5 class="w3-right w3-margin-left w3-text-white">return to festival</h5>
            </a>
     </div>

     <div class="about-lockin">
            <div class="w3-row-padding">
              
                <div class="w3-col l6 m12 s12 w3-right">
                    <h3 class="w3-text-white w3-xxlarge  w3-animate-left">about</h3>
                       <pre><p class="w3-text-white ">Creatives Garage in partnership with other supportive brands, have come together 
to design and implement the LockIn festival, a virtual 3-day arts and culture 
event from 25th April to 1st May 2020. The idea emerged as a reaction to the 
current financial disaster faced by creatives. 
Rather than give up hope, through innovation, they chose to come together and 
create a virtual space for the enjoyment and promotion of music, art, films, 
performing arts, crafts, podcasting, as well as tackle mental health through 
intentional webinars and workshops. The event is aimed at having creatives , 
especially those considered underground, earn some money during this time through 
incorporating tip jars and donation options during performances and on the 
LockIn Festival website respectively.
It's free for everyone to join by simply signing up on www.lockinfestival.org
                    
The festival features artists from Kenya, Nigeria, France, Cameroon, Sweden, 
Jordan, USA, Zimbabwe, Belgium, UK and Ireland.
                    
<strong>About Creatives Garage</strong>                  
Creatives Garage is a multidisciplinary collective space for
Creatives to network, share ideas, collaborate, learn, gain market accessibility
and push boundaries. Our goal is to create a thriving ecosystem that impacts 
investing opportunities to deliver financial and social double bottom-line 
returns. We work with visual artists,performing artists and tech innovators 
who are social change agents in the society.
</p><pre>
                </div>
            </div>

            <div class="bottom-section">
  <div class="w3-panel">
    <div class="input">
      <h2>stay connected</h2>
      @if(session()->has('message'))
    <div >
    <strong><i>{{ session()->get('message') }}</i></strong>
    </div>
@endif
@foreach ($errors->all() as $error)
<div ><strong><i> Error: {{ $error }}</i></strong></div>
     @endforeach
      <p>Sign up and we will let you know when the festival goes live</p>
      <form method="POST"  action="{{ route('addmail') }}">
        <input type="email" class="w3-input" name="email" placeholder="Email">

        <button class="submit-btn">Submit</button>
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
      </form>
    </div>
  </div>

  <div class="w3-panel">
    <h2>Our Partners</h2>

    <div class="partners-section">
      <div class="w3-row-padding">

      <div class="w3-col l3 m3 s6">
         <a href="http://creativesgarage.org" target="_blank"><img src="{{ asset('/images/partners-logos/CGLogo.png')}}" style="width: 120%;"  class="partner-logo"></a>

        </div>

        <div class="w3-col l3 m3 s6">
            <a href="https://254brewing.com" target="_blank"><img src="{{ asset('/images/partners-logos/254brewing.png')}}" style="width: 60%;"  class="partner-logo"></a>
           
       </div>

        <div class="w3-col l3 m3 s6">
            <a href="https://mymovies.africa/" target="_blank"><img src="{{ asset('/images/partners-logos/MyMovieAfrica.png')}}" style="width: 70%;"  class="partner-logo"></a>
            </div>
      <div class="w3-col l3 m3 s6">
          <a href="http://phatafrica.com/2017/"  target="_blank"><img src="{{ asset('/images/partners-logos/PHAT!buzz@19yrs-Logo-1.png')}}"  style="width: 90%;"   class="partner-logo"> </a>
      </div>

      </div>
      <div class="w3-row-padding" style="padding-top:10px">
    
   
    <div class="w3-col l3 m3 s6">
        <a href="https://www.nairobidesignweek.com" target="_blank"><img src="{{ asset('/images/partners-logos/ndw2020.png')}}" style="width: 90%;"  class="partner-logo"></a>

     </div>
    <div class="w3-col l3 m3 s6">
       <img src="{{ asset('/images/partners-logos/Found-Fiction.jpg')}}" style="width: 90%;"  class="partner-logo">
    </div>
    <div class="w3-col l3 m3 s6">
        <a href="https://bake.co.ke" target="_blank"> <img src="{{ asset('/images/partners-logos/BAKElogo.png')}}" style="width: 90%;"   class="partner-logo"></a>

    </div>
    <div class="w3-col l3 m3 s6">
        <a href="https://secure.changa.co.ke/myweb/share/33290" target="_blank">  <img src="{{ asset('/images/partners-logos/switcharooo.png')}}" style="width: 150%;"  class="partner-logo"></a>
     </div>
      </div>

    <div class="w3-row-padding">

    <div class="w3-col l3 m3 s6">
       <a href="https://radioasylum.com/"  target="_blank"> <img src="{{ asset('/images/partners-logos/asylumRadio.png')}}" style="width: 90%;"  class="partner-logo"></a>
   </div>

  <div class="w3-col l3 m3 s6">
     <a href="https://web.facebook.com/TrenchtownIrieLand" target="_blank"> <img src="{{ asset('/images/partners-logos/Trenchtown-logo.png')}}" style="width: 80%;"  class="partner-logo"></a>
  </div>

  <div class="w3-col l3 m3 s6">
     <img src="{{ asset('/images/partners-logos/tNr-icon.jpg')}}" style="width: 90%;"  class="partner-logo">
  </div>
  <div class="w3-col l3 m3 s6">
      
     <a href="https://kalabars.com" target="_blank"> <img src="{{ asset('/images/partners-logos/kalabarslogoblack.png')}}" style="width: 90%;"   class="partner-logo"></a>
  </div>
    </div>
    <div class="w3-row-padding">

  <div class="w3-col l3 m3 s6">
        <a href="https://www.instagram.com/absolutemedia_pictures/" target="_blank"><img src="{{ asset('/images/partners-logos/absolute.png')}}" style="width: 100%;"  class="partner-logo"></a>
   </div>

  <div class="w3-col l3 m3 s6">
     <a href="http://www.shokofestival.co.zw/" target="_blank">  <img src="{{ asset('/images/partners-logos/shoko.png')}}" style="width: 60%;"  class="partner-logo"></a> 
  </div>

  <div class="w3-col l3 m3 s6">
  <!-- <img src="{{ asset('/images/partners-logos/tNr-icon.jpg')}}" style="width: 90%;"  class="partner-logo"> -->
  </div>
  <div class="w3-col l3 m3 s6">
  <!-- <a href="https://web.facebook.com/TrenchtownIrieLand" target="_blank"> <img src="{{ asset('/images/partners-logos/Trenchtown-logo.png')}}" style="width: 80%;"  class="partner-logo"></a>
  --></div> 
  </div>
   
  </div>
</div>

    
    </div>
 </div>
</body> 
     @endsection
