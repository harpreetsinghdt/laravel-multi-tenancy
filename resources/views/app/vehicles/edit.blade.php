<x-tenant-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Edit Vehicle') }}
			<x-btn-link class="ml-4 float-right" href="{{ route('vehicles.index') }}">vehicles</x-btn-link>
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<form method="POST" action="{{ route('vehicles.update',$vehicle->id) }}">
						@csrf
						@method('put')

						<!-- Name -->
						<div>
							<x-input-label for="make" :value="__('Make')" />
							<x-text-input id="make" class="block mt-1 w-full" type="text" name="make"
								:value="old('make', $vehicle->make)" required autofocus autocomplete="make" />
							<x-input-error :messages="$errors->get('make')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="miles" :value="__('Miles')" />
							<x-text-input id="miles" class="block mt-1 w-full" type="text" name="miles"
								:value="old('miles', $vehicle->miles)" required autofocus autocomplete="miles" />
							<x-input-error :messages="$errors->get('miles')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="model" :value="__('Model')" />
							<x-text-input id="model" class="block mt-1 w-full" type="text" name="model"
								:value="old('model', $vehicle->model)" required autofocus autocomplete="model" />
							<x-input-error :messages="$errors->get('model')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="color" :value="__('Color')" />
							<x-text-input id="color" class="block mt-1 w-full" type="text" name="color"
								:value="old('color', $vehicle->color)" required autofocus autocomplete="color" />
							<x-input-error :messages="$errors->get('color')" class="mt-2" />
						</div>


						<div class="flex items-center justify-end mt-4">

							<x-primary-button class="ms-4">
								{{ __('Update') }}
							</x-primary-button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-tenant-app-layout>