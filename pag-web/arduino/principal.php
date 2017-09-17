<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
 
    <title>Domotica</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/Arduino-48.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    footer {
        background: #333;
        color:#fff;
        text-align:center;
        padding:20px 0px; 
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SMART HOUSE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="temperatura.php"><img src="img/png/glyphicons-684-temperature-settings.png"> Temperatura</a>
                    </li>
                  
                    <li>
                        <a href="#"><img src="img/png/glyphicons-388-log-out.png"> Sair</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
   </main>
    
    <!-- Page Content -->
    <div class="container">
  
        <div>
            <h1 class="text-center">DOMÓTICA</h1>
        </div>
  <!-- COMODO -->
        <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/externa.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação Externa</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_ExternaOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_ExternaOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>

<!--ACABOU COMODO-->
<!--COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/interna.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação Interna</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_internaOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_internaOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->

<!--COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/portao.png" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Garagem</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="abrirPortao" name="estadoLed">
                                                <span class="glyphicon glyphicon-chevron-up" </span> Abrir</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="FecharPortao" name="estadoLed">
                                                <span class="glyphicon glyphicon-chevron-down" </span> Fechar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->
<!--COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/sala.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação da Sala </h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_SalaOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_SalaOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/cozinha.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação da Cozinha</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_CozinhaOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_CozinhaOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->
<!--COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/suite.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação <br> da Suite</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_SuiteOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_SuiteOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div> 
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/quarto.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação do Quarto</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_QuartoOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_QuartoOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->
<!--COMODO-->
    <div class="col-xs-12 col-md-3 thumbnail text-center">
            <figure>
                         <img src="img/banheiro.jpg" class="img-reponsive img-thumbnail">
                    <div>
                        <h2>Iluminação do Banheiro</h2>
                     </div>
            </figure>
                                        <form method="POST" action="arduino.php">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-lg"type="submit" value="luz_BanheiroOn" name="estadoLed">
                                                <span class="glyphicon glyphicon-lamp" </span> Ligar</button>
                                                <button class="btn btn-danger btn-lg"type="submit" value="luz_BanheiroOff" name="estadoLed">
                                                <span class="glyphicon glyphicon-off" </span> Desligar</button>
                                            </div>
                                         </form>  
   </div>
<!--ACABOU COMODO-->









   </div>
    <!-- /.container -->
    </main>
<footer>
    Essa pagina foi desenvolvida pelos alunos da ESAMC do <br/> 5º Semestre do Curso Tecnólogo Redes de Computadores Todos os Direitos Reservados.
</footer>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
