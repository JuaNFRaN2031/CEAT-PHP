let form = document.querySelectorAll('.formulario');
let cuadrado = document.getElementById("casilla");
let btnEnviar = document.getElementById("enviar");
let btnEnviar2 = document.getElementById("enviar2");

if (cuadrado!=null) {
    cuadrado.addEventListener('change', () => {
        if (cuadrado.checked) {
            btnEnviar.removeAttribute('disabled');
            btnEnviar.style.cursor = "pointer";
            validarCampos();
        } else {
            btnEnviar.setAttribute('disabled', 'disabled');
            btnEnviar.style.cursor = "not-allowed";
        }
    });
} else {
    validarCampos();
}

function validarCampos() {
    Array.from(form).forEach(form => {
        form.addEventListener('submit', event => {
           if (!form.checkValidity()) {
               event.preventDefault();
               event.stopPropagation();
           }
        });
    });
}