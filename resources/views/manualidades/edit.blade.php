<x-app-layout>
    <div class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        @if (session()->has('mensaje'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div id="alert" class="uppercase border border-green-300 bg-green-100 text-green-600 font-bold p-2 my-3 text-center rounded-lg text-sm w-3/6  mx-auto">
                    {{ session('mensaje') }}
                </div>
            </div>
        @endif
        <h2 class="text-center text-2xl font-bold mt-4">{{ $manualidade->titulo }}</h2>
    </div>
    <livewire:editar-manualidade :manualidade="$manualidade"/>    
</x-app-layout>