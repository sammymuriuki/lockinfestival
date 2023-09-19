<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title') Lock In Festival</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" media="all" /> 
    <link rel="stylesheet" href="{{URL::asset('css/w3.css')}}"  media="all" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/glider.css')}}" media="all" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}" media="all" /> 
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/not-found.css')}}" media="all" /> 
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/map.css')}}" media="all" /> 
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/welcome.css')}}" media="all" /> 
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animation.css')}}" media="all" /> 

    <script src="{{URL::asset('js/jquery.hotspot.js')}}"></script>
    <script src="{{URL::asset('js/map.js')}}"></script>
    <script src="{{URL::asset('js/glider.js')}}"></script>
    <script src="{{URL::asset('js/custom-slider.js')}}"></script>
    <script src="{{URL::asset('js/custom-slider2.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
    <style>
    video {
       width:100%;
       height: 100%;
    }
</style>
</head>

@yield('content')
<script src="{{URL::asset('js/dash.all.min.js')}}"></script>

</html>