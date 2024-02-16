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

        <h5>FR</h5>
            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 1</label>
                <input type="text" required class="form-control" name="fr_title1" value="@if(!empty($content->fr_title1)){{$content->fr_title1}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 1</label>
                <textarea required class="form-control wysiwyg" name="fr_body1">@if(!empty($content->fr_body1)){{$content->fr_body1}}@endif</textarea>
            </div>
        </fieldset>


      <fieldset class="py-2">
            <div class="form-group">
                <label>Title 2</label>
                <input type="text" required class="form-control" name="fr_title2" value="@if(!empty($content->fr_title2)){{$content->fr_title2}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 2</label>
                <textarea required class="form-control wysiwyg" name="fr_body2">@if(!empty($content->fr_body2)){{$content->fr_body2}}@endif</textarea>
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 3</label>
                <input type="text" required class="form-control" name="fr_title3" value="@if(!empty($content->fr_title3)){{$content->fr_title3}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 3</label>
                <textarea required class="form-control wysiwyg" name="fr_body3">@if(!empty($content->fr_body3)){{$content->fr_body3}}@endif</textarea>
            </div>
        </fieldset>

         <fieldset class="py-2">
            <div class="form-group">
                <label>Title 4</label>
                <input type="text" required class="form-control" name="fr_title4" value="@if(!empty($content->fr_title4)){{$content->fr_title4}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 4</label>
                <textarea required class="form-control wysiwyg" name="fr_body4">@if(!empty($content->fr_body4)){{$content->fr_body4}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 5</label>
                <textarea required class="form-control wysiwyg" name="fr_body5">@if(!empty($content->fr_body5)){{$content->fr_body5}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 6</label>
                <textarea required class="form-control wysiwyg" name="fr_body6">@if(!empty($content->fr_body6)){{$content->fr_body6}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 7</label>
                <textarea required class="form-control wysiwyg" name="fr_body7">@if(!empty($content->fr_body7)){{$content->fr_body7}}@endif</textarea>
            </div>
        </fieldset>
           

        </div>

          <div class="col">

        <h5>EN</h5>
            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 1</label>
                <input type="text" required class="form-control" name="en_title1" value="@if(!empty($content->en_title1)){{$content->en_title1}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 1</label>
                <textarea required class="form-control wysiwyg" name="en_body1">@if(!empty($content->en_body1)){{$content->en_body1}}@endif</textarea>
            </div>
        </fieldset>


      <fieldset class="py-2">
            <div class="form-group">
                <label>Title 2</label>
                <input type="text" required class="form-control" name="en_title2" value="@if(!empty($content->en_title2)){{$content->en_title2}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 2</label>
                <textarea required class="form-control wysiwyg" name="en_body2">@if(!empty($content->en_body2)){{$content->en_body2}}@endif</textarea>
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 3</label>
                <input type="text" required class="form-control" name="en_title3" value="@if(!empty($content->en_title3)){{$content->en_title3}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 3</label>
                <textarea required class="form-control wysiwyg" name="en_body3">@if(!empty($content->en_body3)){{$content->en_body3}}@endif</textarea>
            </div>
        </fieldset>

         <fieldset class="py-2">
            <div class="form-group">
                <label>Title 4</label>
                <input type="text" required class="form-control" name="en_title4" value="@if(!empty($content->en_title4)){{$content->en_title4}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 4</label>
                <textarea required class="form-control wysiwyg" name="en_body4">@if(!empty($content->en_body4)){{$content->en_body4}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 5</label>
                <textarea required class="form-control wysiwyg" name="en_body5">@if(!empty($content->en_body5)){{$content->en_body5}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 6</label>
                <textarea required class="form-control wysiwyg" name="en_body6">@if(!empty($content->en_body6)){{$content->en_body6}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 7</label>
                <textarea required class="form-control wysiwyg" name="en_body7">@if(!empty($content->en_body7)){{$content->en_body7}}@endif</textarea>
            </div>
        </fieldset>
           

        </div>
         <div class="col">

        <h5>NL</h5>
            
        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 1</label>
                <input type="text" required class="form-control" name="nl_title1" value="@if(!empty($content->nl_title1)){{$content->nl_title1}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 1</label>
                <textarea required class="form-control wysiwyg" name="nl_body1">@if(!empty($content->nl_body1)){{$content->nl_body1}}@endif</textarea>
            </div>
        </fieldset>


      <fieldset class="py-2">
            <div class="form-group">
                <label>Title 2</label>
                <input type="text" required class="form-control" name="nl_title2" value="@if(!empty($content->nl_title2)){{$content->nl_title2}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 2</label>
                <textarea required class="form-control wysiwyg" name="nl_body2">@if(!empty($content->nl_body2)){{$content->nl_body2}}@endif</textarea>
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Title 3</label>
                <input type="text" required class="form-control" name="nl_title3" value="@if(!empty($content->nl_title3)){{$content->nl_title3}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 3</label>
                <textarea required class="form-control wysiwyg" name="nl_body3">@if(!empty($content->nl_body3)){{$content->nl_body3}}@endif</textarea>
            </div>
        </fieldset>

         <fieldset class="py-2">
            <div class="form-group">
                <label>Title 4</label>
                <input type="text" required class="form-control" name="nl_title4" value="@if(!empty($content->nl_title4)){{$content->nl_title4}}@endif" >
            </div>
        </fieldset>

        <fieldset class="py-2">
            <div class="form-group">
                <label>Body 4</label>
                <textarea required class="form-control wysiwyg" name="nl_body4">@if(!empty($content->nl_body4)){{$content->nl_body4}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 5</label>
                <textarea required class="form-control wysiwyg" name="nl_body5">@if(!empty($content->nl_body5)){{$content->nl_body5}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 6</label>
                <textarea required class="form-control wysiwyg" name="nl_body6">@if(!empty($content->nl_body6)){{$content->nl_body6}}@endif</textarea>
            </div>
        </fieldset>
         <fieldset class="py-2">
            <div class="form-group">
                <label>Body 7</label>
                <textarea required class="form-control wysiwyg" name="nl_body7">@if(!empty($content->nl_body7)){{$content->fr_body7}}@endif</textarea>
            </div>
        </fieldset>
           

        </div>
 
</div>



@csrf

<input type="hidden" name="id" value="@if(!empty($content->id)){{$content->id}}@endif"/>
<button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>



</div>
</x-app-layout>


<script>
  
</script>