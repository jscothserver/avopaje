<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Cajas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-danger-button>
                        <a href="{{ route('cajas.index') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Cancelar</a>
                        </x-danger-button>
                    </div>
                    <form action="{{ route('cajas.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <x-label>Nombre</x-label>
                                <x-input name="name" class="w-full" />
                                @error('name')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label>Peso</x-label>
                                <x-input name="peso" class="w-full" />
                                @error('peso')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label>Capacidad</x-label>
                                <x-input name="capacidad" class="w-full" />
                                @error('capacidad')
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
