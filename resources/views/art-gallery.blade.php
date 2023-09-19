
@extends('layouts.master')
@section('title')
Lock In Festival 
@endsection
@section('content')
<body>
    
<div class="magazine w3-animate-right">
        <div class="btn-up-section">
            <a href="home.html" class="pointer"><img src="{{ asset('/images/arrow-back.png') }}" class="pointer"/></a>
           </div>
    
    
       <div class="magazine-section">
            <!-- <iframe src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" scrolling="no"  frameborder="0" height="800" style="position:absolute;width: 100%;clip:rect (190px,1100px,800px,250px);"></iframe> -->
            <!-- <iframe  height="800" src="https://www.artsteps.com/embed/5ea0e8a57cd5ff7b113ebc24/560/315" frameborder="0" allowfullscreen "></iframe> -->

            <iframe height="720" src="https://www.artsteps.com/embed/5ea0e8a57cd5ff7b113ebc24/1280/720" style="width: 100%; " frameborder="0" allowfullscreen></iframe>
            
         </div>

         </div>


</body>
      @endsection