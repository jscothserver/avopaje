<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detalle tarima') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container px-3 py-3">
                    <div class="mb-4">
                        <x-button>
                        <a href="#" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700">Crear nueva caja</a>
                        </x-button>
                    </div>
                    <form method="POST">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <x-label>Cantidad de cajas</x-label>
                                <x-input name="numcajas" id="numcajas" placeholder="Ingrese numero de cajas" class="w-full" />
                                @error('numcajas')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label>Tipo de caja</x-label>
                                <x-select id="box_id" name="box_id" class="block w-full mt-1" onchange="llamarpeso()">
                                    <option value="">Seleccione un tipo de caja</option>
                                    @foreach ($boxes as $box)
                                        <option value="{{$box->id}}" data-peso="{{$box->peso}}">{{$box->name}}</option>
                                    @endforeach
                                </x-select>
                                @error('box_id')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-label>Peso</x-label>
                                <x-input name="peso" id="peso" placeholder="Peso de cajas" class="w-full" />
                                @error('peso')
                                    <span class="mt-2 text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button class="w-full mt-6" id="saveTemporal">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function llamarpeso(){
        const selectElement = document.getElementById('box_id');
        var pesocaja = selectElement.options[selectElement.selectedIndex].getAttribute('data-peso');
        var numcajas = $("#numcajas").val();
        var peso     = pesocaja * numcajas;
        $("#peso").val(peso);
    }
    $(document).on('click', '#saveTemporal', function(){
        alert('hola');
        // var numorden = 1;
        // var numcajas = $("#numcajas").val();
        // var box_id   = $("#box_id").val();
        // var peso     = $("#peso").val();
        // $.ajax({
        //     url: "{{ route('detalletarimas.store') }}",
        //     type: "POST",
        //     data: {
        //         "_token": "{{ csrf_token() }}",
        //         "numorden": numorden,
        //         "numcajas": numcajas,
        //         "box_id": box_id,
        //         "peso": peso
        //     },
        //     success: function(response){
        //         console.log(response);
        //     }
        // });
    });
</script>
