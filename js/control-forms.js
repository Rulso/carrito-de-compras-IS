/**Inicio del form del login */
let link_login = document.getElementById('icon-login-click');
let login_form = document.getElementById('login-form');
let btn_inicio_sesion = document.getElementById('btn-inicia-sesion');
let cont = 0;


//script para que se mostrar un login xd
/*
link_login.addEventListener('click', function(e){
    e.preventDefault();
    console.log(cont);
    let email = document.getElementById('emailLogin');
    let pass = document.getElementById('passworsLogin');
    if(cont!==0){
        --cont;
        console.log(pass.value);
        login_form.style.display = "none";
        email.value = "";
        pass.value = "";

    }else{
        ++cont;
        login_form.style.display = "block";
    }
});*/

btn_inicio_sesion.addEventListener('click', function(e){
    e.preventDefault();
    let email = document.getElementById('emailLogin');
    let pass = document.getElementById('passworsLogin');

    if(checkDato(email) && checkDato(pass)){
        alert("Validate");
        email.value = "";
        pass.value = "";
    }else{
        alert("No validate");
    }


});
/**fin funciones del login */

function checkDato(data){
    if(data.value.trim() !== "" && data.value !== null && data.value !== undefined){
        return true;
    }else{
        return false;
    }
}