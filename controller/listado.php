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
    <title>Listado de usuarios</title>
</head>
<body>
    <br>
<div class="listado">
    <h2>Listado de usuarios</h2>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';

            $query = "SELECT * FROM usuarios";
            $result = mysqli_query($conexion, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>";
                echo "<a class='btn btn-warning' href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
                echo "<a class='btn btn-danger' href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="../index.php" class="btn btn-success">Crear nuevo usuario</a>
    <script src="assets/bootstrap.min.js"></script>
</div>
</body>
</html>

