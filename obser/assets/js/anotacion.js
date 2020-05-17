var btn = document.getElementById("btn"),
    caja = document.getElementById("caja"),
        contador = 0;

    function cambio() {
        if (contador==0) {
            caja.classList.add('caja-open');
            contador = 1;
        }else{
            caja.classList.remove('caja-open');
            contador=0;
        }
    }


btn.addEventListener('click',cambio,true)