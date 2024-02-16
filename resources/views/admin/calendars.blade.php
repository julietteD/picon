<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('calendars') }}
        </h2>
    </x-slot>

<div class="max-w-7xl py-4 mx-auto px-4 sm:px-6 lg:px-8">


	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Location</th>
				<th scope="col">City</th>
				<th scope="col">Date</th>
				<th scope="col">Ordre</th>
				<th scope="col">Lien</th>
			
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($calendars as $calendar)
				<tr>
					<th scope="row">{{ $calendar->location }}</th>
					<th scope="row">{{ $calendar->en_city }}</th>
					<th scope="row">{{ $calendar->en_dateConcert }}</th>
					<th scope="row">{{ $calendar->orderElt }}</th>
					<th scope="row">{{ $calendar->link }}</th>
			
   
					<td class="mainActions">
						<a class="action btn btn-info" href="{{ route('admin.calendars.edit', ['id' => $calendar->id ])}}">Edit</a>
						<a class="action btn btn-danger delete" onclick="return warning()" href="{{ route('admin.calendars.delete', [ 'id' => $calendar['id']])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>function warning() { return confirm("Please confirm before deleting:");}</script>

</x-app-layout>
