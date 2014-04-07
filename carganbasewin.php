<?php
      $dfecha = DATE("Y-m-d");
      $hora =$fecha["hours"]+6;
      $min  =$fecha["minutes"];
      $sec  =$fecha["seconds"];
	  $hora =STR_PAD(trim($hora),2,'0',STR_PAD_LEFT  );
      $min =STR_PAD(trim($min),2,'0',STR_PAD_LEFT  );
      $mitime=$hora."H".$min ; //."'".$sec;
	  
include "configsql.php";
$ip = $REMOTE_ADDR;
$comando="insert into nbasewin (COMPANIA,DIR1,DP,CIUDAD,TEL1,FAX,CONTACTO1,EMAIL ,NOTAS,FECHA,HORA,IP,PROGRAMAS) values  ('". $empresa."','".$direccion."','".$dp."','".$ciudad."','".$telefono."','".$fax."','".$nombre."','".$email."','".$mensaje."','".$dfecha."','".$mitime."','".$ip."',
'".$servicios.")" ;

$result=mysql_query($comando, $connect);

