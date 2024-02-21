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
        <div class="intro">
           
                @if(app()->getLocale()=='fr' ){!! $content->fr_body1 !!} 
                @elseif(app()->getLocale()=='nl'){!! $content->nl_body1 !!} 
                @else {!! $content->en_body1 !!} 
                @endif
            
        </div>
        <div class="mainVideo">

          <div class="video">
                <video autoplay loop muted playsinline style="width:100%"
                 poster="{{ asset('img/poster.png') }}" >
                <source src="{{ asset('img/MOTION_STORY_PICON.mp4') }}"  type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>

            <div class="hover-content">
                <div class="content-text">
                    <h2>  @if(app()->getLocale()=='fr' ){!! $content->fr_title2 !!} 
                @elseif(app()->getLocale()=='nl'){!! $content->nl_title2 !!} 
                @else {!! $content->en_title2 !!} 
                @endif</h2>
                
                 <div class="programme"> 
                   
                    @if(app()->getLocale()=='fr' ){!! $content->fr_body2 !!} 
                    @elseif(app()->getLocale()=='nl'){!! $content->nl_body2 !!} 
                    @else {!! $content->en_body2 !!} 
                    @endif
                    
                     @if(app()->getLocale()=='fr' ){!! $content->fr_body3 !!} 
                            @elseif(app()->getLocale()=='nl'){!! $content->nl_body3 !!} 
                            @else {!! $content->en_body3 !!} 
                            @endif
                            </div>
                    <a href="#section2" class="cta light-cta">{{ __('Inscris-toi au showcase') }}</a>
                 </div>
            </div>
            
        </div>

    
        

    </div>
</section>

<section id="section2">
    <div class="wrapper">
    <div class="columns">
        <div class="showcase-pict"><img src="{{ asset('img/img-bartenders-placeholder.png') }}" /></div>
        <div class="showcase-form">
            <h2> @if(app()->getLocale()=='fr' ){!! $content->fr_title3 !!} 
            @elseif(app()->getLocale()=='nl'){!! $content->nl_title3 !!} 
            @else {!! $content->en_title3 !!} 
            @endif </h2>
            <div class="intro">
                @if(app()->getLocale()=='fr' ){!! $content->fr_body4 !!} 
                @elseif(app()->getLocale()=='nl'){!! $content->nl_body4 !!} 
                @else {!! $content->en_body4 !!} 
                @endif
            </div>
            <div class="form">

                @if ($errors->any())
             
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                   
                

                    <form method="POST" action="{{ route('subscribe')}}">
                
                            <input type="hidden" name="language" value="{{ app()->getLocale() }}">

                        <fieldset> 
                            <input type="text" name="firstname" required placeholder="{{ __('firstname') }}" value="{{ old('firstname') }}">
                      
                            <input type="text" placeholder="{{ __('lastname') }}" required name="lastname" value="{{ old('lastname') }}">
                     
                            <input type="email" placeholder="{{ __('email') }}" required name="email" value="{{ old('email') }}">
                     
                            <input type="text" placeholder="{{ __('birthdate') }}" required name="birthdate" value="{{ old('birthdate') }}">
                        
                            <div class="selectWrapper"><select name="question" required>
                                    <option disabled selected>{{ __('Quels sont les ingrédients du Picon Bière ?') }}</option>
                                    <option value="beer">{{ __('Du Picon. De la Bière. Et c’est tout.') }}</option>
                                    <option value="gin">{{ __('Du Picon. Du Gin. Et c’est tout.') }}</option>
                                    <option value="apple">{{ __('Du Picon. Du jus de pomme. Et c’est tout') }}</option>
                            </select></div>
                            
                            <input type="text" name="persons" required placeholder="{{ __('Combien de personnes vont participer à ce concours?') }}"  value="{{ old('persons') }}">

             
                        <label class="checkbox">
                            <input type="checkbox" id="conditions" name="conditions" value="conditions" required />
                           
<span>
                            @if(app()->getLocale()=='fr' ) J’accepte la <a href="{{route('privacy')}}">Politique de confidentialité</a>
                            @elseif(app()->getLocale()=='nl') Ik ga akkoord met het  <a href="{{route('privacy')}}">privacybeleid</a>
                            @else  I agree with the <a href="{{route('privacy')}}">privacy policy</a>
                            @endif
            </span>
                            
                        </label>

                         <label class="checkbox">
                            <input type="checkbox" value="1" id="marketing" name="marketing" value="marketing"  />
                            <span>{{ __('J’accèpte l’utilisation des données personnelles à des fins marketing et commerciales') }}</span>
                        </label>

                         <label class="checkbox" style="display:none">
                            <input type="checkbox" value="1" id="newsletter" name="newsletter" value="newsletter"  />
                            <span>{{ __('Je souhaite m’inscrire à la newsletter') }}</span>
                        </label>
                </fieldset>
                        @csrf
                        <div style="text-align:center"><input type="submit" value="{{ __('tente ta chance') }}" class="cta">
                        <p class="advert">{{ __('Concours ouvert du 19 février au 27 mars 23h59') }}</p></div>

                </form>
             


            </div>
        </div>
    </div>

      
      

      


    </div>
</section>
 @if(isset($reply)) 

                        <div class="successBox">
                            <div class="successInside">
                                <div class="successInsideContent">

                                    <h2>{{ __('Ta participation est bien enregistrée !') }}</h2>
                                    <h4>{{ __('YellowStraps & Morgan Showcase • Jeudi 4 avril • Bruxelles') }}</h4>
                                    <p>{{ __('Merci pour ta participation au concours Picon Live. Un e-mail de confirmation vient de t’être envoyé ! Le tirage au sort est prévu le 28 mars.') }}</p>
                                    <a href="{{ route('home')}}#section4" class="cta light-cta">{{ __('Mais avant, retrouve-nous aux Picon Live Vinyl Sessions') }}</a>
                                    
                                </div>
                            </div>
                        </div>
@endif
<section id="section3">
	 <div class="wrapper">

        <div class="recipe">
            <img class="bg-pict" src="{{ asset('img/imageSection3.png') }}" >
            <div class="hover-content">
                <img src="{{ asset('img/heart.svg') }}" class="heart" />
            
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
	  @if ($errors->any())
                <script>
                 scrollToTargetAdjusted();
                   console.log('section2');
                </script>
                @endif
@endsection