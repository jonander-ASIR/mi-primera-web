<?php
//CONEXXION AL SERVIDOR MYSQL
//Tres parametros para conectarnos al servidor MySQL
$servidor = "localhost"; // localhost o la IP del servidor
$usuario  = "root"; //en Xamp es root
$password = ""; // en Xamp la contraseña este en blanco
$BDD = "grupo5_f1bilbao";
$puerto = "3306";
//$puertocasa = "3307"; //esto es en casa;
//Establecemos la coneion al servidor indicando ya el nombre de la bbdd
$conexion = mysqli_connect($servidor,$usuario,$password,$BDD,$puerto);
//$conexion tiene la conexion(true) o es falsa si ha fallado la conexion 
if(!$conexion){
    echo "La conexion a la BBDD ha fallado<br>";//Mensaje si no se conecta
}
?>