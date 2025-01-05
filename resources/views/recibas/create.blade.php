<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Reciba') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-danger-button>
                        <a href="{{ route('recibas.index') }}" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Cancelar</a>
                        </x-danger-button>
                    </div>
                    <div class="mb-4">
                        <form action="{{ route('recibas.store') }}" method="POST">
                            @csrf
                            <div class="py-2 text-center">SECCION DE MAQUILADOR</div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="lote" class="block mb-2 text-sm font-bold text-gray-700">Maquilador: <span class="">*</span></label>
                                    <x-select name="customer_id" id="lote" class="w-full" onchange="getCustomers(this.value)">
                                        <option value="">Seleccione una empresa</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->empresa }}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                                <div class="mb-4">
                                    <x-label for="cliente">Referente</x-label>
                                    <x-select name="referente_id" id="cliente" class="w-full">
                                    </x-select>
                                </div>
                                <div class="mb-4">
                                    <x-label>Acopiador</x-label>
                                    <x-select name="acopio_id" class="w-full">
                                        <option value="">Seleccione acopiador</option>
                                        @foreach ($acopios as $acopio)
                                            <option value="{{ $acopio->id }}">{{ $acopio->name }}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                            </div>
                            <div class="py-2 text-center">SECCION DE ORIGEN</div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <x-label>Nombre huerto</x-label>
                                    <x-input name="huerto" class="w-full" placeholder="Nombre huerto" />
                                </div>
                                <div class="mb-4">
                                    <x-label>HUE</x-label>
                                    <x-input name="hue" class="w-full" placeholder="HUE" maxlength="50" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Productor</x-label>
                                    <x-input name="productor" class="w-full" placeholder="Productor" maxlength="100" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Localidad</x-label>
                                    <x-input name="localidad" class="w-full" placeholder="Localidad" maxlength="50" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Municipio</x-label>
                                    <x-input name="municipio" class="w-full" placeholder="Municipio" maxlength="50" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Estado</x-label>
                                    <x-input name="estado" class="w-full" placeholder="Estado" maxlength="50" />
                                </div>
                            </div>
                            <div class="py-2 text-center">SECCION DE CORTE GUIA Y PESO</div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <x-label>Guia</x-label>
                                    <x-input name="guia" class="w-full" placeholder="Numero de guia" maxlength="50" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Fecha de corte</x-label>
                                    <x-input type="date" name="fecha_corte" class="w-full"/>
                                </div>
                                <div class="mb-4">
                                    <x-label>Peso externo</x-label>
                                    <x-input type="number" name="peso_externo" class="w-full"/>
                                </div>
                                <div class="mb-4">
                                    <x-label>Procesos</x-label>
                                    <x-select name="proceso_id" class="w-full">
                                        <option value="">Seleccione una opcion</option>
                                        @foreach ($procesos as $proceso)
                                            <option value="{{ $proceso->id }}">{{ $proceso->proceso }}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                            </div>
                            <div class="py-2 text-center">SECCION DE VEHICULOS</div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <x-label>Tipo de vehiculo</x-label>
                                    <x-input name="tipo" class="w-full" placeholder="Tipo de vehiculo" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Marca</x-label>
                                    <x-input name="marca" class="w-full" placeholder="Marca" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Color</x-label>
                                    <x-input name="color" class="w-full" placeholder="Color" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Placa</x-label>
                                    <x-input name="placas" class="w-full" placeholder="Placa" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Chofer</x-label>
                                    <x-input name="chofer" class="w-full" placeholder="Nombre del chofer" />
                                </div>
                                <div class="mb-4">
                                    <x-label>Comentarios</x-label>
                                    <x-input name="comentarios" class="w-full" placeholder="Comentarios" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <x-button class="w-full">Guardar</x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function getCustomers(value) {
        let url = "{{ url('reciba') }}/" + value;
        console.log(url);
        $.ajax({
                url: url,//'recibas/' + value,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Vacía y actualiza las opciones del segundo select
                    $("#cliente").html('<option value="">Seleccione una opción</option>');
                    console.log(data);
                    $.each(data, function (index, option) {
                        $("#cliente").append(`<option value="${option.id}">${option.nombre}</option>`);
                    });
                },
                error: function () {
                    console.error('Error al cargar las opciones');
                    $("#cliente").html('<option value="">Error al cargar opciones</option>');
                },
            });
        }
</script>
