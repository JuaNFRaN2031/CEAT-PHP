    let numeracion2en2 = 0;
    let numeracionSingle = 0;
    for (i = 0;i <= 1000;i += 2)
    {
        numeracion2en2 = numeracion2en2 + i + "<br>";
        document.querySelector("#insert2en2").innerHTML = numeracion2en2;
    }
    for (i = 1000;i >= 0;i --)
    {
        numeracionSingle = numeracionSingle + i + "<br>";
        document.querySelector("#insert1000a0").innerHTML = numeracionSingle;
    }
