<?php
include ('configsqlconnect.php');
?>
<!DOCTYPE html>
<!--
/* 
    Created on : 4-Abril-2014, 10:50:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $xusuario;
        $xcodigo;
        $xpassword;
        $xempresa;
        $usuario;
        $msgsystem;

        if (isset($_POST)) {
            $usuario = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $pass = filter_input(INPUT_POST, 'userpass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $xusuario = trim(strtoupper($usuario));
            $consulta = "select PASSWORD,DESCRIP,NIVEL,CODIGO,COMPANIA from t4 where DESCRIP='" .$xusuario . "'";
            //$consulta = "select PASSWORD,DESCRIP,NIVEL,CODIGO,COMPANIA from t4 where password='" . $xpassword . "'";
            $query = $connect->query($consulta);

            if ($query->num_rows > 0) {
                session_start();
                $row_result = $query->fetch_assoc();
                $fila = $row_result['NIVEL'];
                $xcodigo = $row_result['CODIGO'];
                $usuario = $row_result['DESCRIP'];
                $xpassword = $row_result['PASSWORD'];
                $xempresa = $row_result['COMPANIA'];
            } else {
                $xpassword = 'no_user';
                mysqli_close($connect);
                exit();
            }
            if ($query && ($pass == $xpassword) && ($xpassword <> 'no_user')) {
                $_SESSION["user"] = $xusuario;
                echo 'Estas on-line: ' . $xusuario;
            }else{
                echo 'Error: Usuario no registrado';
            }
        }
        ?>
    </body>
</html>
