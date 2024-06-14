<x-app-layout>
    <div class=" max-w-7xl mx-auto mt-6">
        <h3 class="mt-4 text-xl text-gray-700 font-bold mb-6 text-center">{{ $pinata->titulo }}</h3>
        <div class="flex items-center flex-col md:flex-row gap-6 mx-6 mb-8">
            <div class="md:w-3/5 rounded-lg ">
                <img src="{{ asset('storage/pinatas') . '/' . $pinata->imagen }}" alt="Piñata de {{ $pinata->titulo }}" class=" max">
            </div>
            <div class="md:w-3/5">
                <p class="mt-1 text-lg font-medium text-gray-900 mb-6 text-right">{{'$ ' .  $pinata->precio . ' mxn' }}</p>
                <p>{{ $pinata->descripcion }}</p>
            </div>
        </div>
    </div>
</x-app-layout>