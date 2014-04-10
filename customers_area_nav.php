<?php
/*
  Created on : 24-mar-2014, 20:59:50
  Author     : Mitosu
  Name: Miguel Angel Torres
 */
echo '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">' . _EMP_EMPRESA . '</a>
                </div>
                <div class="navbar-collapse collapse">
                <!--Session-->
                ';
                if (!isset($_SESSION['user'])) {
                    include ('loginformtop.php');
                } else {
                    include ('menu_user.php');
                }
                echo '</div><!--/.navbar-collapse -->
                            </div>
                        </div>';
