<x-app-layout>
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8 h-[50vh] md:h-[65vh]">
        <h2 class="text-center mt-4 mb-8 text-2xl font-bold">Administrar</h2>

        <div class="grid grid-cols-1 tems-center text-center h justify-center">
            <div>
                <h3>Piñatas</h3>
                <div class="flex gap-4 justify-center mt-4">
                    <a class="bg-pink-400 py-1 px-2 text-white rounded-md hover:bg-pink-500" href="{{ route('admin.pinatas') }}">Ver Piñatas</a>
                    <a class="bg-pink-400 py-1 px-2 text-white rounded-md hover:bg-pink-500" href="{{ route('pinatas.create') }}">Añadir Piñata</a>
                </div>
            </div>
            <div class="mt-8">
                <h3>Manualidades</h3>
                <div class="flex gap-4 justify-center mt-4">
                    <a class="bg-cyan-400 py-1 px-2 text-white rounded-md hover:bg-cyan-500" href="{{ route('admin.manualidades') }}">Ver Manualidades</a>
                    <a class="bg-cyan-400 py-1 px-2 text-white rounded-md hover:bg-cyan-500" href="{{ route('manualidades.create') }}">Añadir Manualidad</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
