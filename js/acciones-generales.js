/**Inicio del form del login */
//Para el buscador

let ajax;

let btn_buscador = document.getElementById('btn-buscador');


/**funciones del login */
btn_buscador.addEventListener('click', function(e){    
    e.preventDefault();
    var request_buscar = document.getElementById('caja-buscar');
    ajax = new XMLHttpRequest();
    ajax.open("POST", "busqueda.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    ajax.onreadystatechange = function(e) {
        console.log(e);
        console.log(typeof ajax.responseText);
        console.log(ajax.responseText);
    };
    
    
    ajax.send("busqueda="+request_buscar.value);
    
});