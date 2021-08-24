'use strict'

//Declaracion de variables
var nombreMeses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
var fechaActual = new Date();
var diaActual = fechaActual.getDate();
var numeroMes = fechaActual.getMonth();
var anoActual = fechaActual.getFullYear();

var fechas = document.getElementById('dates');
var mes = document.getElementById('mes');
var year = document.getElementById('year');
var flecha_antes = document.getElementById('mes_anterior');
var flecha_siguiente = document.getElementById('siguiente_mes');

mes.textContent = nombreMeses[numeroMes];
year.textContent = anoActual.toString();
flecha_antes.addEventListener('click', ()=> lastMonth());
flecha_siguiente.addEventListener('click', ()=> nextMonth().mes())

//Declaracion de funciones
function escribirMes(mes){

}

function ObtenerfechaHoy(mes) {

}

function esBiciesto() {
    return ((anoActual % 100 !==0) && (anoActual % 4 === 0) || (anoActual % 400 ===0));
}

function startDay(){
    let start = new Date(anoActual, numeroMes, 1);
    return ((start.getDay()-1)=== -1)? 6 : start.getDay()-1; //Le restamos uno porque por defecto la semana empieza en domingo
}

function lastMonth (){
    if(numeroMes !== 0){
        numeroMes--;
    } else {
        numeroMes = 11;
        anoActual--;
    }

    setNewDate();
}

function nextMonth (){
    if(numeroMes !== 11){
        numeroMes++;
    } else {
        numeroMes = 0;
        anoActual++;
    }

    setNewDate();
}

function setNewDate(){
    fechaActual.setFullYear(anoActual, numeroMes, diaActual);
    mes.textContent = nombreMeses[numeroMes];
    year.textContent = anoActual.toString();
}