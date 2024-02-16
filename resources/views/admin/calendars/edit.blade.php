<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Calendar') }}
        </h2>
    </x-slot>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


<div class="py-4">
<form id="editForm" enctype="multipart/form-data" method="POST" action="{{route('admin.calendars.edit.action')}}">



<fieldset class="py-2">
    <div class="form-group">
        <label>Location</label>
        <input type="text" required class="form-control" name="location" value="@if(!empty($calendar->location)){{$calendar->location}}@endif" >
    </div>
</fieldset>
<fieldset class="py-2">
    <div class="form-group">
        <label>City FR</label>
        <input type="text" required class="form-control" name="fr_city" value="@if(!empty($calendar->fr_city)){{$calendar->fr_city}}@endif" >
    </div>
     <div class="form-group">
        <label>City EN</label>
        <input type="text" required class="form-control" name="en_city" value="@if(!empty($calendar->en_city)){{$calendar->en_city}}@endif" >
    </div>
     <div class="form-group">
        <label>City NL</label>
        <input type="text" required class="form-control" name="nl_city" value="@if(!empty($calendar->nl_city)){{$calendar->nl_city}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Date FR</label>
        <input type="text" required class="form-control" name="fr_dateConcert" value="@if(!empty($calendar->fr_dateConcert)){{$calendar->fr_dateConcert}}@endif" >
    </div>
     <div class="form-group">
        <label>Date EN</label>
        <input type="text" required class="form-control" name="en_dateConcert" value="@if(!empty($calendar->en_dateConcert)){{$calendar->en_dateConcert}}@endif" >
    </div>
     <div class="form-group">
        <label>Date NL</label>
        <input type="text" required class="form-control" name="nl_dateConcert" value="@if(!empty($calendar->nl_dateConcert)){{$calendar->nl_dateConcert}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Order</label>
        <input type="text" required class="form-control" name="orderElt" value="@if(!empty($calendar->orderElt)){{$calendar->orderElt}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Link</label>
        <input type="text" required class="form-control" name="link" value="@if(!empty($calendar->link)){{$calendar->link}}@endif" >
    </div>
</fieldset>



@csrf

<input type="hidden" name="id" value="@if(!empty($calendar->id)){{$calendar->id}}@endif"/>
<button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>



</div>
</x-app-layout>


<script>
  
</script>