function irArriba(pxPantalla){
    window.addEventListener('scroll',() =>{
        var scroll = document.documentElement.scrollTop;
        var botonArriba = document.getElementsById('botonArriba');

        if(scroll > pxPantalla){
            botonArriba.style.right = 20 + "px";
        } else{
            botonArriba.style.right = -100 + "px";
        }
})
}

irArriba(500);