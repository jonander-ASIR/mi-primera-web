<?php
require("conex.php");

// Carrera fija: Bilbao
$codigo_carrera = "23";

// Carrera fija: Bilbao
$codigo_carrera = 5; 

// Consulta clasificación mejorada
$consultaClasificacion = "
    SELECT 
        c.posicion_final,
        c.puntos_obtenidos,
        p.nombre_completo AS nombre_piloto,
        e.nombre_equipo AS escuderia, tiempo
    FROM clasificaciones c
    INNER JOIN pilotos p ON c.id_piloto = p.id_piloto
    INNER JOIN equipos e ON p.codigo_equipo = e.codigo_equipo
    WHERE c.codigo_carrera = $codigo_carrera
    ORDER BY c.posicion_final ASC
";

$resultado = mysqli_query($conexion, $consultaClasificacion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="imagenes/bootstrap/css/bootstrap.min.css">
    <title>Clasificación Final - Bilbao</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

<header id="main-header">
    <div class="container main-nav-container">
        <a href="index.html" id="logo-link">
            <img src="imagenes/f1-euskadi-sin.png" alt="Logo F1 Euskadi" id="logo-img">
        </a>

        <nav id="main-nav">
            <ul>
                <li><a href="clasificacion.php">CLASIFICACIÓN</a></li>
                <li><a href="contacto.html">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
    <div class="red-line"></div> 
</header>

<main id="main-content" class="container">
    <section id="bloque-principal">

        <h2>Clasificación Final – Carrera de Bilbao</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>POSICIÓN</th>
                    <th>PILOTO</th>
                    <th >ESCUDERÍA</th>
                    <th>TIEMPO</th>
                    <th>PUNTOS</th>
                </tr>
            </thead>
            <tbody>

            <?php
            while($fila = mysqli_fetch_assoc($resultado)){
            ?>
                <tr>
                    <td><?php echo $fila['posicion_final']; ?></td>
                    <td><?php echo $fila['nombre_piloto']; ?></td>
                    <td><?php echo $fila['escuderia']; ?></td>
                    <td><?php echo $fila['tiempo']; ?></td>
                    <td><?php echo $fila['puntos_obtenidos']; ?></td>
                </tr>
            <?php
            }
            ?>

            </tbody>
        </table>

    </section>
</main>

<script src="script.js"></script>
</body>
</html>
