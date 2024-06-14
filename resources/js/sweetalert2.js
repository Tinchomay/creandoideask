import Swal from 'sweetalert2'

if(document.querySelector('#eliminarPinata')){
    Livewire.on('mostrarAlertaPinata', (pinataId) => {
        Swal.fire({
            title: "¿Estas seguro?",
            text: "Estas a punto de eliminar esta piñata",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Si, eliminar"
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('eliminarPinata', {pinata: pinataId});
            Swal.fire({
            title: "Eliminada",
            text: "Tu piñata fue eliminada correctamente",
            icon: "success"
            });
        }
        });
    })
}

if(document.querySelector('#eliminarManualidade')){
    Livewire.on('mostrarAlertaManualidade', (manualidadeId) => {
        Swal.fire({
            title: "¿Estas seguro?",
            text: "Estas a punto de eliminar esta manualidad",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Si, eliminar"
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('eliminarManualidade', {manualidade: manualidadeId});
            Swal.fire({
            title: "Eliminada",
            text: "La manualidad fue eliminada correctamente",
            icon: "success"
            });
        }
        });
    })
}
 