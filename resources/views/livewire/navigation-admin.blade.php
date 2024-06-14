<div class=" bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex justify-between w-full">
                <div class="flex gap-2 sm:gap-6">
                    <x-nav-link :href="route('admin.pinatas')" :active="request()->routeIs('admin.pinatas')">
                        {{ __('Piñatas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.manualidades')" :active="request()->routeIs('admin.manualidades')">
                        {{ __('Manualidades') }}
                    </x-nav-link>
                </div>
                <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-200 select-none text-center">
                    {{ __('Menu Administrador') }}
                </a>
                <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                    {{ __('Administrar') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</div>
