<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Conditions') }}
        </h2>
    </x-slot>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


<div class="py-4">
<form id="editForm" enctype="multipart/form-data" method="POST" action="{{route('admin.ccontents.edit.action')}}">


<div class="container">
  <div class="row align-items-start">


           
       
        <fieldset class="py-2">
            <div class="form-group">
                <label>Body FR</label>
                <textarea class="form-control wysiwyg" name="fr_body" >@if(!empty($content->fr_body)){{$content->fr_body}}@endif </textarea>
            </div>
        </fieldset>
       

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body EN</label>
                <textarea class="form-control wysiwyg" name="en_body" >@if(!empty($content->en_body)){{$content->en_body}}@endif </textarea>
            </div>
        </fieldset>
  
        <fieldset class="py-2">
            <div class="form-group">
                <label>Body NL</label>
                <textarea class="form-control wysiwyg" name="nl_body" >@if(!empty($content->nl_body)){{$content->nl_body}}@endif </textarea>
            </div>
        </fieldset>

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