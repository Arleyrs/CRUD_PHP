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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Confimación</title>
</head>
<body>
    <br>
    <div class="my-div">
<?php
include 'conexion.php';
// ... Código de conexión a la base de datos ...

// Obtener el ID del usuario de la URL
$idUsuario = $_GET['id'];

// Consultar los datos del usuario usando el ID
$query = "SELECT * FROM usuarios WHERE id = " . $idUsuario;
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);
echo "<h2>¡Usuario creado exitosamente!</h2>";
// Verificar si se encontraron datos del usuario
if ($row) {
    // Mostrar los datos del usuario
    echo "<table class='table table-striped'>";
    echo "<tr><th>Detalles del proceso:</th></tr>";
    echo "<tr><td>ID: " . $row['id'] . "</td></tr>";
    echo "<tr><td>Nombre: " . $row['nombre'] . "</td></tr>";
    echo "<tr><td>Correo: " . $row['correo'] . "</td></tr>";
    echo "<tr><td>Teléfono: " . $row['telefono'] . "</td></tr>";
    echo "</table>";
} else {
    echo "No se encontraron datos del usuario.";
}
// ... Cerrar la conexión y otros códigos adicionales ...
?>

<a href="../index.php" class="btn btn-primary mb-3">Regresar</a>
<script src="../assets/bootstrap.min.js"></script>
<div>

</body>
</html>

