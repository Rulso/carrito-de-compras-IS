<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div class="d-flex justify-content-center m-5">
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="emailLogin">Correo:</label>
                    <input type="email" class="form-control" id="emailLogin" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="passworsLogin">Contraseña:</label>
                    <input type="password" class="form-control" id="passworsLogin" placeholder="Contraseña">
                </div>
                <button class="btn btn-primary" id="btn-inicia-sesion">Iniciar sesion</button>
            </form>
        </div><!--para el login-->
        <div class="mt-3">
            <div class="d-flex justify-content-center">
                <div><p class="mr-1">No tienes cuenta:</p></div>
                <div><a href="registro.html"><span class="text-primary">Crear cuenta</span></a></div>                
            </div>
        </div><!--para registrar usuario-->
    </main>
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
    <script src="js/acciones-generales.js"></script>
    <script src="js/control-forms.js"></script>
</body>
</html>