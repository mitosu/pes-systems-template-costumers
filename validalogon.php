<?php
/* 
    Created on : 10-Abril-2014, 17:59:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */
include ('configsqlconnect.php');

 $xusuario;
        $xcodigo;
        $xpassword;
        $xempresa;
        $xlevel;
        $usuario;
        $msgsystem;

        if (isset($_POST)) {
            $usuario = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $pass = filter_input(INPUT_POST, 'userpass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $xusuario = trim(strtoupper($usuario));
            $consulta = "select PASSWORD,DESCRIP,NIVEL,CODIGO,COMPANIA from t4 where DESCRIP='" .$xusuario . "'";
            $query = $connect->query($consulta);

            if ($query->num_rows === 1) {
                $row_result = $query->fetch_assoc();
                $xlevel = $row_result['NIVEL'];
                $xcodigo = $row_result['CODIGO'];
                $usuario = $row_result['DESCRIP'];
                $xpassword = $row_result['PASSWORD'];
                $xempresa = $row_result['COMPANIA'];
            } else {
                $xpassword = 'no_user';
                $connect->close();
            }
            
            if ($query && ($pass == $xpassword) && ($xpassword <> 'no_user')) {
                $query->close();
                $connect->close();
                session_start();
                $_SESSION['iduser'] = $xcodigo;
                $_SESSION["user"] = $xusuario;
                $_SESSION['level'] = $xlevel;         
                header('Location: index.php');
            }else{
                header('Location: index.php?login=0');
            }
        }
