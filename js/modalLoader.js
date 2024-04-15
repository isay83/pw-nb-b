// Función para cargar un modal en un contenedor específico
function loadModal(modalId, containerId, modalPath) {
    $(function () {
        $(`#${containerId}`).load(modalPath, function () {
            $(`#${modalId}`).modal('show');
        });
    });
}

function closeModal(modalId) {
    // Cerrar el modal de login
    $(`#${modalId}`).modal('hide');
}

