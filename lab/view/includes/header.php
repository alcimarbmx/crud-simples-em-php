<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $title; ?></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
<div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="inicio.php">Project Web</a>
            </div>
      <?php if(isset($_SESSION['user'])):?>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">             
                <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário<span class="caret"></span></a>
        
                  <ul class="dropdown-menu">
                    <li><a href="listarUser.php">Listar usuários</a></li>
                    <li><a href="inserirUser.php">Inserir  usuário</a></li>
                  </ul>

                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratório<span class="caret"></span></a>

                  <ul class="dropdown-menu">
                    <li><a href="listarLab.php">Listar laboratórios</a></li>
                    <li><a href="inserirLab.php">Inserir</a></li>
                    <li><a href="reservarLab.php">Reservar laboratório</a></li>
                    <li><a href="listarRes.php">Laboratórios reservados</a></li>                   
                  </ul>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($_SESSION['user']); ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../view/includes/unset.php">Sair</a></li>
                    </ul>
                  </li>
                </li>

              </ul>
            </div> 
      <?php else:?>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li><a href="listarUser.php">Usuários</a></li>
                <li><a href="listarLab.php">Laboratórios</a></li>
                <li><a href="listarRes.php">Reservados</a></li> 
                
                
                <li><a href="../view/login.php">Entrar</a></li>

                           
              </ul>
            </div>
            
             
      <?php endif;?>


          </div>
        </nav>
      </div>
    </div>

<hr class="featurette-divider">
       <div class="container"> 