if(document.querySelector('#enivarUbicacion')) {
    const botonUbi = document.querySelector('#enivarUbicacion');
    botonUbi.addEventListener('click', function enivarLocation() {
        const lat = 18.3340;
        const lon = -93.2074;
        const mapsURL = `https://www.google.com/maps?q=${lat},${lon}&z=15&hl=es`;
        
        // Redirigir a Google Maps
        window.open(mapsURL, '_blank');
    })
}


