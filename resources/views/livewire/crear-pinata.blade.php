<div class="flex flex-col sm:justify-center items-center pt-6 bg-gray-100 pb-6">
    <form class="md:w-2/5 mx-6" novalidate wire:submit.prevent='crearPinata'>
        @csrf
        <div class="mb-4">
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input   id="imagen" class="block mt-1 w-full rounded-none shadow-none"
                            type="file"
                            wire:model="imagen"
                            required
                            accept="image/*"/>
            <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
        </div>
        {{-- Livewire nos da una respuesta al seleccionar la imagen y podemos aprovechar esa imagen para comprobar si existe --}}
        @if ($imagen)
        <div class=" mt-2 mb-4">
            Imagen:
            {{-- Utilizamos el metodo temporaryUrl para obtener la direccion temporal de la imagen antes de que se suba al servidor --}}
            <img class=" max-h-40"  src="{{ $imagen->temporaryUrl() }}" alt="Imagen a subir">
        </div>
        @endif
        <div class="mb-4">
            <x-input-label for="titulo" :value="__('Titulo')" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                            type="text"
                            wire:model="titulo"
                            :value="old('titulo')"
                            required />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>
        <div class="mb-4">
            <x-input-label for="descripcion" :value="__('Descripcion')" />
            <textarea   
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-36"
                wire:model="descripcion"
                id="descripcion"
                required >
                {{ old('descripcion') }}
            </textarea>
            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
        </div>
        <div class="md:flex md:gap-2 justify-between mb-4">
            <div class="w-full">
                <x-input-label for="categoria_id" :value="__('Categoria')" />
                <select wire:model="categoria_id" id="categoria_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="old('categoria_id')" required>
                    <option value=""> -Selecciona una opcion-</option>
                    @foreach ($categorias as $categoria )
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />
            </div>
            <div class="w-full">
                <x-input-label for="precio" :value="__('Precio')" />
                <x-text-input id="precio" class="block mt-1 w-full"
                                type="number"
                                wire:model="precio"
                                min="1"
                                :value="old('precio')"
                                required/>
                <x-input-error :messages="$errors->get('precio')" class="mt-2" />
            </div>
        </div>
        <div class="flex justify-end mt-4 ">
            <x-primary-button>
                {{ __('Agregar') }}
            </x-primary-button>
        </div>
    </form>
</div>
