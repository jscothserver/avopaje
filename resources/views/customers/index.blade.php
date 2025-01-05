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
                        <x-button>
                        <a href="{{ route('customers.create') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Crear nuevo maquilador</a>
                        </x-button>
                    </div>
                    <table class="table hover:table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Empresa</th>
                                <th>Nombre</th>
                                <th>RFC</th>
                                <th>Telefono</th>
                                <th>Calle</th>
                                <th>Colonia</th>
                                <th>CP</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->empresa }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->rfc }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    @if ($customer->direcciones != null)
                                        <td>{{ $customer->direcciones->direccion }}</td>
                                        <td>{{ $customer->direcciones->colonia }}</td>
                                        <td>{{ $customer->direcciones->codigo_postal }}</td>
                                        <td>{{ $customer->direcciones->ciudad }}</td>
                                        <td>{{ $customer->direcciones->estado }}</td>
                                    @else
                                        <td colspan="5" class="text-center">N/A</td>
                                    @endif
                                    <td>
                                        <x-nav-link href="{{ route('customers.edit', $customer) }}">
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
