@extends('layouts.frontend')

@section('content')

<div class="content">

<section id="section1">
    <div class="wrapper">
        <h1>
            @if(app()->getLocale()=='fr' ){{ $content->fr_title1 }} 
            @elseif(app()->getLocale()=='nl'){{ $content->nl_title1 }} 
            @else {{ $content->en_title1 }}
            @endif
        </h1>
       
        <div class="mainVideo">

          <div class="video">
                <video autoplay loop muted playsinline style="width:100%" poster="{{ asset('img/poster-2.png') }}" >
                <source src="{{ asset('img/PICON_SHOWCASE_EN-2.mp4') }}"  type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>

         
         <h2>SHOWCASE • 04.04.24 • BRUSSELS • YELLOWSTRAPS & MORGAN</h2
            
        </div>

    
        

    </div>
</section>

<section id="section3">
	 <div class="wrapper">

        <div class="recipe">
            <img class="bg-pict" src="{{ asset('img/imageSection3.png') }}" >
            <img src="{{ asset('img/heart.svg') }}" class="heart" />
            <div class="hover-content">
                
            
                <div class="content-text">
                    <h3>
                     @if(app()->getLocale()=='fr' ){!! $content->fr_title4 !!} 
                    @elseif(app()->getLocale()=='nl'){!! $content->nl_title4 !!} 
                    @else {!! $content->en_title4 !!} 
                    @endif 
                    </h3>
                    @if(app()->getLocale()=='fr' ){!! $content->fr_body5 !!} 
                    @elseif(app()->getLocale()=='nl'){!! $content->nl_body5 !!} 
                    @else {!! $content->en_body5 !!} 
                    @endif
                </div>
           
            </div>
        </div>

</div>
</section>
<section id="section4">
 <div class="wrapper">
        <div class="calendar">
            <div class="calendar-about">
              @if(app()->getLocale()=='fr' ){!! $content->fr_body6 !!} 
                @elseif(app()->getLocale()=='nl'){!! $content->nl_body6 !!} 
                @else {!! $content->en_body6 !!} 
                @endif</div>
            <div class="calendar-table">
                <ul>
                @foreach ($calendars as $calendar)
                    <li>
                        <span class="bar"><a href="{{ $calendar->link }}" target="_blank">{{ $calendar->location }}</a></span>
                        <span class="location">
                           @if(app()->getLocale()=='fr' ){!! $calendar->fr_city !!} 
                @elseif(app()->getLocale()=='nl'){!! $calendar->nl_city !!} 
                @else {!! $calendar->en_city !!} 
                @endif
              </span>
                <span class="date">  @if(app()->getLocale()=='fr' ){!! $calendar->fr_dateConcert !!} 
                @elseif(app()->getLocale()=='nl'){!! $calendar->nl_dateConcert !!} 
                @else {!! $calendar->en_dateConcert !!} 
                @endif</span></li>
                       
                  @endforeach
                      
                </ul>
            </div>
        </div>

        <div class="vinyl-box">
             @if(app()->getLocale()=='fr' ){!! $content->fr_body7 !!} 
                @elseif(app()->getLocale()=='nl'){!! $content->nl_body7 !!} 
                @else {!! $content->en_body7 !!} 
                @endif
        </div>
     </div>
</section>
<div id="bandeau"></div>

</div>
</div>
      
@endsection