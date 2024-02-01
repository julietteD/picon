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
        <label>Name</label>
        <input type="text" required class="form-control" name="name" value="@if(!empty($participation->name)){{$participation->name}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Bio</label>
        <input type="text"  class="form-control" name="bio" value="@if(!empty($participation->bio)){{$participation->bio}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Link 1</label>
        <input type="text"  class="form-control" name="link1" value="@if(!empty($participation->link1)){{$participation->link1}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Link 2</label>
        <input type="text"  class="form-control" name="link2" value="@if(!empty($participation->link2)){{$participation->link2}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>linkFacebook</label>
        <input type="text"  class="form-control" name="linkFacebook" value="@if(!empty($participation->linkFacebook)){{$participation->linkFacebook}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>linkX</label>
        <input type="text"  class="form-control" name="linkX" value="@if(!empty($participation->linkX)){{$participation->linkX}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Spotify</label>
        <input type="text"  class="form-control" name="spotify" value="@if(!empty($participation->spotify)){{$participation->spotify}}@endif" >
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
    var inputcb = document.getElementsByClassName('tagcb');
    for (var i = 0 ; i < inputcb.length; i++) {
          inputcb[i].addEventListener('click', function() {
            var elem = document.querySelector('.tags');
            var old  = elem.value.trim(); 
            if(!this.checked){
                elem.value = old.replace(this.value, "");
            }
            else{
                elem.value = old + ',' + this.value;
            }
        }, false ) ; }
</script>