<?php
    //Conectamos a la base de datos
    include("../database/database.php");
    if(isset($_POST["nombre-registro"]) && isset($_POST["apellido-registro"])){
        $correo = $_POST["email-log"];
        $pass = $_POST["pass-log"];
        //Hacer la accion para para login

        
        try {
            mysqli_query($conexion, $query);
        } catch (Error $e) {
            die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        }   
    }
    mysqli_close($conexion);
    /*
	echo'
		<script>
			location.href="index.php";
		</script>
	'
    */
?>