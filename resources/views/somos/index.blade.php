<x-app-layout>
    <div class="max-w-7xl mx-auto">
        <div>
            <h3 class="px-8 text-center pt-6 font-bold text-2xl">¿Quienes Somos?</h3>
        </div>
        <div class="flex justify-center py-8">
            <img src="{{ asset('img/quiensoy.jpg') }}" alt="Imagen de Karla" class=" w-2/5 md:w-1/3 filter grayscale">
            <img src="{{ asset('img/trabajo.jpg') }}" alt="Imagen de manualiades" class=" w-2/5 md:w-1/3 filter grayscale">
        </div>
        <div class=" w-4/5 md:w-2/3 mx-auto mb-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, a vel. Eligendi labore, corrupti dolorem alias sint hic rerum quasi similique suscipit in voluptatibus necessitatibus tenetur harum? Aperiam, amet architecto?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nesciunt velit. Explicabo autem, blanditiis laborum illo dolorem amet? Voluptatum, tempora possimus! Doloremque sint veritatis hic minus voluptatum odit beatae culpa.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illum ullam eius? Beatae aliquid ut delectus laboriosam quod quos recusandae temporibus ipsam accusamus, quasi rem ex dolore quisquam iusto nobis?</p>
        </div>
    </div>
    <h3 class="px-8 text-center pb-6 font-bold text-2xl">Ubicación</h3>
    <div class=" max-w-7xl mx-auto mb-2 flex justify-end">
        <button id="enivarUbicacion" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-8">Ver Ubicacion en maps</button>
    </div>
    <div id="map" class=" h-72 mb-10"></div>
</x-app-layout>