<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro usuario</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div>
            <form action="usuarios/registrousuarios.php" method="POST" >
                <div class="form-group">
                    <label for="nombre-registro">Nombre:</label>
                    <input type="text" class="form-control" name="nombre-registro" id="nombre-registro" placeholder="Nombre">
                </div><!--input-->
                <div class="form-group">
                    <label for="apellido-registro">Apellido:</label>
                    <input type="text" class="form-control" name="apellido-registro" id="apellido-registro" placeholder="Apellido">
                </div><!--input-->
                <div class="form-group">
                    <label for="emailLogin">Correo:</label>
                    <input type="email" class="form-control" name="email-registro" id="email-registro" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div><!--input-->
                <div class="form-group">
                    <label for="passworsLogin">Contraseña:</label>
                    <input type="password" class="form-control" name="pass-registro" id="pass-registro" placeholder="Contraseña">
                </div><!--inputs-->
                <div class="form-group">
                    <label for="passworsLogin">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="pass-conf-registro" placeholder="Confirmar contraseña">
                </div><!--inputs-->
                <button type="submit" id="btn-registro-form" class="btn btn-primary">Registrar</button>
            </form>
        </div><!--contenedor para manipular el login-->
    </div><!--contenedor del form del registro-->
    <footer class="bg-dark pt-3">
            <div class="d-flex flex-row justify-content-around espacio-comun">
                <div class="d-flex flex-column">
                    <div><a href="#">Mi cuenta</a></div>
                    <div><a href="#">Ofertas</a></div>
                </div>
                <div class="d-flex flex-column">
                    <div><a href="#">Vende</a></div>
                    <div><a href="#">Quejas</a></div>                
                </div>
                <div class="d-flex flex-column">
                    <div><a href="#">Ayuda</a></div>
                </div>
            </div><!--Opciones de la tienda-->
            <div class="d-flex justify-content-center">
                <div><p class="text-light">Copyright&copy;2019-2090 Tieda de C.V.</p></div><!--div copyright-->
            </div><!--copy right-->
        </footer><!--footer pagina principal-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/acciones-generales.js"></script>
    <!--<script src="js/registro-script.js"></script>-->
</body>
</html>