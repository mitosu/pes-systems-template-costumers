<?php

/* 
    Created on : 09-Abril-2014, 10:25:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */
if(isset($_GET['desconectar'])){
    session_destroy();
    header('Location: index.php');
}

echo '<form name="session" class="navbar-form navbar-right" role="form">
                        <div id="text-zona-clientes" class="form-group">
                            <label for="usuario">Usuario en línea: <span class="label label-warning">'.$_SESSION["user"].'</span></label>
                        </div>
                        <button type="submit" name="desconectar" class="btn btn-success">Desconectar</button>
                    </form>';


