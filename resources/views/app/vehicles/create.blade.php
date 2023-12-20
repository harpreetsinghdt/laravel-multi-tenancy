<x-tenant-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Add Vehicle') }}
			<x-btn-link class="ml-4 float-right" href="{{ route('vehicles.index') }}">Vehicles</x-btn-link>
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<form method="POST" action="{{ route('vehicles.store') }}">
						@csrf

						<div>
							<x-input-label for="name" :value="__('Miles')" />
							<x-text-input id="name" class="block mt-1 w-full" type="text" name="miles" :value="old('miles')" required
								autofocus autocomplete="miles" />
							<x-input-error :messages="$errors->get('miles')" class="mt-2" />
						</div>

						<div class="mt-4">
							<x-input-label for="make" :value="__('Make')" />
							<x-text-input id="make" class="block mt-1 w-full" type="text" name="make" required autocomplete="make" />
							<x-input-error :messages="$errors->get('make')" class="mt-2" />
						</div>

						<div class="mt-4">
							<x-input-label for="password" :value="__('Model')" />

							<x-text-input id="password" class="block mt-1 w-full" type="text" name="model" required />

							<x-input-error :messages="$errors->get('password')" class="mt-2" />
						</div>

						<div class="mt-4">
							<x-input-label for="password_confirmation" :value="__('Color')" />

							<x-text-input id="password_confirmation" class="block mt-1 w-full" type="text" name="color" required />

							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
						</div>

						<div class="flex items-center justify-end mt-4">

							<x-primary-button class="ms-4">
								{{ __('Create') }}
							</x-primary-button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-tenant-app-layout>