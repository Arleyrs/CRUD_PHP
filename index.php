<!-- 
    
░█████╗░██████╗░██╗░░░░░███████╗██╗░░░██╗  ██████╗░░█████╗░░░░░░██╗░█████╗░░██████╗
██╔══██╗██╔══██╗██║░░░░░██╔════╝╚██╗░██╔╝  ██╔══██╗██╔══██╗░░░░░██║██╔══██╗██╔════╝
███████║██████╔╝██║░░░░░█████╗░░░╚████╔╝░  ██████╔╝██║░░██║░░░░░██║███████║╚█████╗░
██╔══██║██╔══██╗██║░░░░░██╔══╝░░░░╚██╔╝░░  ██╔══██╗██║░░██║██╗░░██║██╔══██║░╚═══██╗
██║░░██║██║░░██║███████╗███████╗░░░██║░░░  ██║░░██║╚█████╔╝╚█████╔╝██║░░██║██████╔╝
╚═╝░░╚═╝╚═╝░░╚═╝╚══════╝╚══════╝░░░╚═╝░░░  ╚═╝░░╚═╝░╚════╝░░╚════╝░╚═╝░░╚═╝╚═════╝░

░██████╗██╗███████╗██████╗░██████╗░░█████╗░
██╔════╝██║██╔════╝██╔══██╗██╔══██╗██╔══██╗
╚█████╗░██║█████╗░░██████╔╝██████╔╝███████║
░╚═══██╗██║██╔══╝░░██╔══██╗██╔══██╗██╔══██║
██████╔╝██║███████╗██║░░██║██║░░██║██║░░██║
╚═════╝░╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚═╝

Arley Rojas Sierra
 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <title>Create user</title>
    <script>
        function validarFormulario() {
            var nombre = document.getElementById('nombre').value;
            var correo = document.getElementById('correo').value;
            var telefono = document.getElementById('telefono').value;

            if (nombre === '' || correo === '' || telefono === '') {
                alert('No hay datos en el formulario');
                return false; // Detener el envío del formulario
            }
        }
    </script>
</head>
<body>

    <br>
    <br>
    <div class="my-div">
        <h2>Formulario de creación de usuarios</h2>
        <br>
        <form action="controller/crear.php" method="POST" onsubmit="return validarFormulario();"> 
            <div class="input-group mb-3">
                <span for="nombre" class="input-group-text" id="name">Nombre</span>
                <input id="nombre" name="nombre" required type="text" class="form-control" placeholder="Nombre del usuario" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span for="correo" class="input-group-text" id="correo">Correo</span>
                <input id="correo" name="correo" required type="email" class="form-control" placeholder="Correo" aria-label="mail" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span for="telefono" class="input-group-text" id="celular">Celular</span>
                <input id="telefono" name="telefono" minlength="10" required type="number" class="form-control" placeholder="Celular" aria-label="Celular" aria-describedby="basic-addon1">
            </div>
            <div class="justify-content-center">  
                <a class="btn btn-primary" href="controller/listado.php" role="button">Ver usuarios</a>
                <button type="submit" class="btn btn-primary mb-3">Crear usuario</button>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>
