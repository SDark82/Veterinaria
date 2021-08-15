// Photos Animations
window.addEventListener("load", () => {
     

})


const sleep = (ms) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve();
        }, ms)
    })
}


const user = document.getElementById("user");
const photo = document.getElementById("photo-user");
user.addEventListener("keyup", () => {
    if (user.value == "josea123") {
        photo.setAttribute("src","statics/img/FotoCarnetFondo.png")
        photo.style.animation = "fadeIn 1s";
        photo.style.opacity = 1;
    } else {
        photo.style.animation = "fadeOut 1s";
        photo.style.opacity = 0;
    }
})

