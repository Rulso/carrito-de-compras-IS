<?php
    //Conectamos a la base de datos
    include("../database/database.php");
    if(isset($_POST)){
        $nombre = $_POST["nombre-registro"];
        $apellidos = $_POST["apellido-registro"];
        $correo = $_POST["email-registro"];
        $pass = $_POST["pass-registro"];
         //Guardamos en la base de datos

        //ingresamos la informacion a la base de datos
        $query = "INSERT INTO datos VALUES('','$nombre','$apellidos','$correo','$pass')";
        //mysqli_query($link, "INSERT INTO usuarios VALUES('','$Nombre','$Usuario','$Password','Usuario')") or die("<h2>Error Guardando los datos</h2>");
        try {
            mysqli_query($conexion, $query);
        } catch (Error $e) {
            die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        }   
    }
    mysqli_close($conexion);
    
    header("Location: http://localhost/proyectoISoft/index.php");
    //header('Location: index.php');
    /*
	echo'
		<script>
			location.href="index.php";
		</script>
	'
    */
?>