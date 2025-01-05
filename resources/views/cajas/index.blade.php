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
                        <x-button>
                        <a href="{{ route('cajas.create') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Crear nueva caja</a>
                        </x-button>
                    </div>
                    <table class="table w-full hover:table-fixed">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Peso</th>
                                <th>Capacidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($boxes as $box)
                                <tr>
                                    <td>{{$box->name}}</td>
                                    <td>{{$box->peso}} Kgs</td>
                                    <td>{{$box->capacidad}} Kgs</td>
                                    <td>
                                        <x-button>
                                        <a href="{{ route('cajas.edit', $box) }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Editar</a>
                                        </x-button>
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
