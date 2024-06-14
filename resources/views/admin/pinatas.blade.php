<x-app-layout>
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex justify-end">
            <a class="bg-pink-400 py-2 px-4 text-white rounded-md hover:bg-pink-500" href="{{ route('pinatas.create') }}">Añadir Piñata</a>
        </div>
        <h2 class="text-center mb-8 text-2xl font-bold">Piñatas</h2>
        @if (session()->has('mensaje'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div id="alert" class="uppercase border border-green-300 bg-green-100 text-green-600 font-bold p-2 my-3 text-center rounded-lg text-sm">
                    {{ session('mensaje') }}
                </div>
            </div>
        @endif
        <livewire:admin-pinatas />
    </div>
</x-app-layout>


