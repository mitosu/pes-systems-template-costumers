<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php include('title.php');?>
        <meta name="description" content="">
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
                <div class="col-md-8">
                    <h2><img src="img/mensajeriaurgente.gif" alt="Mensajeria Urgente"></h2>
                    <p><img src="img/2_p4.jpg" alt="Mensajeria rapida" class="image_aling_text img-rounded">En todos nuestros servicios DemoTrans, S.L. busca cumplir un objetivo, proporcionar un servicio de entrega de documentos y paquetería con la mayor rapidez y la mayor seguridad. Para ofrecer este servicio contamos con un equipo especializado y exclusivo, que además cuenta para su localización y seguimiento con la tecnología más avanzada del mercado. Por ello, sus documentos o paquetes están constantemente controlados pudiendo así dar un servicio puntual y sin ningún tipo de riesgos.  </p>
                    <p><a class="btn btn-default" href="#" role="button">Más información &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>
                        <img src="img/destinos.gif" alt="Destinos">
                    </h2>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6240307.829081928!2d-3.7130000000000543!3d40.20849999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc42e3783261bc8b%3A0xa6ec2c940768a3ec!2zRXNwYcOxYQ!5e0!3m2!1ses!2ses!4v1395758182089" width="260" height="250" frameborder="0" style="border:0"></iframe></p>
                </div>
            </div>

            <!--SubContenido-->
            <div class="row">
                <div class="col-md-4">
                    <h2><img src="img/servicios.gif" alt="Servicios"></h2>
                    <ul>
                        <li><a href="moto.php"><span class="label label-primary">Servicio de moto</span></a></li>
                        <li><a href="furgo.php"><span class="label label-primary">Servicio de furgoneta</span></a></li>
                        <li><a href="nacional.php"><span class="label label-primary">Servicio de Nacional</span></a></li>
                        <li><a href="insular.php"><span class="label label-primary">Servicio de Insular</span></a></li>
                        <li><a href="carga.php"><span class="label label-primary">Servicio de Carga</span></a></li>
                        <li><a href="internacional.php"><span class="label label-primary">Servicio de Internacional</span></a></li>
                        <li><a href="almacenaje.php"><span class="label label-primary">Almacenaje</span></a></li>
                    </ul>
                    <a class="btn btn-default" href="#" role="button">Condiciones &raquo;</a>
                </div>
                <div class="col-md-4">
                    <h2>
                        <span id="zona_cliente" class="label label-success"> Zona de Clientes <span class="glyphicon glyphicon-log-in"></span> </span>
                    </h2>
                    <p>En esta web nuestros clientes pueden encargar recogidas, comprobar el estado de los mismos y consultar facturas pinchando aqui Zona Clientes. Si es
                        cliente y no tiene clave de acceso
                        llamenos al Tel. 91 123 45 67 </p>
                    <p><a class="btn btn-default" href="#" role="button">Petición de claves por e-mail &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>
                        <img src="img/contactar.gif" alt="Contactenos">
                    </h2>
                    <p>Pinche aqui si quiere ponerse en contacto con nosotros por e-mail info@demotrans.es.<br/>
                        Para contactar por telefono Tel:  91 123 45 67 nuestro horario de oficina es de 09h00 a 19h00 de lunes a viernes. Fax 91 123 45 68  </p>
                    <p><a class="btn btn-default" href="#" role="button">Contactenos &raquo;</a></p>
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
