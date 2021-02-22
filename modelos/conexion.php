<?php
//localhost
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'academia';
//para servidor web
/*$server = 'localhost';
$username = 'id15698621_root';
$password = 'Y-C{c1K6oZ<Zwf\h';
$database = 'id15698621_academia';*/

$conn = mysqli_connect($server, $username, $password, $database);


/*if(!$conn){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }else{
	 die("conexion exitosa");
	}*/

?>