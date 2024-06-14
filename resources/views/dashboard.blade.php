<x-app-layout>
    <div class="swiper mySwiper swiper3">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <img class="oscurecer imagen"  src="{{ asset('img/banner.webp') }}" alt="Imagen portada">
                <div class="container absolute inset-0 flex flex-col mx-auto items-center justify-between py-10">
                    <img class=" size-24" src="{{ asset('img/logocreando.png') }}" alt="Imagen logo">
                    <h2 class="text-white text-3xl font-bold drop-shadow-lg">Tu lo sueñas nosotros lo creamos</h2>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('img/banner2.webp') }}" alt="Imagen portada 2" class="oscurecer imagen">
                <div class="container absolute inset-0 flex flex-col mx-auto items-center justify-between py-10">
                    <img class=" size-24" src="{{ asset('img/logocreando.png') }}" alt="Imagen logo">
                    <h2 class="text-white text-3xl font-bold drop-shadow-lg">Tu lo sueñas nosotros lo creamos</h2>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('img/banner3.webp') }}" alt="Imagen portada 2" class="oscurecer imagen">
                <div class="container absolute inset-0 flex flex-col mx-auto items-center justify-between py-10">
                    <img class=" size-24" src="{{ asset('img/logocreando.png') }}" alt="Imagen logo">
                    <h2 class="text-white text-3xl font-bold drop-shadow-lg">Tu lo sueñas nosotros lo creamos</h2>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class=" text-3xl pt-6 max-w-7xl mx-auto">
        <h1 class="font-bold pl-8 texto-degradado p-1">Ventas de Piñatas y Manualidades</h1>
    </div>
    <h3 class="px-8 text-center py-6 font-bold text-2xl">¿Quiénes Somos?</h3>
    <div class="max-w-2xl mx-auto">
        <div class=" mx-8 grid md:grid-cols-2 gap-10">
            <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                <img
                  alt="Imagen de karla"
                  src="{{ asset('img/quiensoy.jpg') }}"
                  class="absolute inset-0 h-full w-full object-cover"
                />
              
                <div class="relative bg-gradient-to-t from-gray-950/50 to-gray-900/25 pt-40 sm:pt-56 lg:pt-72 from">
                  <div class="p-4 sm:p-6">
                      <h3 class="mt-0.5 text-lg text-white">¿Quiénes somos? o ¿Quien soy?</h3>
                    <p class="mt-2 line-clamp-4 text-sm/relaxed text-white/95">
                      Mi nombre es Karla Ana Maria Limbert Izquierdo, yo soy la propietaria de Creando Ideas K, este proyecto inicio como un sueño para mi hace 6 años
                    </p>
                  </div>
                </div>
            </article>
            <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                <img
                  alt="Imagen de karla"
                  src="{{ asset('img/trabajo.jpg') }}"
                  class="absolute inset-0 h-full w-full object-cover"
                />
              
                <div class="relative bg-gradient-to-t from-gray-950/50 to-gray-900/25 pt-40 sm:pt-56 lg:pt-72 from">
                  <div class="p-4 sm:p-6">
                      <h3 class="mt-0.5 text-lg text-white">Mi trabajo</h3>
                    <p class="mt-2 line-clamp-4 text-sm/relaxed text-white/95">
                      Me dedico con pasion a realizar todo tipo de trabajos de manualidades, desde pequeños adornos hasta diseñar adornar completamente toda la fiesta para cualquier ocacion
                    </p>
                  </div>
                </div>
            </article>
        </div>
    </div>
    {{-- Ultimos productos --}}
    <div class="max-w-7xl mx-auto">
        <div>
            <h3 class="px-8 text-center py-6 font-bold text-2xl">Ultimas Piñatas</h3>
        </div>
        @if ($pinatas ?? '')
            <div class="swiper2 mx-auto px-8 mb-6">
                <div class="eventos__listado slider2 swiper">
                    <div class="swiper-wrapper">
                        @foreach ($pinatas as $pinata)
                            <div class="swiper-slide rounded-lg swiper-slide2">
                                    <div class="flex flex-col justify-between p-4 gap-4 h-full">
                                        <a href="{{ route('pinatas.show', $pinata) }}" class="group">
                                            <div class="w-full overflow-hidden rounded-lg ">
                                                <img src="{{ asset('storage/pinatas') . '/' . $pinata->imagen }}" alt="Piñata de {{ $pinata->titulo }}" class="group-hover:opacity-75 max-h-80 mx-auto" loading="lazy">
                                            </div>
                                            <div class="flex justify-between">
                                                <h3 class="mt-4 text-sm text-gray-700">{{ $pinata->titulo }}</h3>
                                                <p class="mt-4 text-sm text-gray-500">{{ $pinata->categoriasPinata->categoria }}</p>
                                            </div>
                                        </a>
                                        <div class="w-full">
                                            <p class="text-xl font-medium text-gray-900 mb-2">{{'$ ' .  $pinata->precio . ' mxn' }}</p>
                                            <a class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2 w-full" id="8760" rel="nofollow noopener" href="{{'https://wa.me/5219331059534?text=Hola%20me%20interesa%20este%20articulo%20' . env('APP_URL') . '/pinatas/' . $pinata->id }}" target="_blank">Me Interesa <img src="{{ asset('img/whatsapp.svg') }}" class="size-5 invert" alt="Logo whatsapp"></a>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="flex justify-end mx-8 mb-6 md:mb-0">
                <a class="inline-flex items-center justify-center px-4 py-2 bg-pink-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-500 focus:bg-pink-500 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2 w-full md:w-auto" id="8760" rel="nofollow noopener" href="{{ route('pinatas') }}" >Ver Todas</a>
            </div>
        @else 
            <p class="text-center text-sm">No hay Piñatas Aún</p>
        @endif

    </div>
    <div class="max-w-7xl mx-auto">
        <div>
            <h3 class="px-8 text-center py-6 font-bold text-2xl">Ultimas Manualidades</h3>
        </div>
        @if ($manualidades ?? '')
        <div class="swiper2 mx-auto px-8 mb-6">
            <div class="eventos__listado slider2 swiper">
                <div class="swiper-wrapper">
                    @foreach ($manualidades as $manualidade)
                        <div class="swiper-slide rounded-lg swiper-slide2">
                                <div class="flex flex-col justify-between p-4 gap-4 h-full">
                                    <a href="{{ route('manualidades.show', $manualidade) }}" class="group">
                                        <div class="w-full overflow-hidden rounded-lg ">
                                            <img src="{{ asset('storage/manualidades') . '/' . $manualidade->imagen }}" alt="Manualidad de {{ $manualidade->titulo }}" class="group-hover:opacity-75 max-h-80 mx-auto" loading="lazy">
                                        </div>
                                        <div class="flex justify-between">
                                            <h3 class="mt-4 text-sm text-gray-700">{{ $manualidade->titulo }}</h3>
                                            <p class="mt-4 text-sm text-gray-500">{{ $manualidade->categoriasManualidade->categoria }}</p>
                                        </div>
                                    </a>
                                    <div class="w-full">
                                        <p class="text-xl font-medium text-gray-900 mb-2">{{'$ ' .  $manualidade->precio . ' mxn' }}</p>
                                        <a class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2 w-full" id="8760" rel="nofollow noopener" href="{{'https://wa.me/5219331059534?text=Hola%20me%20interesa%20este%20articulo%20' . env('APP_URL') . '/manualidades/' . $manualidade->id }}" target="_blank">Me Interesa <img src="{{ asset('img/whatsapp.svg') }}" class="size-5 invert" alt="Logo whatsapp"></a>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="flex justify-end mx-8">
            <a class="inline-flex items-center justify-center px-4 py-2 bg-cyan-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-500 focus:bg-cyan-500 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 gap-2 w-full md:w-auto" id="8760" rel="nofollow noopener" href="{{ route('manualidades') }}" >Ver Todas</a>
        </div>
        @else 
            <p class="text-center text-sm">No hay Manualidades Aún</p>
        @endif
    </div>

    <h3 class="px-8 text-center py-6 font-bold text-2xl">Ubicación</h3>
    <div class=" max-w-7xl mx-auto mb-2 flex justify-end">
        <button id="enivarUbicacion" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-8">Ver Ubicacion en maps</button>
    </div>
    <div id="map" class=" h-72 mb-10"></div>
</x-app-layout>
