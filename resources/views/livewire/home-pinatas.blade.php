<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center mt-4 md:mb-6 text-4xl font-bold">Piñatas</h2>
        <livewire:filtrar-pinatas />
      <div class="grid gap-x-6 gap-y-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-x-8">
            @foreach ($pinatas as $pinata)
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
            <a class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2" id="8760" rel="nofollow noopener" href="{{'https://wa.me/5219331059534?text=Hola%20me%20interesa%20este%20articulo%20' . env('APP_URL') . '/pinatas/' . $pinata->id }}" target="_blank">Me Interesa <img src="{{ asset('img/whatsapp.svg') }}" class="size-5 invert" alt="Logo whatsapp"></a>
            </div>
            @endforeach
      </div>
      <div class=" mt-6">
        {{ $pinatas->links() }}
      </div>
    </div>
</div>