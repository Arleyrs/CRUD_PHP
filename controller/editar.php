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
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $query = "UPDATE usuarios SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";
    
    if (mysqli_query($conexion, $query)) {
        echo "<div class='alert alert-success'>Usuario actualizado exitosamente.</div>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'listado.php';
                }, 5000); // 5 seconds
              </script>";
    } else {
        echo "<div class='alert alert-danger'>Error al actualizar el usuario: " . mysqli_error($conexion) . "</div>";
    }
    
    mysqli_close($conexion);
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id=$id";
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <br>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body>
    <div class="editar">
        <div class="container">
        <h2>Editar usuario</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" maxlength="10" name="telefono" value="<?php echo $row['telefono']; ?>" required class="form-control"><br>
            </div>
            <input type="submit" value="Actualizar" class="btn btn-primary">
            <a href="listado.php" class="btn btn-success">Regresar</a>
        </form>
    </div>
    <script src="../assets/bootstrap.min.js"></script>
    </div>
</body>

</html>
<?php
}
?>
