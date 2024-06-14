<div class="py-2 mb-4 max-w-4xl mx-auto">
    <h2 class="text-2xl md:text-xl text-gray-600 text-center font-normal mb-2">Buscar manualidades</h2>
    <div class=" mx-auto">
        <form class="mx-4" wire:submit.prevent='leerFormulario' novalidate>
            <div class="md:grid md:grid-cols-2 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Nombre
                    </label>
                    <input id="termino" type="text" placeholder="Ej. mameluco" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" wire:model='nombre'
                    />
                </div>
                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="categoria">Categoría</label>
                    <select class="border-gray-300 p-2 w-full rounded-md" wire:model='categoria' id="categoria">
                        <option>--Seleccione--</option>
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex justify-end gap-4" x-data>
                <a href="" class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto text-center" @click="recargarPagina">Reinicar busqueda</a>
                <input type="submit" class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto" value="Buscar"
                />
            </div>
        </form>
    </div>
</div>

@push('scrips')
<script>
    function recargarPagina(e) {
        e.preventDefault();
        location.reload()
    }
</script>
@endpush