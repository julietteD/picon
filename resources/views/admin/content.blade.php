<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Contents') }}
        </h2>
    </x-slot>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


<div class="py-4">
<form id="editForm" enctype="multipart/form-data" method="POST" action="{{route('admin.contents.edit.action')}}">


<div class="container">
  <div class="row align-items-start">
    <div class="col">

            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title</label>
                <input type="text" required class="form-control" name="fr_title" value="@if(!empty($content->fr_title)){{$content->fr_title}}@endif" >
            </div>
        </fieldset>
        <fieldset class="py-2">
            <div class="form-group">
                <label>Body1</label>
                <input type="text" required class="form-control" name="fr_body1" value="@if(!empty($content->fr_body1)){{$content->fr_body1}}@endif" >
            </div>
        </fieldset>
        </div>

          <div class="col">

            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title</label>
                <input type="text" required class="form-control" name="en_title" value="@if(!empty($content->en_title)){{$content->en_title}}@endif" >
            </div>
        </fieldset>
        <fieldset class="py-2">
            <div class="form-group">
                <label>Body1</label>
                <input type="text" required class="form-control" name="en_body1" value="@if(!empty($content->en_body1)){{$content->en_body1}}@endif" >
            </div>
        </fieldset>
        </div>
  <div class="col">

            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title</label>
                <input type="text" required class="form-control" name="nl_title" value="@if(!empty($content->nl_title)){{$content->nl_title}}@endif" >
            </div>
        </fieldset>
        <fieldset class="py-2">
            <div class="form-group">
                <label>Body1</label>
                <input type="text" required class="form-control" name="nl_body1" value="@if(!empty($content->nl_body1)){{$content->nl_body1}}@endif" >
            </div>
        </fieldset>
        </div>
</div></div>



@csrf

<input type="hidden" name="id" value="@if(!empty($content->id)){{$content->id}}@endif"/>
<button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>



</div>
</x-app-layout>


<script>
  
</script>