const opciones = document.querySelectorAll(".opcion");
const iconos = document.querySelectorAll(".icono > i");


opciones.forEach((item,i) =>{
    item.addEventListener("mouseover", ()=>{
    iconos[i].style.color = "#eeeeee";
    })

    item.addEventListener("mouseleave", ()=>{
        iconos[i].style.color = "#8e8e8e85";
        })
})

