
let bar_menu = document.getElementById("menu_interactivo");
let bar1 = document.getElementById("line1");
let bar2 = document.getElementById("line2");
let bar3 = document.getElementById("line3");
let menu_desplegable= document.getElementById("menu_desplegable");
let btn_inicio = document.getElementById("btn_inicio");
let btn_servicios = document.getElementById("btn_servicios");
let btn_contacto = document.getElementById("btn_contacto");
let msj_confirmacion = document.getElementById("msj_confirmacion");
let btn_enviar = document.getElementById("enviar");
// let btn_abrirModal= document.getElementById("enviar");
// let btn_cerrarModal= document.getElementById("btn_cerrarModal");
// let modal= document.getElementById("modal");

bar_menu.addEventListener("click", function animateBars(){
    bar1.classList.toggle("closeline1");
    bar2.classList.toggle("closeline2");
    bar3.classList.toggle("closeline3");
    menu_desplegable.classList.toggle("show")
})

btn_inicio.addEventListener("click", function close_menu_desplegable(){
    menu_desplegable.classList.toggle("show");
    bar1.classList.toggle("closeline1");
    bar2.classList.toggle("closeline2");
    bar3.classList.toggle("closeline3");
})


btn_servicios.addEventListener("click", function close_menu_desplegable(){
    menu_desplegable.classList.toggle("show");
    bar1.classList.toggle("closeline1");
    bar2.classList.toggle("closeline2");
    bar3.classList.toggle("closeline3");
})

btn_contacto.addEventListener("click", function close_menu_desplegable(){
    menu_desplegable.classList.toggle("show");
    bar1.classList.toggle("closeline1");
    bar2.classList.toggle("closeline2");
    bar3.classList.toggle("closeline3");
})

btn_enviar.addEventListener("click", function mensaje(){
    msj_confirmacion.classList.toggle("oculto");
})

// btn_abrirModal.addEventListener("click",()=>{
//     modal.showModal();
// })
// btn_cerrarModal.addEventListener("click",()=>{
//     modal.closeModal();
// } )

