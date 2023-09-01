window.addEventListener("load", ()=>{
    function actualizarHora() {
        let diaHoraActual = new Date().toLocaleString();
        let diaHora = document.getElementById('dia-hora').innerHTML = diaHoraActual;
    }

    // Llama a la función actualizarHora inicialmente para mostrar la hora actual
    actualizarHora();

    // Luego, usa setInterval para llamar a la función actualizarHora cada segundo
    setInterval(actualizarHora, 1000);
})