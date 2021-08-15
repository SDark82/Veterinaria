var nombre = document.getElementById("name");
var date = document.getElementById("date");
var sexo = document.getElementById("sexo");
var especie = document.getElementById("especie");
var raza = document.getElementById("raza");
const bloqueo = document.getElementById("bloqueo");
const inputs = document.querySelectorAll(".entrada");
const tablaMacotas = document.getElementById("tb-mascotas");
const btonLimpiar = document.getElementById("limpiar-button");
const btonAgregar = document.querySelector(".boton-mascota.verde");
const btonEliminar = document.querySelector(".boton-mascota.rojo");
const allInputs = document.querySelectorAll("input");

var mascotas = [];

const msjExito = document.querySelector(".msj-exito");
const mostrarMsj = ()=>{
    msjExito.style.display = "block";
}

msjExito.addEventListener("animationend", ()=>{
    msjExito.style.display = "none";
})

//Agregar Mascota, validacion de mascota duplicada.
btonAgregar.addEventListener("click", () => {
    let condicionante = false;
        if (mascotas.length == 0) {
            var mascota = {
                nombre: nombre.value,
                date: date.value,
                sexo: sexo.options[sexo.selectedIndex].text.toLowerCase(),
                especie: especie.options[especie.selectedIndex].text.toLowerCase(),
                raza: raza.options[raza.selectedIndex].text.toLowerCase(),
            }
            mascotas.push(mascota);
            agregarMascotas(mascota.nombre, mascota.date, mascota.sexo);
            mostrarMsj();
        }else{
            for (let index = 0; index < mascotas.length; index++) {
                if (nombre.value == mascotas[index].nombre ) {
                    condicionante = true;
                    break;
                }
            }
            if (condicionante) {
                duplicado();
            }else{
                var mascota = {
                    nombre: nombre.value,
                    date: date.value,
                    sexo: sexo.options[sexo.selectedIndex].text.toLowerCase(),
                    especie: especie.options[especie.selectedIndex].text.toLowerCase(),
                    raza: raza.options[raza.selectedIndex].text.toLowerCase(),
                }
                mascotas.push(mascota); 
                agregarMascotas(mascota.nombre); //Funcion para Agregar Mascota en GUI
                mostrarMsj();
            }
        }
})



const duplicado = ()=>{
    const divDuplicado = document.querySelector(".duplicado");
    divDuplicado.style.display = "block";
    divDuplicado.addEventListener("animationend", ()=>{
        divDuplicado.style.display = "none";
    })
}

//Agregar fila de mascotas.
const agregarMascotas = (nombre)=>{


    const listaMacotas = document.querySelector(".lista-mascotas");
    let opcion = document.createElement("div");
    let tituloMascota = document.createElement("div")
    let iconoX = document.createElement("i")
    let nombreMascota = document.createTextNode(nombre);
    opcion.setAttribute("class", "opcion-mascota");
    tituloMascota.setAttribute("class", "opcion-mascota-nombre");
    iconoX.setAttribute("class", "fas fa-times");
    iconoX.setAttribute("onClick", "quitarMascota(event)");

    tituloMascota.appendChild(nombreMascota);
    opcion.appendChild(tituloMascota);
    opcion.appendChild(iconoX);

    listaMacotas.appendChild(opcion);
}

const quitarMascota = (event) =>{
    const listaMascotas = document.querySelector(".lista-mascotas");
    const msjDelete = document.querySelector(".msj-delete");
    let mascota = event.currentTarget.parentNode;
    let lista = mascota.parentNode

    const index2 = Array.from(lista.children).indexOf(mascota);
    //let index2 = Array.prototype.indexOf.call(lista.children, event.currentTarget);

    mascotas.splice(index2, 1); 
    listaMascotas.removeChild(mascota);

    msjDelete.style.display = 'block';
    msjDelete.addEventListener("animationend", ()=>{
        msjDelete.style.display = 'none';
    })
}

// Boton agregar se habilita una vez se agreguen datos en inputs de seccion mascota.
inputs.forEach(item => {
    item.addEventListener("change", () => {
        if (nombre.value != "" && date.value != "" && sexo.options[sexo.selectedIndex].text != "SELECCIONE"
        && especie.options[especie.selectedIndex].text != "SELECCIONE"
        && raza.options[raza.selectedIndex].text != "SELECCIONE") {
            bloqueo.style.display = "none";
            btonAgregar.style.opacity = 1;
        } else {
            bloqueo.style.display = "block";
            btonAgregar.style.opacity = 0.4;
        }
    })
    item.addEventListener("keyup", ()=>{
        if (nombre.value == "") {
            bloqueo.style.display = "block";
            btonAgregar.style.opacity = 0.4;
        }
        if (nombre.value != "" && date.value != "" && sexo.options[sexo.selectedIndex].text != ""
        && especie.options[especie.selectedIndex].text != ""
        && raza.options[raza.selectedIndex].text != "") {
            bloqueo.style.display = "none";
            btonAgregar.style.opacity = 1;
        }

    })
})


// Accion de Boton limpiar.
btonLimpiar.addEventListener("click", ()=>{
    const select = document.querySelectorAll("select");
    const listaMascotas = document.querySelector(".lista-mascotas");
    allInputs.forEach(item=>{
        item.value = "";
    })
    select.forEach(item=>{
        item.selectedIndex = 0;
    })
    listaMascotas.innerHTML = "";
    mascotas = [];
})


//Tabla Click
var index;
function filas(event){

    const limpiar = document.getElementsByClassName("btn-limpiar");
    const filas = document.getElementsByClassName("filas");
    const bloqueo2 = document.getElementById("bloqueo2");
    const eliminar = document.querySelector(".boton-mascota.rojo");
    
    for (let index = 0; index < filas.length; index++) {
        filas[index].style.backgroundColor = '';
        filas[index].style.color = '';
    }
    event.currentTarget.style.backgroundColor = '#58585846';
    event.currentTarget.style.color = '#eeeeee';
    bloqueo2.style.display = "none";
    eliminar.style.opacity = "1";

    //Get index.
    let parent = event.currentTarget.parentNode;
    index = Array.prototype.indexOf.call(parent.children, event.currentTarget);
}


const eliminarFila = () =>{
    const eliminar = document.querySelector(".boton-mascota.rojo");
    const bloqueo2 = document.getElementById("bloqueo2");
    const body = document.getElementsByTagName("tbody")[0];
    body.removeChild(body.children[index]);
    mascotas.splice(index);
    eliminar.style.opacity = 0.4;
    bloqueo2.style.display = "block";
}


const subirArchivo = document.getElementById("imageFile");
subirArchivo.addEventListener("change", ()=>{
    const valorFile = document.querySelector(".valorFile");
    const valor = subirArchivo.files[0].name; ;
    if (valor != '') {
        valorFile.innerHTML = valor;
    }
})

const razaPerros = [
'Labrador',
'French Bulldogs',
'Bulldogs',
'Poodles ',
'Beagles',
'Rottweilers',
'Boxers',
'Gran Danes',
'Huskies Siberiano',
'Doberman',
'Schnauzers',
'Terriers',
'Pugs',
'Chihuahuas',
'Pastor Aleman',
'Dalmatas',
'Otros'
]

const razaGatos = [
    'Persa',
    'Azul ruso',
    'Siamés',
    'Angora turco',
    'Siberiano',
    'Maine Coon',
    'Bengalí',
    'Otros'
]


//Combo box especies y mascotas
especie.addEventListener("change", ()=>{
    console.log("cambio");
    const raza = document.querySelector("#raza");
    raza.innerHTML = "";
    let opcion = document.createElement("option")
    let texto = document.createTextNode("SELECCIONE");
    opcion.selected
    opcion.disabled
    opcion.value
    opcion.appendChild(texto);
    raza.appendChild(opcion);

    if (especie.options[especie.selectedIndex].text == "PERRO") {
        for (let i = 0; i < razaPerros.length; i++) {
            let opcion = document.createElement("option")
            let texto = document.createTextNode(razaPerros[i].toUpperCase());
            opcion.appendChild(texto);
            raza.appendChild(opcion);
        }
    }
    if (especie.options[especie.selectedIndex].text == "GATO") {
        for (let i = 0; i < razaGatos.length; i++) {
            let opcion = document.createElement("option")
            let texto = document.createTextNode(razaGatos[i].toUpperCase());
            opcion.appendChild(texto);
            raza.appendChild(opcion);
        }
    }
    
}) 