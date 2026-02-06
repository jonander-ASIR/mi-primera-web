<?php
// Recibimos los datos del formulario telemetria.php
$hora = $_POST['hora'];
$temp_amb = $_POST['temp_ambiente'];
$temp_asf = $_POST['temp_asfalto'];
$humedad = $_POST['humedad'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enviando Telemetría a la Nube...</title>
</head>
<body>
    <h3 style="text-align:center; font-family: sans-serif;">Guardando datos en Firebase...</h3>

    <script type="module">
        // Importamos las librerías necesarias (App y Database)
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
        import { getDatabase, ref, push } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

        // Tu configuración real que acabas de obtener
        const firebaseConfig = {
            apiKey: "AIzaSyDy20CH0RbcS31gV3ou898tx6IDh3M0VWs",
            authDomain: "f1-bilbao-telemetria.firebaseapp.com",
            databaseURL: "https://f1-bilbao-telemetria-default-rtdb.firebaseio.com",
            projectId: "f1-bilbao-telemetria",
            storageBucket: "f1-bilbao-telemetria.firebasestorage.app",
            messagingSenderId: "235521190792",
            appId: "1:235521190792:web:ce86bf4a760e0cb625a83d",
            measurementId: "G-18PNTZ7YZC"
        };

        // Inicializamos Firebase y la Base de Datos
        const app = initializeApp(firebaseConfig);
        const db = getDatabase(app);

        // Función para enviar los datos
        async function guardarEnNube() {
            try {
                const telemetriaRef = ref(db, 'telemetria_carrera');
                await push(telemetriaRef, {
                    hora_medicion: "<?php echo $hora; ?>",
                    temperatura_ambiente: <?php echo $temp_amb; ?>,
                    temperatura_asfalto: <?php echo $temp_asf; ?>,
                    humedad_porcentaje: <?php echo $humedad; ?>,
                    fecha_registro: new Date().toLocaleString('es-ES')
                });

                alert("¡Éxito! Datos guardados en la nube NoSQL.");
                window.location.href = "telemetria.php"; // Volver al formulario
            } catch (error) {
                console.error("Error al guardar:", error);
                alert("Error: " + error.message);
            }
        }

        guardarEnNube();
    </script>
</body>
</html>