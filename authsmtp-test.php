<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require("scripts/class.phpmailer.php");

        $mail = new PHPMailer();

        $mail->IsSMTP();    // set mailer to use SMTP
        $mail->Host = "mail.recogidas.biz";    // specify main and backup server
        $mail->SMTPAuth = true;    // turn on SMTP authentication
        $mail->Username = "web@recogidas.biz";    // SMTP username -- CHANGE --
        $mail->Password = "916608490*PES";    // SMTP password -- CHANGE --
        $mail->Port = "25";    // SMTP Port

        $mail->From = "web@recogidas.biz";    //From Address -- CHANGE --
        $mail->FromName = "Pes Systems";    //From Name -- CHANGE --
        $mail->AddAddress("miguel@pes-systems.net", "Mensaje Web");    //To Address -- CHANGE --
        $mail->AddReplyTo("web@recogidas.biz", "Pes Systems"); //Reply-To Address -- CHANGE --

        $mail->WordWrap = 50;    // set word wrap to 50 characters
        $mail->IsHTML(false);    // set email format to HTML

        $mail->Subject = "Test SMTP";
        $mail->Body = "Test SMTP Mensaje!";

        if (!$mail->Send()) {
            echo "El mensaje no pudo ser enviadot. <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }

        echo "El Mensaje fue enviado correctamente";
        ?>
    </body>
</html>
