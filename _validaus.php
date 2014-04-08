
<?php
include "configsql.php";

$dhoy = DATE("d-m-y");

if ($xpescodigo == 0) {
    $xusuario = strtoupper($xusuario);
    $consulta = "select PASSWORD,DESCRIP,NIVEL,CODIGO,COMPANIA from t4 where password='" . $xpassword . "'";
} else {
    $ntempcod = $xpescodigo / 7722992;
    $consulta = "select PASSWORD,DESCRIP,NIVEL,CODIGO,COMPANIA from t4 where codigo='" . $ntempcod . "'";
}

echo $consulta;

$query = mysql_query($consulta, $connect);

$nfilas = mysql_num_rows($query);
if ($nfilas > 0) {
    $nivel = mysql_result($query, 0, 2);
    $xcodigo = mysql_result($query, 0, 3);
    $xpescodigo = $xcodigo * 7722992;
    $xusuario = mysql_result($query, 0, 1);
    $xpassword = mysql_result($query, 0, 0);
    $xempresa = trim(mysql_result($query, 0, 4));
    print("<html>");
    ?>
<script LANGUAGE="JavaScript">
    var pagina = "clientes.php?access=1";
    function redireccionar()
    {
        location.href = pagina;
    }
</script>

<?
include "header.php"

?>
<tr>
    <td valign="top" width="724" height="430" class="content">

        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td valign="top" width="473" height="430">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" width="473" height="237"><div style="margin:39 20 0 31px "><img src="images/2_p4.jpg" align="left" style="margin-right:20px" alt="" border="0"><br style="line-height:2px"><img src="images/zonaclientes.gif" style="margin-bottom:13px" alt="" border="0" ><br><strong><?include "empempresa.php";?>  <?include "emplema.php";?></strong>
                                    <br>Basamos la calidad de nuestros servicios en garantizar rapidez y seriedad en los mismos, logrando la m�xima efectividad con un seguimiento exhaustivo en los trabajos realizados.

                                    Nuestra profesionalidad nos aporta un amplio conocimiento del sector, pudiendo responder ante cualquier situaci�n planteada y disponiendo de una variada gama de productos a precios competitivos.

                                    <br><br style="line-height:11px"><img src="images/1_z1.gif" style="margin-right:5px" alt="" border="0"><b><a href="#">Mas informaci�n</a></b></div></td>
                        </tr>
                        <tr>
                            <td valign="top" width="473" height="193">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td valign="top" width="248" height="193"><div style="margin:0 0 0 40px "><img src="images/menu.gif" style="margin-bottom:9px; margin-left:-10px" alt="Productos" border="0"><br>
                                                <ul style="margin:0; padding:0; list-style:none; line-height:18px">
                                                    <?php
                                                    PRINT("<li><a href='cojo_num_serv.php?basededatos=".$basededatos."&xusuario=".$xusuario."&xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Solicitud recogida</b></a></li>");
                                                    PRINT("<li><a href='infserv.php?&xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Estado Solicitud</b></a></li>");
                                                    PRINT("<li><a href='track.php?xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Tracking</b></font></a></li>");
                                                    PRINT("<li><a href='buscafac.php?xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Facturaci�n</b></font></a></li>");
                                                    PRINT("<li><a href='buscaexist.php?xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Almacenaje</b></font></a></li>");
                                                    PRINT("<li><a href='preimpresos.php?xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Albaranes pre-impresos</b></font></a></li>");
                                                    PRINT("<li><a href='zonasdis.php?xcodigo=".$xpescodigo."&xempresa=".$xempresa."'><b>Zonas Direcciones y Kms.</b></font></a></li>");
                                                    PRINT("<li><a href='libretadirecciones.php?rcodigo=".$xpescodigo."&xempresa=".$xempresa."&modo=lista ' title='Mantenimiento de su Libreta de direcciones para recogidas'><b>Libreta de direcciones</b></font></a></li><br>");
                                                    PRINT("<li><a href='index.php'><b>Desconectar</b></font></a></li>");

                                                    ?>
                                                </ul><br style="line-height:15px"><img src="images/1_z1.gif" style="margin-right:5px" alt="" border="0"><b><a href="condiciones.php">Condiciones</a></b></div></td>
                                        <td valign="top" width="225" height="193"><div style="margin:0 0 0 15px "><a href="clientes.php"><img src="images/1_p2.jpg" style="margin-bottom:3px; margin-left:-15px" alt="" border="0"></a><br>
                                                Aqui nuestros clientes pueden encargar recogidas, comprobar el estado de las mismas y consultar facturas. <br><br style="line-height:9px">
                                                <img src="images/1_z1.gif" style="margin-right:5px" alt="" border="0"><b></b></div></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td valign="top" width="250" height="430" bgcolor="#EBEBEB"><div style="margin:43 0 0 20px "><img src="images/destinos.gif" style="margin-bottom:10px" alt="" border="0"><br><a href="#"><img src="images/1_p3.jpg" style="margin-right:7px; margin-left:15px" alt="" border="0"></a><a href="#"><img src="images/1_p4.jpg" alt="" border="0"></a><br>
                        <img src="images/1_line.gif" style="margin-bottom:30px; margin-top:30px" alt="" border="0"><br>
                        <img src="images/contactar.gif" style="margin-bottom:15px" alt="" border="0"><br>

                        <!---
                        <img src="images/1_w5.gif" style="margin-bottom:5px" alt="" border="0"><br>
                        -->

                        <strong><a href="mailto:<?phpinclude "empemail.php";?>?subject=Petici�n de claves web empresa:"><strong>Contacte con nosotros</strong></a></strong><br>
                        Pinche aqui si quiere ponerse en contacto con nosotros por e-mail <a href="mailto:<?phpinclude "empemail.php";?>"><strong><?phpinclude "empemail.php";?></strong></a><br>Para contactar por telefono Tel: &nbsp;<?include "emptel.php";?> nuestro horario de oficina es de 09h00 a 19h00 lunes a viernes. Fax <?include "empfax.php";?><br>
                        <!---
                        <img src="images/1_line2.gif" style="margin-bottom:10px; margin-top:3px" alt="" border="0"><br><img src="images/1_w6.gif" style="margin-bottom:5px" alt="" border="0">
                        -->

                        <br>
                        <strong><a href="mailto:?subject=Recomiendo esta web <?phpinclude "empweb.php";?>"><strong>Recomiendenos</strong></a></strong><br>
                        Envie un link a este sitio a otra persona<br>
                        pinchando <a href="mailto:?subject=Recomiendo esta web <?phpinclude "empweb.php";?>"><strong>aqui</strong></a><br><br style="line-height:9px">
                        <img src="images/1_z1.gif" style="margin-right:5px" alt="" border="0"><b><a href="#">Noticias</a></b><img src="images/1_z1.gif" style="margin-right:5px; margin-left:19px" alt="" border="0"><b><a href="#">Ficheros</a></b>
                    </div></td>
                <td valign="top" width="1" height="430"></td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td valign="top" width="724" height="75">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <?
                include "footer.php";
                ?>

            </tr>
        </table>
    </td>
</tr>
</table>
</td>
<td valign="top" width="32" height="722" style="background-image:url(images/right.gif) "></td>
</tr>
</table>
</td>
</tr>
<tr>
    <td valign="top" width="766" height="28" style="background-image:url(images/bottom.gif) "></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>

<?
}
else
{

print('<html>');
print('<head>');
print('<meta HTTP-EQUIV="REFRESH" content="0; url=clientes.php?access=1">'); 
print('</head>');
print('</html>');

//include "clientes.php?access=1";
//header( "Location: http://pes-systems.net/suempresa/clientes.php?access=1" ) ;
/*
print('<html>');

print('<body>');
print('<P class=titulo-seccion align="center">Clave Incorrecta</P>');
print("<P class=titulo-seccion>  <center><a href='JavaScript:parent.history.back()'>Volver</a></center></P>");
print("<P class=titulo-seccion>&nbsp;</P>");
print('</body>');
print('</html>');
*/
}
?>









