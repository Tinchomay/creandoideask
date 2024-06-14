<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center mt-4 mb-6 text-4xl font-bold">Piñatas</h2>
        <livewire:filtrar-pinatas />
      <div class="grid gap-x-6 gap-y-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 lg:gap-x-8">
            @forelse ($pinatas as $pinata)
            <div class="flex flex-col justify-between">
              <a href="{{ route('pinatas.show', $pinata) }}" class="group">
                <div class="w-full overflow-hidden rounded-lg bg-gray-200">
                  <img src="{{ asset('storage/pinatas') . '/' . $pinata->imagen }}" alt="Piñata de {{ $pinata->titulo }}" class="w-full group-hover:opacity-75 max-h-80" loading="lazy">
                </div>
                <div class="flex justify-between">
                    <h3 class="mt-4 text-sm text-gray-700">{{ $pinata->titulo }}</h3>
                    <p class="mt-4 text-sm text-gray-500">{{ $pinata->categoriasPinata->categoria }}</p>
                </div>
                <p class="mt-1 text-lg font-medium text-gray-900 mb-2">{{'$ ' .  $pinata->precio . ' mxn' }}</p>
              </a>
                <div class="w-full flex flex-col justify-end mb-2 gap-2">
                  <button wire:click="$dispatch('mostrarAlertaPinata', {{ $pinata->id }})" class="bg-red-600 py-1 px-2 rounded-md text-white font-bold uppercase flex items-center gap-1 justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" id="eliminarPinata">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                  </svg>Eliminar
                  </button>
                    <a href="{{ route('pinatas.edit', $pinata) }}" class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white font-bold px-2 py-1 rounded cursor-pointer uppercase w-full flex gap-1 justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" id="alertaEliminarPinatas">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                    Editar Piñata</a>
                </div>
            </div>
            @empty
            <p>No hay piñatas</p>
            @endforelse
      </div>
      <div class=" mt-6">
        {{ $pinatas->links() }}
      </div>
    </div>
</div>