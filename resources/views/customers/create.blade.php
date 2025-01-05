<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-danger-button>
                        <a href="{{ route('customers.index') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Cancelar</a>
                        </x-danger-button>
                    </div>
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <x-label for="empresa" :value="__('Empresa')" />
                                <x-input
                                id="empresa"
                                class="block w-full mt-1"
                                type="text"
                                name="empresa"
                                :value="old('empresa')"
                                placeholder="Nombre o razon social"
                                autofocus />
                                @error('empresa')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label for="name" :value="__('Nombre')" />
                                <x-input
                                id="name"
                                class="block w-full mt-1"
                                type="text"
                                name="name"
                                :value="old('name')"
                                placeholder="Persona responsable" />
                                @error('name')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label for="rfc" :value="__('RFC')" />
                                <x-input id="rfc" class="block w-full mt-1" type="text" name="rfc" :value="old('rfc')" placeholder="Registro federal de contribuyentes" />
                            </div>
                            <div class="mb-4">
                                <x-label for="phone" :value="__('Telefono')" />
                                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" placeholder="Telefono" />
                            </div>
                            <div class="mb-4">
                                <x-label for="direccion" :value="__('Direccion')" />
                                <x-input id="direccion" class="block w-full mt-1" type="text" name="direccion" :value="old('direccion')" placeholder="Calle" />
                            </div>
                            <div class="mb-4">
                                <x-label for="colonia" :value="__('Colonia')" />
                                <x-input id="colonia" class="block w-full mt-1" type="text" name="colonia" :value="old('colonia')" placeholder="Colonia" />
                            </div>
                            <div class="mb-4">
                                <x-label for="codigopostal" :value="__('Codigo postal')" />
                                <x-input id="codigopostal" class="block w-full mt-1" type="text" name="codigopostal" :value="old('codigopostal')" placeholder="Codigo postal" />
                            </div>
                            <div class="mb-4">
                                <x-label for="ciudad" :value="__('Ciudad')" />
                                <x-input id="ciudad" class="block w-full mt-1" type="text" name="ciudad" :value="old('ciudad')" placeholder="Ciudad" />
                            </div>
                            <div class="mb-4">
                                <x-label for="estado" :value="__('Estado')" />
                                <x-input id="estado" class="block w-full mt-1" type="text" name="estado" :value="old('estado')" placeholder="Estado" />
                            </div>
                            <div class="mb-4">
                                <x-button class="w-full mt-5">
                                    GUARDAR
                                {{-- <button type="submit" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Guardar</button> --}}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
