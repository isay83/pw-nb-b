// Función para cargar un modal en un contenedor específico
function loadModal(modalId, containerId, modalPath) {
    $(function () {
        $(`#${containerId}`).load(modalPath, function () {
            $(`#${modalId}`).modal('show');
        });
    });
}
