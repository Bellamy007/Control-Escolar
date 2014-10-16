<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Iniciar Sesi&oacute;n</h1>
    <div class="table-responsive">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="bootstrap/docs/favicon.ico">

            <title>Dashboard Template for Bootstrap</title>

            <!-- Bootstrap core CSS -->
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="bootstrap/css/dashboard.css" rel="stylesheet">

            <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
            <!--[if lt IE 9]><script src="bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
            <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sistema Escolar</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
        <?php

/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 3/10/14
 * Time: 01:46 PM
 */
echo'<form  action="validar.php" method="POST" name="frmdo" id="frmdo" autocomplete="on">
                                <h1>Identif&iacute;quese</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Nombre de Usuario </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mi nombre de usuario o mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Contrase&ntilde;a </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <!--p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Keep me logged in</label>
								</p-->
                                <p class="login button">
                                    <input type="submit" value="Entrar" />
								</p>
                                <p class="change_link">
                                        ¿Olvido su Usuario?
									<a href="#toregister" class="to_register" id="to_recor_u">De click</a>
                                        ¿Olvido su Pass?
									<a href="#toregister_2" class="to_register" id="to_recor">De click</a>
								</p>
                            </form>';
echo"</div>
</div>";
require_once("footer.php");