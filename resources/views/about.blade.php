@extends('layouts.frontend')

@section('content')

<div class="content">

<section id="about" class="content-page">
    <div class="wrapper">
       <h1>{{ __('A propos') }}</h1>

         <div class="fromWYSIWYG">    
          @if(app()->getLocale()=='fr' ){!! $content->fr_body !!} 
          @elseif(app()->getLocale()=='nl'){!! $content->nl_body !!} 
          @else {!! $content->en_body !!}
          @endif
        </div>
        
     </div>
</section>


</div>
	
@endsection