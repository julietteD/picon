<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Participations') }}
        </h2>
    </x-slot>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


<div class="py-4">
<form id="editForm" enctype="multipart/form-data" method="POST" action="{{route('admin.participations.edit.action')}}">



<fieldset class="py-2">
    <div class="form-group">
        <label>firstname</label>
        <input type="text" required class="form-control" name="firstname" value="@if(!empty($participation->firstname)){{$participation->firstname}}@endif" >
    </div>
</fieldset>
<fieldset class="py-2">
    <div class="form-group">
        <label>lastname</label>
        <input type="text" required class="form-control" name="lastname" value="@if(!empty($participation->lastname)){{$participation->lastname}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>language</label>
        <input type="text" required class="form-control" name="language" value="@if(!empty($participation->language)){{$participation->language}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>email</label>
        <input type="text" required class="form-control" name="email" value="@if(!empty($participation->email)){{$participation->email}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>birthdate</label>
        <input type="text" required class="form-control" name="birthdate" value="@if(!empty($participation->birthdate)){{$participation->birthdate}}@endif" >
    </div>
</fieldset>


<fieldset class="py-2">
    <div class="form-group">
        <label>ipaddress</label>
        <input type="text" required class="form-control" name="ipaddress" value="@if(!empty($participation->ipaddress)){{$participation->ipaddress}}@endif" >
    </div>
</fieldset>


<fieldset class="py-2">
    <div class="form-group">
        <label>city</label>
        <input type="text" required class="form-control" name="city" value="@if(!empty($participation->city)){{$participation->city}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>origin</label>
        <input type="text" required class="form-control" name="origin" value="@if(!empty($participation->origin)){{$participation->origin}}@endif" >
    </div>
</fieldset>



@csrf

<input type="hidden" name="id" value="@if(!empty($participation->id)){{$participation->id}}@endif"/>
<button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>



</div>
</x-app-layout>


<script>
  
</script>