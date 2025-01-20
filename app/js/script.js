document.addEventListener('DOMContentLoaded', function () {
    const selects = document.querySelectorAll('select');
    
    // Función para actualizar las opciones disponibles
    function actualizarOpciones() {
        const seleccionados = [];
        selects.forEach(select => {
            if (select.value) {
                seleccionados.push(select.value);
            }
        });

        selects.forEach(select => {
            const options = select.querySelectorAll('option');
            options.forEach(option => {
                if (seleccionados.includes(option.value)) {
                    option.hidden = true;
                } else {
                    option.hidden = false;
                }
            });
        });
    }

    // Event listeners para cada select
    selects.forEach(select => {
        select.addEventListener('change', actualizarOpciones);
    });

    // Inicializa la función para deshabilitar las opciones ya seleccionadas
    actualizarOpciones();
});
