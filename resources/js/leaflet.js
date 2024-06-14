import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

if(document.querySelector('#map')){
    var map = L.map('map').setView([18.3340, -93.2074], 13);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([18.3340, -93.2074]).addTo(map)
        .bindPopup('Creando Ideas K')
        .openPopup();
}