
const sleep = (ms) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve();
        }, ms)
    })
}

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


if (location.href == "http://localhost:3000/Proyecto/modules/login.php") {
    const user = document.getElementById("user");
    const photo = document.getElementById("photo-user");
    user.addEventListener("keyup", () => {
        if (user.value == "josea123") {
            photo.setAttribute("src","/Proyecto/statics/img/FotoCarnetFondo.png")
            photo.style.animation = "fadeIn 1s";
            photo.style.opacity = 1;
        } else {
            photo.style.animation = "fadeOut 1s";
            photo.style.opacity = 0;
        }
    }) 
}



