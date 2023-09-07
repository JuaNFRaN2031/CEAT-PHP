/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
window.addEventListener("load", () => {
   document.querySelector("#formulario").addEventListener("submit", validarFormulario)
});

function validarFormulario(e) {
    e.preventDefault();
    let nombre = document.querySelector('#nombre');
    let email = document.querySelector('#email');
    if (!nombre.value) {
        nombre.style.backgroundColor="rgba(232,33,79,0.9)";
        return;
    }
    if (!email.value) {
        email.style.backgroundColor="rgba(232,33,79,0.9)";
        return;
    }
    /*ALERTA*/
    let timerInterval;
    Swal.fire({
        title: 'Validando...',
        timer: 4000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()

        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
            this.submit();
        }
    })
}

function myFunction() {
    let x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}