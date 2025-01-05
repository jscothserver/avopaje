<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-button>
                        <a href="{{ route('documentos.create') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Crear nuevo documento</a>
                        </x-button>
                    </div>
                    <table class="table w-full hover:table-fixed">
                        <thead>
                            <tr>
                                <th>N&ordm; Tarima</th>
                                <th>N&ordm; cajas</th>
                                <th>Tipo tarima</th>
                                <th>Peso bruto</th>
                                <th>Tara</th>
                                <th>Peso neto</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Total</td>
                                {{-- <td>{{ $documentos->count('numcajas') }}</td> --}}
                                {{-- <td>{{ $documentos->sum('peso_bruto') }}</td> --}}
                                {{-- <td>{{ $documentos->sum('tara') }}</td> --}}
                                {{-- <td>{{ $documentos->sum('peso_neto') }}</td> --}}
                            </tr>
                        </tfoot>
                    </table>
                    <div class="mb-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
