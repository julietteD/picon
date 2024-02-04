<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('participations') }}
        </h2>
    </x-slot>

<div class="max-w-7xl py-4 mx-auto px-4 sm:px-6 lg:px-8">


	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				<th scope="col">language</th>
				<th scope="col">email</th>
				<th scope="col">birthdate</th>
				<th scope="col">ipaddress</th>
				<th scope="col">city</th>
				<th scope="col">origin</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($participations as $participation)
				<tr>
					<th scope="row">{{ $participation->lastname }}</th>
					<th scope="row">{{ $participation->firstname }}</th>
					<th scope="row">{{ $participation->language }}</th>
					<th scope="row">{{ $participation->email }}</th>
					<th scope="row">{{ $participation->birthdate }}</th>
					<th scope="row">{{ $participation->ipaddress }}</th>
					<th scope="row">{{ $participation->city }}</th>
					<th scope="row">{{ $participation->origin }}</th>

					<td class="mainActions">
						<a class="action btn btn-info" href="{{ route('admin.participations.edit', ['id' => $participation->id ])}}">Edit</a>
						<a class="action btn btn-danger delete" onclick="return warning()" href="{{ route('admin.participations.delete', [ 'id' => $participation['id']])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>function warning() { return confirm("Please confirm before deleting:");}</script>

</x-app-layout>
