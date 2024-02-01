<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('participations') }}
        </h2>
    </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="py-4">
	<a href="{{route('admin.participations.new')}}" class="btn cur-p btn-success">Nouveau</a>
</div>
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				
<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($participations as $participation)
				<tr>
					<th scope="row">{{ $participation->lastname }}</th>
					<th scope="row">{{ $participation->firstname }}</th>

					<td class="mainActions">
						<a class="action btn btn-info" href="{{ route('admin.participations.edit', ['id' => $participation->id ])}}">Edit</a>
						<a class="action btn btn-danger delete" onclick="return warning()" href="{{ route('admin.participations.delete', [ 'id' => $participation['id']])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

</x-app-layout>
