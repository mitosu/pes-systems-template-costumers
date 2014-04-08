<?php
/* 
    Created on : 28-Abril-2014, 17:59:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */

include ('config.php');

$connect = new mysqli($dbhost, $dbuname, $dbpass, $dbname);
if($connect->connect_error){
     die('Error de conexión: '.'('.$conexion->connect_errno.') '.$conexion->connect_error);
     exit();
}


