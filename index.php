<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php include('title.php');?>
        <meta name="keywords" content="transporte madrid, empresa transporte madrid, mensajeria madrid ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylepage.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#zona_cliente').click(function(){
                    $('#usuario').popover('show');
                });
            });        
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--customers_area-->
        <?php include('customers_area_nav.php');?>
        <div id="contenido" class="container"><!--Contenido-->
            <!--rotador.php-->
            <?php include('rotator.php');?>

            <!--top menu-->
            <?php include('top_menu.php');?>

            <!--Cotenido Cuerpo-->
            <div class="row">
                <div class="col-md-9">
                    <!--Urgent courier-->
                    <?php include ('mensajeria_urgente.php');?>
                </div>
                <div class="col-md-3">
                    <!--Our locations-->
                    <?php include ('nuestros_destinos.php');?>
                    <!--Newsletters-->
                    <?php include ('newsletter.php');?>
                </div>
            </div>

            <!--SubContenido-->
            <div class="row">
                <div class="col-md-3">
                    <!--Services menu-->
                    <?php include ('servicios_menu.php');?>
                </div>
                <div class="col-md-5">
                    <h2>
                        <span id="zona_cliente" class="label label-primary"> Zona de Clientes <span class="glyphicon glyphicon-log-in"></span></span>
                    </h2>
                    <p>En esta web nuestros clientes pueden encargar recogidas, comprobar el estado de los mismos y consultar facturas pinchando aqui Zona Clientes. Si es
                        cliente y no tiene clave de acceso
                        llamenos al Tel. 91 123 45 67 </p>
                    <p><a href="#">Petición de claves por e-mail &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>
                        <span class="label label-primary">Contactar</span>
                    </h2>
                    <p>Pinche aqui si quiere ponerse en contacto con nosotros por e-mail info@demotrans.es.<br/>
                        Para contactar por telefono Tel:  91 123 45 67 nuestro horario de oficina es de 09h00 a 19h00 de lunes a viernes. Fax 91 123 45 68  </p>
                    <p><a href="#" >Contactenos &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer>
                <!--Menu Bottom-->
                <?php include ('menu_bottom.php');?>
                <!--Footer Content-->
                <div id="footer_web" class="row">
                    <!--Empresa-->
                    <?php include ('empresa_footer.php');?>
                    <!--Copyright-->
                    <?php include ('servicios_footer.php');?>
                    <!--info-->
                    <?php include ('info_footer_center.php');?>
                    <!--Legal-->
                    <?php include ('legal_info_footer_right.php');?>
                </div>
            </footer>
            <!--</div>--> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>

            <script src="js/vendor/bootstrap.min.js"></script>

            <script src="js/main.js"></script>

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b, o, i, l, e, r) {
                    b.GoogleAnalyticsObject = l;
                    b[l] || (b[l] =
                            function() {
                                (b[l].q = b[l].q || []).push(arguments)
                            });
                    b[l].l = +new Date;
                    e = o.createElement(i);
                    r = o.getElementsByTagName(i)[0];
                    e.src = '//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
                ga('create', 'UA-XXXXX-X');
                ga('send', 'pageview');
            </script>
        </div>
    </body>
</html>
