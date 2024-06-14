<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Creando ideas K') }}</title>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        @livewireStyles
        @stack('styles')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class=" bg-gray-100">
            <div class="h-16">
                
            </div>
            @include('layouts.navigation')
            @auth
                <livewire:navigation-admin />
            @endauth
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>
        <footer class="bg-pink-400">
            <div class="max-w-7xl mx-auto">
                <div class="grid gap-4 grid-cols-2 md:grid-cols-4 py-6 px-6">
                    <div class="text-white flex flex-col items-center md:items-start">
                        <p class=" font-bold">Siguenos</p>
                        <div class="flex gap-4 mt-2">
                            <a href="{{ 'https://www.instagram.com/creandoideask_?igsh=MXhobTdmeTZ3cW9qcg==' }}" rel="noopener noreferrer" target="_blank">
                                <svg class=" size-6" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                            </a>
                            <a href="{{ 'https://www.facebook.com/KarlitaLimbert' }}" rel="noopener noreferrer" target="_blank">
                                <svg class=" size-6" fill="white" viewBox="0 0 320 512"><path d="M279.1 288l14.3-92.7h-89v-60c0-25.4 12.5-50.2 52.3-50.2H297V6.4S260.4 0 225.4 0C152 0 104.3 44.4 104.3 124.7v70.6H22.9V288h81.4v224h100.2V288z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="text-white flex flex-col items-center md:items-start">
                        <p class=" font-bold">Menú</p>
                        <div class="flex gap-4 mt-4 flex-col items-center md:items-start">
                            <a class="text-xs" href="{{ route('dashboard') }}">Inicio</a>
                            <a class="text-xs" href="{{ route('pinatas') }}">Piñatas</a>
                            <a class="text-xs" href="{{ route('manualidades') }}">Manualidades</a>
                        </div>
                    </div>
                    <div class="text-white flex flex-col items-center md:items-start">
                        <p class=" font-bold">Información</p>
                        <div class="flex gap-4 mt-2 flex-col items-center md:items-start">
                            <a class="text-xs" href="{{ route('nosotros') }}">Quienes Somos</a>
                            <a class="text-xs" href="{{ route('nosotros') }}">Ubicación</a>
                        </div>
                    </div>
                    <div class="text-white flex flex-col items-center md:items-start">
                        <p class=" font-bold">Contactános</p>
                        <div class="flex gap-4 mt-2 flex-col">
                            <a class="text-xs" href="https://wa.me/5219331550148" rel="noopener noreferrer" target="_blank">9331550148</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-pink-300 text-center text-white text-xs">Todos los derechos Reservados Creando Ideas K. {{ now()->year }}</div>
        </footer>
    </div>
    @livewireScripts
    @stack('scripts')
    </body>
                
</html>
