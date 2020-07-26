<?php
      include '../controller/conexao.php';

      $title = "Situação do Usuário";
      include_once 'includes/header.php';

if(!empty($_REQUEST)){
	$nomeUser = $_REQUEST['nome'];
	$codUser =  $_REQUEST['matricula'];
	$funUser =  $_REQUEST['funcao'];
}else{
	$nomeUser = "";
	$codUser = "";
	$funUser = "";

}
#comertario php teste push
?>

<form class="form" method="post" action="#">

<h2 class="form">Usuário</h2>
  <label for="nome" class="only">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" <?php echo "value='$nomeUser' readonly";?> autofocus>

  <label for="matricula" class="only">Matrícula</label>
    <input type="number" name="matricula" id="matricula" class="form-control" <?php echo "value='$codUser' readonly"; ?> autofocus>

  <label for="funcao" class="only">Ocupação</label>
    <input type="text" name="funcao" id="funcao" class="form-control" <?php echo "value='$funUser' readonly";?>  autofocus><br>
  <div class="btn-group">
    <a href="listarUser.php" class="btn btn-primary" name="btn"><span class="glyphicon glyphicon-arrow-left"></span>Voltar</a>
  </div>

</form>

<?php include_once 'includes/footer.php'; ?>
