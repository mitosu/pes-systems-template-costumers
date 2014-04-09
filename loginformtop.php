<?php

/* 
    Created on : 09-Abril-2014, 10:23:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */

echo '<form name="users" class="navbar-form navbar-right" role="form" action="validaus.php" method="POST">
                        <div id="text-zona-clientes" class="form-group">
                            <label for="usuario">Zona de Clientes</label>
                        </div>
                        <div class="form-group">
                            <input id="usuario" type="text" name="username" placeholder="Usuario" class="form-control" data-toggle="popover" data-placement="bottom" data-content="Para acceder al area de Clientes por favor Ingrese sus credenciales">
                        </div>
                        <div class="form-group">
                           <input type="password" name="userpass" class="form-control" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>';

