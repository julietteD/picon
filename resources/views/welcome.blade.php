@extends('layouts.frontend')

@section('content')

<div class="content">

PAGE PICON


<section>
	SECTION 1
</section>

<section>
	SECTION 2
</section>

<section>
	SECTION 3
</section>

<section>
	SECTION 4
</section>

<section>
	SECTION 5
</section>

<section>
	SUBSCRIPTION
</section>

<div>
    @if(isset($reply)) {{ $reply}}
    @else
    <form method="POST" action="{{route('subscribe')}}">
       <fieldset> 
            <label>Langue</label>
            <input type="text" name="language">
        </fieldset>
        <fieldset> 
            <label>firsname</label>
            <input type="text" name="firstname">
        </fieldset>
        <fieldset> 
            <label>lastname</label>
            <input type="text" name="lastname">
        </fieldset>
        <fieldset> 
            <label>email</label>
            <input type="text" name="email">
        </fieldset>
        <fieldset> 
            <label>birthdate</label>
            <input type="text" name="birthdate">
        </fieldset>
        <fieldset> 
            <label>ipaddress</label>
            <input type="text" name="ipaddress">
        </fieldset>
        <fieldset> 
            <label>origin</label>
            <input type="text" name="origin">
        </fieldset>
        <fieldset> 
            <label>location</label>
            <input type="text" name="location">
        </fieldset>
        @csrf
        <input type="submit">


</form>
@endif

</div>


</div>
	
@endsection