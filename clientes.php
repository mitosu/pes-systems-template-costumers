<!DOCTYPE html>
<?php include ('config.php');?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <?php echo _EMP_TITLE;?>
        <meta name="keywords" content="<?php echo _EMP_KEYWORDS?>">
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
            <!--header.php-->
            <?php include ('header.php');?>

            <!--Cotenido Cuerpo-->
            <div class="row">
                <div class="col-md-9">
                    <!--About us-->
                    <?php include ('clientes_text.php');?>

                        <div class="row">
                            <div class="col-md-4">
                                <?php include ('empresa_box.php');?>
                            </div>
                            <div class="col-md-8">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="usuario">Nombre de Usuario</label>
                                        <input type="email" class="form-control" id="usuario" placeholder="Escriba su nombre de usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" id="password" placeholder="Escriba su contraseña">
                                    </div>
                                    <div class="form-group">
                                        <p class="help-block">Si no dispone de credenciales, solicite sus datos al Administrador.</p>
                                    </div>
                                    <button type="submit" class="btn btn-default">Entrar</button>
                                </form>
                            </div>
                        </div>

                </div>
                <div class="col-md-3">
                    <!--Our locations-->
                    <?php include ('destinos.php');?>
                    <!--Newsletters-->
                    <?php include ('newsletter.php');?>
                </div>
            </div>


            <!--SubContenido-->
            <div class="row">
                <div class="col-md-3">
                    <!--Services menu-->
                    <?php include ('tiposservicios.php');?>
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
                <?php include ('footer.php');?>
            </footer>
            <!--</div>--> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>

            <script src="js/vendor/bootstrap.min.js"></script>

            <script src="js/main.js"></script>
        </div>
    </body>
</html>
