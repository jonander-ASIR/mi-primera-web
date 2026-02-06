<?php
require("conex.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Buscar el usuario en la base de datos (uso de sentencia preparada)
$stmt = $conexion->prepare("SELECT dni, contrasena FROM entradas WHERE dni = ?");
if (!$stmt) {
    $err = $conexion->error;
    echo "<script>alert('ERROR en prepare(): " . addslashes($err) . "'); window.location.href='acceso.html';</script>";
    exit;
}
$stmt->bind_param('s', $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

// Número de filas obtenidas
if ($resultado && $resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    // Verificar la contraseña usando la columna 'contrasena' (hash almacenado)
    if (password_verify($password, $fila['contrasena'])) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['dni'] = $usuario;
        echo "<script>
             alert('Inicio de sesión exitoso');
             window.location.href = 'entradaUsuario.php';
        </script>";
    } else {
        // Contraseña incorrecta
        echo "<script>
             alert('Contraseña incorrecta');
             window.location.href = 'acceso.html';
        </script>";
    }
} else {
    // Usuario no encontrado — mostramos número de filas para depuración
    $count = $resultado ? $resultado->num_rows : 0;
    echo "<script>
         alert('Usuario no encontrado');
         window.location.href = 'acceso.html';
    </script>";
}
$stmt->close();
?>