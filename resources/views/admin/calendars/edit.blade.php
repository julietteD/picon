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
        <label>City</label>
        <input type="text" required class="form-control" name="city" value="@if(!empty($calendar->city)){{$calendar->city}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Date</label>
        <input type="text" required class="form-control" name="dateConcert" value="@if(!empty($calendar->dateConcert)){{$calendar->dateConcert}}@endif" >
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