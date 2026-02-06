<?php
// 1. Detectamos dónde estamos
$host_actual = $_SERVER['SERVER_NAME'];

// 2. Definimos las configuraciones según el lugar
if ($host_actual == "localhost" || $host_actual == "127.0.0.1") {
    // --- CONFIGURACIÓN PARA CASA (XAMPP) ---
    $servidor = "localhost";
    $usuario  = "root";
    $password = ""; // En casa suele estar vacío
    $BDD      = "grupo5_f1bilbao";
    $puerto   = "3307"; // O 3307 si lo cambiaste en casa
} else {
    // --- CONFIGURACIÓN PARA EL SERVIDOR DEL CENTRO (Ubuntu) ---
    // Usamos la IP interna o el nombre del servidor
    $servidor = "localhost"; 
    $usuario  = "admin_f1"; // Es mejor crear un usuario que no sea root
    $password = "F1_bilbao_2026"; // La contraseña que le pongas en el server
    $BDD      = "grupo5_f1bilbao";
    $puerto   = "3306";
}

// 3. Intentamos la conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $BDD, $puerto);

// 4. Verificación de errores (muy importante para el examen)
if (!$conexion) {
    echo "<div style='color:red; border:1px solid red; padding:10px;'>";
    echo "<strong>Error de conexión detectado:</strong><br>";
    echo "Lugar detectado: " . ($host_actual == "localhost" ? "CASA" : "SERVIDOR") . "<br>";
    echo "Mensaje de MySQL: " . mysqli_connect_error();
    echo "</div>";
    exit;
}
?>