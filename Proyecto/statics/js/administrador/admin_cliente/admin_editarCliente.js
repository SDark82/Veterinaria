// Al dar click fuera de filas se quita fondo gris.
document.addEventListener("click", (event)=>{
    const filasMacotas = document.querySelectorAll(".filas");
    var cond;
    filasMacotas.forEach((item)=>{
        if(item.contains(event.target)){
            cond = true;
        }
    })

    if (cond) {
        console.log("dentro");
    }else{
        filasMacotas.forEach((item)=>{
            item.style.backgroundColor = "";
            item.style.color = "";
        })
        const bloqueo2 = document.getElementsByClassName("bloqueo2")[0];
        const eliminar = document.querySelector(".boton-mascota.rojo");
        bloqueo2.style.display = "block";
        eliminar.style.opacity = 0.4;  
    }
})

