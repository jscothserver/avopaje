<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Acopio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-button>
                        <a href="{{ route('acopios.create') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Crear nuevo acopio</a>
                        </x-button>
                    </div>
                    <table class="table w-full hover:table-fixed">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Maquilador</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($acopios as $acopio)
                                <tr>
                                    <td>{{ $acopio->name }}</td>
                                    <td>{{ $acopio->phone }}</td>
                                    <td>{{ $acopio->customer->empresa }}</td>
                                    <td>
                                        <x-nav-link href="{{ route('acopios.edit', $acopio) }}">
                                            <x-button>
                                                Editar
                                            </x-button>
                                        </x-nav-link>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
