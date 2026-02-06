<?php require("conex.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Telemetría NoSQL - F1 Bilbao</title>
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
                    <li class="has-submenu">
                        <a href="#">LA CARRERA</a>
                        <ul class="submenu">
                            <li><a href="#" class="sub-item">CIRCUITO</a></li>
                            <li><a href="#" class="sub-item">ESCUDERÍAS</a></li>
                            <li><a href="#" class="sub-item">HORARIOS</a></li>
                            <li><a href="clasificacion.php" class="sub-item">CLASIFICACIÓN</a></li>
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
                            <li><a href="anularEntradas.html" class="sub-item">ANULAR ENTRADAS</a></li>
                        </ul>
                    </li>
                    <li><a href="telemetria.php">TELEMETRÍA</a></li>
                    <li><a href="sorteo.html" class="sub-item">SORTEO TRES PRIMEROS PILOTOS</a></li>
                    <li><a href="contacto.html" class="sub-item">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
        <div class="red-line"></div> 
    </header>
        <section id="bloque-principal">
            <h2>Registro de Telemetría en Tiempo Real (NoSQL)</h2>
            <p>Se deben realizar 15 mediciones (Desde T-30min hasta el final de carrera).</p>
            
            <form action="guardar_nosql.php" method="POST">
                <div class="form-group">
                    <label>Hora de Medición:</label>
                    <input type="time" name="hora" required>
                </div>
                <div class="form-group">
                    <label>Temperatura Ambiente (°C):</label>
                    <input type="number" step="0.1" name="temp_ambiente" required>
                </div>
                <div class="form-group">
                    <label>Temperatura del Asfalto (°C):</label>
                    <input type="number" step="0.1" name="temp_asfalto" required>
                </div>
                <div class="form-group">
                    <label>Humedad Ambiental (%):</label>
                    <input type="number" name="humedad" required>
                </div>
                <button type="submit" class="btn-enviar">Guardar en Base de Datos NoSQL</button>
            </form>
        </section>
    </main>
      <script src="script.js"></script>
</body>
</html>