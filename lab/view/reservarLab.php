<?php include '../controller/conexao.php';
	$lis = new conecta();
    $queryLab = "SELECT * FROM laboratorio";
    $queryUser = "SELECT * FROM usuario";

$resLab = $lis->consult($queryLab);
$resUser = $lis->consult($queryUser);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Reservar laboratório</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="inicio.php">Início</a></li>             
                <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="listarUser.php">Listar usuários</a></li>
                    <li><a href="inserirUser.php">Inserir  usuário</a></li>
                  </ul>
                  <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratório<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="listarLab.php">Listar laboratórios</a></li>
                    <li><a href="inserirLab.php">Inserir</a></li>
                    <li><a href="reservarLab.php">Reservar laboratório</a></li>
                    <li><a href="listarRes.php">Laboratórios reservados</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

<hr class="featurette-divider">
       <div class="container">       
      <form class="form" method="post" action="../controller/controllerRes.php">
        
        <h2 class="form">Reservar laboratório</h2>
        <div class="container">

          <!--campo de nome de usuario-->
		  <!--
        <label for="nomeUser" class="only">Nome do usuário</label>
        <select name="nomeUser" id="nome" class="form-control" required>
          <option value=""></option>-->
<?php 
  /*$varUser = array(0);
  $u = 0;
  while($user = mysqli_fetch_array($resUser)){
      echo "<option value='$user[nome]'>$user[nome]</option>";
      $varUser[$u] = $user[matricula];
      $u++;
    }*/
?>
       <!-- </select> -->
        <!--campo de matricula de usuario-->
        <label for="matricula" class="only">Matrícula</label>
        <select name="matricula" id="matricula" class="form-control" required>
          <option value=""></option>
  <?php 
    while($user = mysqli_fetch_array($resUser)){
      echo "<option value='$user[matricula]'>$user[matricula]</option>";
}
 ?>
</select>
<!--campo de nome de laboratorio-->
        <!--<label for="nomeLab" class="only">Nome do laboratório</label>
<select name="nomeLab" id="nomeLab" class="form-control" required>
          <option value=""></option>-->
<?php 
  /*$varLab = array(0);
  $u = 0;
  while($lab = mysqli_fetch_array($resLab)){
  echo "<option value='$lab[nome]'>$lab[nome]</option>";
  $varLab[$u] = $lab[codigo];
  $u++;
  } */ 
?>
<!--</select>-->
<!--campo de codigo do laboratorio-->
        <label for="codigo" class="only">Código</label>
<select name="codigo" id="codigo" class="form-control" required>
          <option value=""></option>
<?php //$u = 0;
  while($lab = mysqli_fetch_array($resLab)){
  echo "<option value='$lab[codigo]'>$lab[codigo]</option>";
  //$varLab[$u] = $lab[codigo];
  //$u++;
  }
?>
</select>
        <label for="data" class="only">Data</label>
        <input type="date" name="data" id="data" class="form-control" required autofocus>
        
        <label for="horario" class="only">Horários</label>
        <div class="form-control">
        <div class="checkbox-inline">
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="1">1º primeiro</label>
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="2">2º segundo
        </label>
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="3">3º terceiro
        </label>
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="4">4º quarto
        </label>
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="5">5º quinto
        </label>
        <label class="checkbox-inline">
        <input type="checkbox" name="horario[]" value="6">6º sexto</label>
        </div>
      </div>
	  <label for="turno" class="only">Turno</label>
	  <div class="form-control">
        
		<input type="radio" name="turno" value="Manhã">Manhã
		<input type="radio" name="turno" value="Tarde">Tarde
		<input type="radio" name="turno" value="Noite">Noite
        
		</div>
		<!--
		<select class="form-control" name="turno" id="turno" required>
          <option value=""></option>
          <option value="Manhã">Manhã</option>
          <option value="Tarde">Tarde</option>
          <option value="Noite">Noite</option>
        </select>
		-->
      <br>

       
        <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Reservar</button>

      </div>
      </div>
      </div>
      </form>
  </div>
    </div> <!-- /container -->

    
<hr class="featurette-divider">
    <div class="container marketing">
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    
  </body>
</html>
