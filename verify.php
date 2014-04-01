<?php

/* 
    Created on : 01-Abr-2014, 11:15:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */

require_once ('recaptchalib.php');
$privatekey = "6LdhEfESAAAAAIFf0d4CPt9DML1Rl2xISTdpEAhm";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if(!$resp->is_valid){
    echo 0;
   /* die ("La imagen de verificaci&oacute;n no se ha introducido correctamente. Por favor vuelve a intentarlo" .
         "(reCAPTCHA: " . $resp->error . ")");*/
}else{
    echo 1;
}

