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
              <div class="video"><img src="{{ asset('img/video.png') }}" /></div>
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
                <script>
                   document.getElementById("section2").scrollIntoView();
                </script>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    @if(isset($reply)) 

                        <div class="successBox">
                            <div class="successInside">
                                <div class="successInsideContent">

                                    <h2>{{ __('Ta participation est bien enregistrée !') }}</h2>
                                    <h4>{{ __('YellowStraps & Morgan Showcase • Jeudi 4 avril • Bruxelles') }}</h4>
                                    <p>{{ __('Merci pour ta participation au concours Picon Live. Un e-mail de confirmation vient de t’être envoyé ! Le tirage au sort est prévu le 28 mars.') }}</p>
                                    <a href="{{ route('home')}}#section3" class="cta light-cta">Mais avant, retrouve-nous aux Picon Live Vinyl Sessions</a>
                                    
                                </div>
                            </div>
                        </div>
                
                    @else


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
                            @if(app()->getLocale()=='fr' ) J’accepte la <a href="{{route('privacy')}}">Privacy Policy</a>
                            @elseif(app()->getLocale()=='nl') Agree
                            @else  Agree to our <a href="{{route('privacy')}}">Privacy Policy</a>
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
                        <div style="text-align:center"><input type="submit" value="{{ __('Tente ta chance') }}" class="cta">
                        <p class="advert">{{ __('Concours ouvert du 19 février au 27 mars 23h59') }}</p></div>

                </form>
                @endif


            </div>
        </div>
    </div>

      
      

      


    </div>
</section>

<section id="section3">
	 <div class="wrapper">

        <div class="recipe">
            <img class="bg-pict" src="{{ asset('img/imageSection3.png') }}" >
            <div class="hover-content">
                <img src="{{ asset('img/heart.svg') }}" class="heart" />
            
                <div class="content-text">
                    <h3>Picon. Bière. <br/>Et <b>c’est tout</b>.</h3>
                    <p>5cl de Picon à l'orange, 25cl de Bière. Le cocktail est simple, le goût est mémorable.</p>
                    <p>La fraîcheur de la bière, combinée à l’amertume de zestes d’orange séchées, à la douceur du caramel et aux notes subtiles de gentiane et de quinquina… Le mieux, c’est de découvrir les saveurs du Picon bière pendant les évènements Picon Live.</p>
                </div>
           
            </div>
        </div>



        <div class="calendar">
            <div class="calendar-about">
            <p>Une immense collection de vinyles, cinq bars iconiques, un DJ pour mixer tes morceaux favoris. Tu choisis le son, il crée l’ambiance, nous servons du Picon-bière. Le mix parfait, tout simplement.
Et comme Picon est une expérience à partager à plusieurs, ton amitié est récompensée.</p></div>
            <div class="calendar-table">
                <ul>
                @foreach ($calendars as $calendar)
                    <li>
                        <span class="bar"><a href="{{ $calendar->link }}" target="_blank">{{ $calendar->location }}</a></span>
                        <span class="location">{{ $calendar->city }}</span>
                        <span class="date">{{ $calendar->dateConcert }}</span></li>
                       
                  @endforeach
                      
                </ul>
            </div>
        </div>

        <div class="vinyl-box">
            <p>Pendant les Vinyl Sessions,<br/> profite d’un Picon bière offert pour chaque verre acheté.</p>
        </div>
     </div>
</section>


</div>
</div>
	
@endsection