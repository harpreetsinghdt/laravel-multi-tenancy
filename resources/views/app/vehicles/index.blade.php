<x-tenant-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Vehciles') }}
			<x-btn-link class="ml-4 float-right" href="{{ route('vehicles.create') }}">Add Vehicle</x-btn-link>
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<div class="relative overflow-x-auto">
						<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
							<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:bg-gray-400">
								<tr>
									<th scope="col" class="px-6 py-3">Miles</th>
									<th scope="col" class="px-6 py-3">Make</th>
									<th scope="col" class="px-6 py-3">Model</th>
									<th scope="col" class="px-6 py-3">Color</th>
									<th scope="col" class="px-6 py-3">Created At</th>
									<th scope="col" class="px-6 py-3">Action</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($vehicles as $row)
								<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
									<td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
										{{$row->miles}}
									</td>
									<td>{{$row->make}}</td>
									<td>{{$row->model}}</td>
									<td>{{$row->color}}</td>

									<td>{{$row->created_at}}</td>
									<td>
										<x-btn-link href="{{ route('vehicles.edit',$row->id)}}">Edit</x-btn-link>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		</x-app-layout>