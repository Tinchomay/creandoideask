<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center mt-4 mb-6 text-4xl font-bold">Manualidades</h2>
        <livewire:filtrar-manualidades />
      <div class="grid gap-x-6 gap-y-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-x-8">
            @forelse ($manualidades as $manualidade)
            <div class="flex flex-col justify-between">
              <a href="{{ route('manualidades.show', $manualidade) }}" class="group">
                <div class="w-full overflow-hidden rounded-lg bg-gray-200">
                  <img src="{{ asset('storage/manualidades') . '/' . $manualidade->imagen }}" alt="Piñata de {{ $manualidade->titulo }}" class="w-full group-hover:opacity-75 max-h-80" loading="lazy">
                </div>
                <div class="flex justify-between">
                    <h3 class="mt-4 text-sm text-gray-700">{{ $manualidade->titulo }}</h3>
                    <p class="mt-4 text-sm text-gray-500">{{ $manualidade->categoriasManualidade->categoria }}</p>
                </div>
              </a>
                <div class="w-full flex flex-col justify-center">
                  <p class="mt-1 text-lg font-medium text-gray-900 mb-2 text-center">{{'$ ' .  $manualidade->precio . ' mxn' }}</p>
                  <a class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2" id="8760" rel="nofollow noopener" href="{{'https://wa.me/5219331059534?text=Hola%20me%20interesa%20este%20articulo%20' . env('APP_URL') . '/manualidades/' . $manualidade->id }}" target="_blank">Me Interesa <img src="{{ asset('img/whatsapp.svg') }}" class="size-5 invert" alt="Logo whatsapp"></a>
                </div>
            </div>
            @empty
            <p>No hay manualidades</p>
            @endforelse
      </div>
      <div class=" mt-6">
        {{ $manualidades->links() }}
      </div>
    </div>
</div>
