<?php 
      include '../controller/conexao.php';
      $title = "Situação do laboratório";
      include_once 'includes/header.php'; 

$query = "";
if(!empty($_REQUEST)){
	$nomeLab = $_REQUEST['nome'];
	$codLab =  $_REQUEST['codigo'];
	
}else{
	$nomeLab = "";
	$codLab = "";
}

?>
     
<form class="form">
        
<h2 class="form">Laboratório</h2>
  <label for="nome" class="only">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" <?php echo "value='$nomeLab' readonly";?> autofocus>

  <label for="codigo" class="only">Código</label>
    <input type="number" name="codigo" id="codigo" class="form-control" <?php echo "value='$codLab' readonly"; ?> autofocus>
<br>
  <div class="btn-group">
    <a href="listarLab.php" class="btn btn-primary" name="btn"><span class="glyphicon glyphicon-arrow-left"></span>Voltar</a>
  </div>

</form>
<?php include_once 'includes/footer.php'; ?>