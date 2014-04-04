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
        <title>Mensaje enviado</title>
    </head>
    <body>
        <?php
        require("scripts/class.phpmailer.php");

        $mail = new PHPMailer();

        $mail->IsSMTP();    
        $mail->Host = "mail.recogidas.biz";   
        $mail->SMTPAuth = true;    
        $mail->Username = "web@recogidas.biz";    
        $mail->Password = "916608490*PES";    
        $mail->Port = "25";    

        $mail->From = "web@recogidas.biz";    
        $mail->FromName = "Pes Systems";   
        $mail->AddAddress("miguel@pes-systems.net", "Mensaje Web");    
        $mail->AddReplyTo("web@recogidas.biz", "Pes Systems"); 

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
