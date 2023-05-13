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
$servername = "localhost";  // Nombre del servidor de la base de datos
$username = "root";  // Nombre de usuario de la base de datos
$password = "";  // Contraseña de la base de datos
$dbname = "crud_db";  // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

// Establecer el conjunto de caracteres
$conexion->set_charset("utf8");
?>
