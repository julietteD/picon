@extends('layouts.frontend')

@section('content')

<div class="content"><div class="wrapper">


{{ __('Welcome to our website!') }}

@if(app()->getLocale()=='fr' ){{ $content->fr_title }} 
@elseif(app()->getLocale()=='nl'){{ $content->nl_title }} 
@else {{ $content->en_title }}
@endif

<h2>{{ $content->title }}  </h2>

<section>
	<h1>MOVIE TEASING {{ app()->getLocale() }}</h1>
</section>

<section>
<h1>Inscription</h1>

<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @if(isset($reply)) 

    <p>Total success</p>
  
    @else
    <form method="POST" action="{{route('subscribe')}}">
   
            <input type="hidden" name="language" value="{{ app()->getLocale() }}">

        <fieldset> 
            <label>firsname</label>
            <input type="text" name="firstname" value="{{ old('firstname') }}">
        </fieldset>
        <fieldset> 
            <label>lastname</label>
            <input type="text" name="lastname" value="{{ old('lastname') }}">
        </fieldset>
        <fieldset> 
            <label>email</label>
            <input type="text" name="email" value="{{ old('email') }}">
        </fieldset>
        <fieldset> 
            <label>birthdate</label>
             <input type="text" name="birthdate" placeholder="12-31-2000"  value="{{ old('birthdate') }}">
          <!--  <input type="text" name="birthdate_day" placeholder="31">
            <input type="text" name="birthdate_month" placeholder="12">
            <input type="text" name="birthdate_month" placeholder="2000">-->
        </fieldset>
       
        <fieldset> 
            <label>origin</label>
            <input type="text" name="origin" value="{{ old('origin') }}">
        </fieldset>
        <fieldset> 
            <label>city</label>
            <input type="text" name="city" value="{{ old('city') }}">
        </fieldset>
        <fieldset>
        <label>
        <input type="checkbox" id="conditions" name="conditions" value="conditions" required />
        J'accèpte les conditions générales
      </label>
</fieldset>
        @csrf
        <input type="submit">


</form>
@endif

</div>
</section>

<section>
drinking strategy et bar activation
</section>

<section>
A propos
</section>

<section>
Privacy policy
</section>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/f0e14da4-ebdc-484f-b4b2-a19f210eec45/cd.js" type="text/javascript" async></script>


</div>
</div>
	
@endsection