
let bar_menu = document.getElementById("menu_interactivo");
let bar1 = document.getElementById("line1");
let bar2 = document.getElementById("line2");
let bar3 = document.getElementById("line3");
let menu_desplegable= document.getElementById("menu_desplegable");

bar_menu.addEventListener("click", function animateBars(){
    bar1.classList.toggle("closeline1");
    bar2.classList.toggle("closeline2");
    bar3.classList.toggle("closeline3");
    menu_desplegable.classList.toggle("show")
})


