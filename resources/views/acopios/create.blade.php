<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Acopios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-danger-button>
                        <a href="{{ route('acopios.index') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Cancelar</a>
                        </x-danger-button>
                    </div>
                    <form action="{{ route('acopios.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <x-label for="name" :value="__('Nombre')" />
                                <x-input
                                id="name"
                                class="block w-full mt-1"
                                type="text"
                                name="name"
                                :value="old('name')"
                                placeholder="Nombre del acopio"
                                autofocus />
                                @error('name')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label for="phone" :value="__('Telefono')" />
                                <x-input
                                id="phone"
                                class="block w-full mt-1"
                                type="text"
                                name="phone"
                                phone="phone"
                                :value="old('phone')"
                                placeholder="Telefono del acopio" />
                                @error('phone')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label for="customer_id" :value="__('Maquiladores')" />
                                <x-select name="customer_id" class="w-full">
                                    <option value="">Seleccione el maquilador</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->empresa}}</option>
                                    @endforeach
                                </x-select>
                                @error('customer_id')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-button class="w-full mt-6">Guardar</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
