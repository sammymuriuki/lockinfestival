@extends('layouts.master')
@section('title')
Welcome -
@endsection
@section('content')
<body>
<div class="main-container">

  <div class="welcome-lockin">
    <img src="{{ asset('/images/welcome-lockin.jpg')}}" class="welcome-image"/>
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
  </div>

  <div class="w3-container">

  <div class="about-text">



    <div class="w3-panel">
      
      <p>Currently people around the world are reeling from the profound effects of the Covid-19 pandemic. We believe this is an opportune time for  filmmakers, visual artists, performers, artisans and other creatives to get their work out to the world. Creatives Garage is working diligently on a completely virtual festival! Utilising our resources and hopefully the ingenuity of creatives, we will reach out to the socially distanced with an engaging and immersive experience whose scale has never hitherto attempted in Kenya</p>
    <br>
      <p>The festival will be free to ‘attend’ however each livestream or film screening will have an MPESA tip jar that will help you support the artists during this period where they may otherwise not be earning. 
        We will also be adding a donate button to the website so that you can donate to Creatives Garage allowing us to keep working on more tools to support the creative arts industry in Kenya.</p>

        <p>The Lock in Festival will feature:</p>

        <ol class="w3-ol">
          <li>Film makers </li>
          <li> Live musicians and DJs</li>
          <li> Live podcasts/Webinars</li>
          <li> Wellness (Yoga/Home workouts/Guided Meditation Sessions)</li>
          <li> Artist studio visits</li>
          <li> Artisans (crafts) and vendors(homemade chillies, jams, shea butter,coconut oil) who deliver their work via courier services</li>
          <li>
            Poetry and Spoken word artists</li>
        </ol>
        <p>Sign up with your email address and follow our social media channels for more info on our line-up, schedule and much more info on the festival.</p>
    
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
  <!-- <a href="https://www.nairobidesignweek.com" target="_blank"><img src="{{ asset('/images/partners-logos/ndw2020.png')}}" style="width: 90%;"  class="partner-logo"></a>
  --> </div>

  <div class="w3-col l3 m3 s6">
    <!-- <a href="https://secure.changa.co.ke/myweb/share/33290" target="_blank">  <img src="{{ asset('/images/partners-logos/switcharooo.png')}}" style="width: 150%;"  class="partner-logo"></a> -->
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

<div class="btn-sectionq w3-row-padding" style="padding-bottom:30px">
 
  <div class="w3-col l4 m4 s4">
    <a class="social-btn"><i class="fa fa-twitter fa-3x"></i></a>
  </div>

  <div class="w3-col l4 m4 s4">
    <a class="social-btn"><i class="fa fa-instagram fa-3x"></i></a>
  </div>

  <div class="w3-col l4 m4 s4">
  <a class="social-btn"><i class="fa fa-facebook-square fa-3x"></i></a>
</div>
</div>
</div>
</div>

</div>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("April 25, 2020 14:54:00").getTime();
  
  // Update the count down every 1 second
  var x = setInterval(function() {
  
    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML = days;

    document.getElementById("hrs").innerHTML = hours;

    document.getElementById("mins").innerHTML = minutes;

    document.getElementById("secs").innerHTML = seconds;
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").style.display = 'none';
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>

</body>
@endsection