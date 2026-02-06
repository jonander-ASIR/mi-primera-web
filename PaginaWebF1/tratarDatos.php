<!--Conexion a la base de datos-->
<?php
require("conex.php");
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena = $_POST["contrasena"];
$repetircontrasena = $_POST["repetircontrasena"];
$email = $_POST["email"];
$tipo_entrada = $_POST["tipo_entrada"];
$zona = $_POST["zona"];
$edad = $_POST["edad"];
$num_entradas = $_POST["num_entradas"];

// El precio viene deshabilitado, normalmente se calcula en php o js
$precio = $_POST["precio"] ?? 0;



//Comprobar si la contraseña concide
if ($_POST["contrasena"]!== $_POST["repetircontrasena"]){
    echo "<script>
          alert('Las contraseñas no coinciden');
          window.location.href = 'solo-carrera.html';
          </script>"; 
    exit;    
}
// cifrar contraseña
$contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

//Comprobar que un mismo dni no puede varias entradas y te manda de nuevo al dni
$consulta = "SELECT dni FROM entradas WHERE dni = '$dni' ";
$resultado = mysqli_query($conexion,$consulta);

if(mysqli_num_rows($resultado) > 0){
    echo "<script>
        alert('Este DNI ya tiene una entrada registrada');
        window.location.href = 'solo-carrera.html';
        </script>";
        exit;
}

//Validar si esta el precio 
if (!isset($_POST['precio']) || $_POST['precio'] <= 0) {
    die("Error: el precio no es válido.");
}

//Insertar en la base de datos
$sql = "INSERT INTO entradas (dni, nombre, apellido, contrasena, email, tipo_entrada, zona, edad, precio, num_entradas)
VALUES ('$dni', '$nombre', '$apellido', '$contrasena_cifrada','$email','$tipo_entrada','$zona', '$edad','$precio','$num_entradas')";

if (mysqli_query($conexion, $sql)){
    echo "<script>
         alert('Entrada registrada correctamente');
         window.location.href = 'index.html';
    </script>";
} else {
    echo "ERROR al registrar la entrada: " . mysqli_error($conexion);
    echo "<br>Consulta: " . $sql;
}

?>