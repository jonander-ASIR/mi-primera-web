<?php
session_start();
require("conex.php");

if(!isset($_SESSION['dni'])){
    header("Location: acceso.html");
    exit;
}

$dni = $_SESSION['dni'];

$consultaNombre = "SELECT nombre FROM entradas WHERE dni = '$dni'";
$resultadoNombre = mysqli_query($conexion,$consultaNombre);
$usuario = mysqli_fetch_assoc($resultadoNombre);
$nombreUsuario = $usuario['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Tabla entradas</title>
</head>
<body>

<header id="main-header">
        <div class="container main-nav-container">
            <a href="index.html" id="logo-link">
                <img src="imagenes/f1-euskadi-sin.png" alt="Logo F1 Euskadi" id="logo-img">
            </a>

            <nav id="main-nav">
                <ul>
                    <li class="has-submenu">
                        <a href="#">LA CARRERA</a>
                        <ul class="submenu">
                            <li><a href="#" class="sub-item">CIRCUITO</a></li>
                            <li><a href="#" class="sub-item">ESCUDERÍAS</a></li>
                            <li><a href="#" class="sub-item">HORARIOS</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">BILBAO</a>
                        <ul class="submenu">
                            <li><a href="#" class="sub-item">VISÍTANOS</a></li>
                            <li><a href="#" class="sub-item">GASTRONOMÍA</a></li>
                            <li><a href="#" class="sub-item">ALOJAMIENTO</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">ENTRADAS</a>
                        <ul class="submenu">
                            <li><a href="solo-carrera.html" class="sub-item">SOLO CARRERA</a></li>
                            <li><a href="acceso.html" class="sub-item">ACCESO</a></li>
                        </ul>
                    </li>
                    <li><a href="sorteo.html" class="sub-item">SORTEO TRES PRIMEROS PILOTOS</a></li>
                    <li><a href="contacto.html" class="sub-item">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
        <div class="red-line"></div> 
    </header>
<body>
<h2>Bienvenido: <?php echo $nombreUsuario; ?></h2>

<?php
$consultaDatos = "SELECT * FROM entradas WHERE dni = '$dni'";
$registros = mysqli_query($conexion, $consultaDatos);
?>

<table class="tabla_entradas">
    <thead>
        <tr>
            <th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>CORREO</th><th>TIPO DE ENTRADA</th><th>ZONA</th><th>EDAD</th><th>PRECIO</th><th>NUMERO DE ENTRADAS</th>
        </tr>
    </thead>
    <tbody>
<?php
    while($fila= mysqli_fetch_array($registros)){
?>        
    <tr>
        <td><?php echo $fila['dni'];?></td>
        <td><?php echo $fila['nombre'];?></td>
        <td><?php echo $fila['apellido'];?></td>
        <td><?php echo $fila['email'];?></td>
        <td><?php echo $fila['tipo_entrada'];?></td>
        <td><?php echo $fila['zona'];?></td>
        <td><?php echo $fila['edad'];?></td>
        <td><?php echo $fila['precio'];?></td>
        <td><?php echo $fila['num_entradas'];?></td>
    </tr>
    <?php
    }
?>
</table>
</tbody>
  <script src="script.js"></script>
</body>
</html>