function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
        document.getElementById('menu').style.borderBottomRightRadius = '0';
        document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }else{
        document.getElementById('menu').style.borderRadius = '0px';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const bannerImages = document.querySelectorAll('.banner img');
    let currentImageIndex = 0;

    function changeImage() {
        bannerImages[currentImageIndex].classList.remove('active');
        currentImageIndex = (currentImageIndex + 1) % bannerImages.length;
        bannerImages[currentImageIndex].classList.add('active');
    }

    // Cambia la imagen cada 5 segundos (puedes ajustar el tiempo según tus preferencias)
    setInterval(changeImage, 3000);
});

let boton=document.querySelector("#boton");
boton.addEventListener("click",function(){
    let nombre=document.querySelector("#nombre").value;
    let apellido=document.querySelector("#apellido").value;
    console.log(nombre);
    console.log(apellido);
    if(nombre==""||apellido==""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡¡Escribe tu nombre y apellidos para poder darte la bienvenida!!',
        })
        // alert("¡¡Porfavor escribe tu nombre y apellido para poder darte la bienvenida");
    }else{
        Swal.fire(
            '¡Bienvenid@!',
            nombre+' '+apellido,
        )

    }
});
