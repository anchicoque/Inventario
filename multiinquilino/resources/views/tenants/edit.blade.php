<x-app-layout>    

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inquilinos: edit') }}
        </h2>
    </x-slot>

    <x-container class="py-12">
        
        <div class="card">

            <div class="card-body">

                <form action="{{route('tenants.update', $tenant)}}" method="POST">
                    
                    @csrf

                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label>
                            Nombre
                        </x-input-label>

                        <x-text-input name="id" type="text" value="{{ old('id', $tenant->id)}}" class="w-full mt-2" placeholder="Ingrese el nombre"/>
                        
                        <x-input-error :messages="$errors->first('id')" />

                    </div>

                    <div class="flex justify-end">
                        <button class="btn btn-blue">
                            Actulizar
                        </button>
                    </div>

                </form>

            </div>

        </div>
         
    </x-container>
    
</x-app-layout>