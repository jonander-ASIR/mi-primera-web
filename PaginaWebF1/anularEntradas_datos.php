<?php
include("conex.php"); // Abrimos la conexión con la BBDD

$dni = $_POST["dni"]; 
$contrasena   = $_POST["contrasena"];   

// Buscamos al usuario para obtener su ID y el hash de su clave
$stmt_select = $conexion->prepare(
    "SELECT * FROM entradas WHERE dni = ?"
);
$stmt_select->bind_param("s", $dni);
$stmt_select->execute();
$resultado = $stmt_select->get_result();

if ($fila = $resultado->fetch_assoc()) {
    // Si entramos aquí, el usuario EXISTE

    if (password_verify($contrasena, $fila['contrasena'])) {
        // Borramos usando el ID (más seguro)
        $dni_a_borrar = $fila['dni'];

        // Esto NO sería vulnerable (usamos el ID)
        $borrar = "DELETE FROM entradas WHERE dni = '$dni_a_borrar'";
        mysqli_query($conexion, $borrar);

        echo "<script>
                alert('La entrada ha sido borrada con éxito');
                window.location='index.html';
              </script>";
    } else {
        // La clave no es válida
        echo "<script>
                alert('Contraseña incorrecta, vuelva a intentarlo');
                window.location='anularEntradas.html';
              </script>";
    }
} else {
    // El usuario no existe
    echo "<script>
            alert('dni incorrecto, vuelva a intentarlo');
            window.location='anularEntradas.html';
          </script>";
}

// Cerramos la consulta SELECT y la conexión
$stmt_select->close();
$conexion->close();
?>
