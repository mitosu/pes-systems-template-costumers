<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DemoTrans | Mensajeros | Mensajerías | Courier | Transporte Urgente</title>
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
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DemoTrans</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div id="text-zona-clientes" class="form-group">
                            <label for="usuario">Zona de Clientes</label>
                        </div>
                        <div class="form-group">
                            <input id="usuario" type="text" placeholder="Usuario" class="form-control" data-toggle="popover" data-placement="bottom" data-content="Para acceder al area de Clientes por favor Ingrese sus credenciales">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Contraseña" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <div id="contenido" class="container"><!--Contenido-->
            <div class="row"><!--SlideShow-->
                <div id="carousel-transport" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-transport" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-transport" data-slide-to="1"></li>
                        <li data-target="#carousel-transport" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/transporte.jpg" alt="transporte urgente">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/transporte.jpg" alt="transporte urgente">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/transporte.jpg" alt="transporte urgente">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div><!--End SlideShow-->

            <!--Menu Superior-->
            <nav class="navbar navbar-default" role="navigation">
                <div id="menu-superior" class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Empresa</a></li>
                            <li><a href="#">Localización</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Paquetería</a></li>
                                    <li><a href="#">Paletería</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Grupaje</a></li>
                                    <li><a href="#">Carga Completa</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logística</a></li>
                                    <li><a href="#">Local</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Trabajar</a></li>
                            <li><a href="#">Información</a></li>
                            <li><a href="#">Clientes</a></li>
                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!--EndMenu-->

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
                <div class="row">
                    <div class="col-md-4">Footer 1</div>
                    <div class="col-md-4">Footer 2</div>
                    <div class="col-md-4">Footer 3</div>
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
