<?php
#Datos Zona Horario
date_default_timezone_set('Europe/Madrid');
$mashours=0;   //apartir 27.3.2011

# Datos MySql
$dbhost = "www.recogidas.biz";
$dbuname= "recogidasbiz" ;
$dbpass = "Recobiz2014";
$dbname = "recogidasbiz";

# Datos MySql
/*
$dbhost = "localhost";
$dbuname= "root" ;
$dbpass = "";
$dbname = "pes";
 * */

#Datos recaptcha
define('_REC_PUBLIC_KEY', '6LdhEfESAAAAAA1O5pSuKf-Jjq-RGIg_qrDsn9FE');
define('_REC_PRIVATE_KEY', '6LdhEfESAAAAAIFf0d4CPt9DML1Rl2xISTdpEAhm');

# Datos Generales del Sitio
define('_SITE_URL', 'www.demotrans.es'); // URL del Sitio (sin /)
define('_EMP_KEYWORDS', 'transporte madrid, empresa transporte madrid, mensajeria madrid');

# Datos Cliente
define('_EMP_TEL',	'91 123 45 67');
define('_EMP_MOTO',	'Su Empresa, S.L.  Mensajeros rapidos');
define('_EMP_TITLE', '<title>DemoTrans | Mensajeros | Mensajerías | Courier | Transporte Urgente</title>');
define('_EMP_MAILTO', '<a href="mailto:comercial@pes-systems.net">comercial@pes-systems.net</a>' );
define('_EMP_MAIL_INFO', 'info@demotrans.es ');
define('_EMP_LEMA',	'Mensajeros Rapidos');
define('_EMP_LEMA_EMPRESA', 'Quienes somos');
define('_EMP_SERV_NACIONAL', 'Servicio Nacional');
define('_EMP_SERV_INSULAR', 'Sevicio Insular');
define('_EMP_SERV_INTERNACIONAL', 'Sevicio Internacional');
define('_EMP_TRABAJAR', 'Trabaja con nosotros');
define('_EMP_INFO', 'Solicitud de información');
define('_EMP_LEMA_LOCATION', 'Localización');
define('_EMP_ZN_CLIENTES', 'Zona Clientes');
define('_EMP_TEL34', '+34 91 000 000');
define('_EMP_SUPPORT_SPAIN', '1 800 000 0000');
define('_EMP_SKYPE', 'skype:pessystems?call');
define('_EMP_FAX',	'91 123 45 68');
define('_EMP_EMPRESA','DemoTrans, S.L.');
define('_TEL_COMERCIAL', '91 660 84 90');
define('_TEL_RECOGIDAS', '91 000 00 00');
define('_EMP_MAIL','info&#64;demotrans.es');
define('_EMAIL_COMERCIAL', '<a href="mailto:comercial@pes-systems.net">comercial@pes-systems.net</a>');
define('_EMAIL_RECOGIDAS', '<a href="mailto:recogidas@pes-systems.net">recogidas@pes-systems.net</a>');
define('_EMP_DP_CIUDAD','28020 Madrid');
define('_EMP_CIF','B12345678');
define('_EMP_CALLE',	'Orense, 12');




define('_EMP_MAPA', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;hl=es&amp;geocode=&amp;q=orense,+12+madrid&amp;sll=40.45063,-3.695146&amp;sspn=0.008066,0.019956&amp;ie=UTF8&amp;ll=40.457071,-3.691063&amp;spn=0.008066,0.019956&amp;z=14&amp;iwloc=addr&amp;om=1&amp;output=embed&amp;s=AARTsJqynj9rUC2__0x-xE0QEC2vwPK9cg"></iframe><br /><small><a href="http://maps.google.es/maps?f=q&amp;hl=es&amp;geocode=&amp;q=orense,+12+madrid&amp;sll=40.45063,-3.695146&amp;sspn=0.008066,0.019956&amp;ie=UTF8&amp;ll=40.457071,-3.691063&amp;spn=0.008066,0.019956&amp;z=14&amp;iwloc=addr&amp;om=1&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>');

define('_EMP_DT', '<b>DemoTrans, S.L.<br> Orense, 12<br>
28020 Madrid</b><br><br style="line-height:7px">
Teléfono: &nbsp; &nbsp; &nbsp;91 123 45 67<br>
FAX: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;91 123 45 68<br>
E-mail: <strong><a href="mailto:suempresa&#64;suempresa.es">suempresa&#64;suempresa.es</a></strong>');


 $mailreco_to = "pruebas@pes-systems.net";
 $mailreco_from = "pruebas@pes-systems.net";
// $mailreco_subject="Solicitude de recolección desde la web ".$rnumserv ." Hr ".$horatoma;
 //$mailreco_body = $msg; 
 $mail_host     = "mail.recogidas.net";
 $mail_username = "clientes@recogidas.net";
 $mail_password = "1234567890";
 $mail_port = "587"; 

$empmailentrega_sender_name="info@demotrans.es"					; 

#envia info
 $enviainfo_to = "pruebas@pes-systems.net";
 //$enviainfo_to = "ventas@pes-systems.net";
 
 $enviainfo_from = "web@recogidas.biz";
 $enviainfo_host     = "mail.recogidas.biz";
 $enviainfo_username = "web@recogidas.biz";
 $enviainfo_password = "916608490*PES";
 $enviainfo__port    = 25;
 
 
 /*
 $enviainfo_from = "clientes@recogidas.net";
 $enviainfo_host     = "mail.recogidas.net";
 $enviainfo_username = "clientes@recogidas.net";
 $enviainfo_password = "1234567890";
 $enviainfo__port    = 25;
 */
 
 
 

 

