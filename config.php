<?php
#Datos Zona Horario
date_default_timezone_set('Europe/Madrid');
$mashours=0;   //apartir 27.3.2011

# Datos MySql
$dbhost = "www.demotrans.es";
$dbuname= "recogid_sue" ;
$dbpass = "4301234";
$dbname = "recogid_sue";


# Datos Generales del Sitio
define('_SITE_URL',			'www.demotrans.es'); // URL del Sitio (sin /)

# Datos Cliente
define('_EMP_TEL',	'91 123 45 67');
define('_EMP_MOTO',		'Su Empresa, S.L.  Mensajeros rapidos');

define('_EMP_MAILTO', '<A href="mailto:comercial@pes-systems.net">comercial@pes-systems.net</A>' );
define('_EMP_LEMA',	'Mensajeros Rapidos');
define('_EMP_FAX',	'91 123 45 68');
define('_EMP_EMPRESA',	'DemoTrans, S.L.');
define('_EMP_EMPRESA',	'DemoTrans, S.L.');
define('_EMP_MAIL',	'info&#64;demotrans.es');

define('_EMP_DP_CIUDAD',	'28020 Madrid');
define('_EMP_CIF',	'B12345678');
define('_EMP_CALLE',	'Orense, 12');




define('_EMP_MAPA', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;hl=es&amp;geocode=&amp;q=orense,+12+madrid&amp;sll=40.45063,-3.695146&amp;sspn=0.008066,0.019956&amp;ie=UTF8&amp;ll=40.457071,-3.691063&amp;spn=0.008066,0.019956&amp;z=14&amp;iwloc=addr&amp;om=1&amp;output=embed&amp;s=AARTsJqynj9rUC2__0x-xE0QEC2vwPK9cg"></iframe><br /><small><a href="http://maps.google.es/maps?f=q&amp;hl=es&amp;geocode=&amp;q=orense,+12+madrid&amp;sll=40.45063,-3.695146&amp;sspn=0.008066,0.019956&amp;ie=UTF8&amp;ll=40.457071,-3.691063&amp;spn=0.008066,0.019956&amp;z=14&amp;iwloc=addr&amp;om=1&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>');

define('_EMP_DT', '<b>DemoTrans, S.L.<br> Orense, 12<br>
28020 Madrid</b><br><br style="line-height:7px">
Teléfono: &nbsp; &nbsp; &nbsp;91 123 45 67<br>
FAX: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;91 123 45 68<br>
E-mail: <strong><a href="mailto:suempresa&#64;suempresa.es">suempresa&#64;suempresa.es</a></strong>');


 $mailreco_to = "pruebas@pes-systems.net";
 $mailreco_from = "pruebas@pes-systems.net";
 $mailreco_subject="Solicitude de recolección desde la web ".$rnumserv ." Hr ".$horatoma        ;
 $mailreco_body = $msg; 
 $mail_host     = "mail.recogidas.net";
 $mail_username = "clientes@recogidas.net";
 $mail_password = "1234567890";
 $mail_port = "587"; 

$empmailentrega_sender_name="info@demotrans.es"					; 

#envia info
 $enviainfo_to = "ventas@pes-systems.net"    ;
 $enviainfo_from = "web@pes-systems.net";
 $enviainfo_host     = "mail.pes-systems.net";
 $enviainfo_username = "ventas@pes-systems.net";
 $enviainfo_password = "912940184";
 

