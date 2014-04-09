<?php

/* 
    Created on : 09-Abril-2014, 10:25:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */
if(isset($_GET['desconectar'])){
    session_destroy();
}
echo '<div class="nav navbar-nav navbar-right"><p>Usuario: '.$_SESSION["user"].'</p></div>';
echo '<button type="submit" class="btn btn-primary" name="desconectar" id="desconectar"></button>';


