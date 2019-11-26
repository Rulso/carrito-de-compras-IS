/*Inicio del control del form del registro*/
let nombre_registro = document.getElementById('nombre-registro');
let apellido_registro = document.getElementById('apellido-registro');
let email_registro = document.getElementById('email-registro');
let pass_registro = document.getElementById('pass-registro');
let pass_confirm_registro = document.getElementById('pass-conf-registro');
//BOTON
let btn_registro = document.getElementById('btn-registro-form');
/**Fin del control del form del registro */

btn_registro.addEventListener('click', function(e){
    e.preventDefault();
    if(checkData(nombre_registro) && checkData(apellido_registro)
        && checkData(email_registro) 
        && checkData(pass_confirm_registro) 
        && checkData(pass_confirm_registro)){
            //confirmacion de que los passwords sean correcto
            if(checkPass(pass_registro, pass_confirm_registro)){
                let dataString = 'nombre-registro='
                                +nombre_registro.value
                                +'&apellido-registro='
                                +apellido_registro.value
                                +'&email-registro='
                                +email_registro.value
                                +'&pass-registro='
                                +pass_registro.value;
                $.ajax({
                    type: "POST",
                    url: "../usuarios/registrousuarios.php",
                    data: dataString,
                    success: function() {
                        $(location).attr('href','index.php');
                    }
                });
                //location.href = "../index.php";
                //alert("Felicidades");
            }else{
                alert("Escribio mal algo, vuelva a intentarlo");
            }
    }

});

function checkData(data){
    if(data.value.trim()!=="" && data.value!==undefined && data.value !== null){
        return true;
    }else{
        data.style.border = "1px solid red";
        return false;
    }
}

function checkPass(data1, data2){
    let pass = data1.value;
    let pass_confirm = data2.value;
    if(pass.length !== pass_confirm.length) return false;
    
    for (let index = 0; index < pass.length; ++index) {
        if(pass[index] !== pass_confirm[index]){
            return false;
        }
    }
    return true;
}