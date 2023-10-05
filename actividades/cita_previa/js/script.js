let form2 = document.querySelectorAll('.formulario2');
let cuadrado2 = document.getElementsByClassName("casilla");

if (!cuadrado2 != null) {
    cuadrado2.addEventListener('change', () => {
        if (cuadrado2.checked) {
            validarCampos();
        }
    });
} else {
    validarCampos();
}

function validarCampos() {
    Array.from(form2).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    });
}