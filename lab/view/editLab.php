<?php
if(!empty($_REQUEST)){
  $nomeLab = $_REQUEST['nome'];
  $codLab = $_REQUEST['codigo'];
}else{
  $nomeLab = "";
  $codLab = "";
}
$title = 'Lab';
include_once 'includes/header.php'; //header da pagina

?>

       <!--Formulario para editar os atributos do laboratorio -->      
      <form class="form" method="get" action="../controller/controllerLab.php">
        <h2 class="form">Laboratório</h2>
		
        <label for="nome" class="only">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" <?php echo "value='$nomeLab'"; ?> required autofocus>

        <label for="codigo" class="only">Código</label>
        <input type="number" name="codigo" id="codigo" class="form-control" <?php echo "value='$codLab' readonly"; ?> required autofocus><br>

        <div class="btn-group btn-group-justified">
      <!--
      <div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Inserir</button>
      </div>
      -->
      <div class="btn-group">
        <button class="btn btn-success" type="submit" name="btn" value="atualizar"><span class="glyphicon glyphicon-refresh"></span>Salvar</button>
      </div>
      
      <div class="btn-group">
        <button class="btn btn-danger" type="submit" name="btn" value="cancelar"><span class="glyphicon glyphicon-ban-circle"></span>Cancelar</button>
      </div>
    
      </div><!--btn-->
      
      </form>


<?php
include_once 'includes/footer.php';//footer da pagina
?>