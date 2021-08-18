const mascotas = document.querySelectorAll(".mascota-perfil");
const mascotaOpciones = document.querySelectorAll(".mascota-opciones");

mascotas.forEach((mascota)=>{
    mascota.addEventListener("click", (event)=>{
        
        for (let i = 0; i < mascotaOpciones.length; i++) {
            mascotaOpciones[i].style.display = "none";
            mascotas[i].style.backgroundColor = "";
            mascotas[i].style.color = "";
        }
        let hijo = event.currentTarget;
        let parent = event.currentTarget.parentNode;
        let abuelo = parent.parentNode;
        let bisabuelo = abuelo.parentNode;
        let index = Array.from(bisabuelo.children).indexOf(abuelo);
        mascotaOpciones[index].style.display = "block";
        hijo.style.backgroundColor = "#363636a9"
        hijo.style.color = "#eeeeee"
    })
})

document.addEventListener("click", (event)=>{
    let cond = false;
    
  
    mascotas.forEach((item)=>{
        if (item.contains(event.target)) {
            cond = true;
        }
        
    })

    if (cond) {
    }else{
        mascotaOpciones.forEach((item)=>{
            item.style.display = "none";
            
        })
        mascotas.forEach((item)=>{
            item.style.backgroundColor = "";
            item.style.color = "";
        })
    }
    
})