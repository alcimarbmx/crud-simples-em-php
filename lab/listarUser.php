<?php include('conexao.php');

  if(!empty($_REQUEST)){
    $busca = $_REQUEST['buscar'];
    $query = "SELECT * FROM usuario WHERE nome LIKE '%$busca%' or matricula LIKE '%$busca%'";
  }else{
    $query = "SELECT * FROM usuario";
  }

$res = mysqli_query($conn, $query);
$rows = mysqli_num_rows($res);
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

    <title>Usuários</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
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
                    <li><a href="reservarLab.php">Reservar laboratório</a></li>
                    <li><a href="listarUser.php">Listar usuários</a></li>
                    <li><a href="inserirUser.php">Inserir  usuário</a></li>
                  </ul>
                  <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratório<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="listarLab.php">Listar laboratórios</a></li>
                    <li><a href="inserirLab.php">Inserir</a></li>
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
       <form class="form-inline" method="get" action="listarUser.php">
        <input type="text" name="buscar" id="nome" class="form-control" autofocus>
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span>Procurar</button>
        </form>      
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Matrícula</th>
        <th>Função</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php  

while($linha = mysqli_fetch_array($res)){
        echo "<tr><td>".$linha['nome']."</td>";
        echo "<td>".$linha['matricula']."</td>";
        echo "<td>".$linha['funcao']."</td>";
        echo "<td><a href=\"verUser.php?btn=atualizar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"><span class='glyphicon glyphicon-eye-open'></span></a></td>";
        echo "<td><a href=\"editUser.php?btn=atualizar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"><span class='glyphicon glyphicon-edit'></span></a></td>";
        echo "<td><a href=\"controllerUser.php?btn=deletar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
        
 } ?>
    </tbody>
  </table>
</div>
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
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/js/bootstrap.min.js"></script>
    
  </body>
</html>
