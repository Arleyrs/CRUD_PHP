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
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Confirmation</title>
</head>
<body>
    <br>
    <div class="my-div">
        <?php
        include 'conexion.php';

        $id = $_GET['id'];

        $query = "DELETE FROM usuarios WHERE id=$id";

        if (mysqli_query($conexion, $query)) {
            echo "<h2>¡Usuario eliminado exitosamente!</h2>";
            echo "<script>alert('Usuario eliminado exitosamente.');</script>";
        } else {
            echo "<h2>Error al eliminar el usuario: " . mysqli_error($conexion) . "</h2>";
        }

        mysqli_close($conexion);
        ?>

        <script>
            // JavaScript code to redirect after 5 seconds
            setTimeout(function() {
                window.location.href = "listado.php";
            }, 5000); // 5 seconds
        </script>

        <script src="../assets/bootstrap.min.js"></script>
    </div>
</body>
</html>
