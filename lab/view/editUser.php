<?php 
$title = "Editar usuário";
include_once 'includes/header.php';


if(! empty($_REQUEST)){
  $nomeUser = $_REQUEST['nome'];
  $codUser = $_REQUEST['matricula'];
  $funUser = $_REQUEST['funcao'];
}else{
  $nomeUser = "";
  $codUser = "";
  $funUser = "";
}
?>
       
    <form class="form" method="post" action="../controller/controllerUser.php">
        
        <h2 class="form">Usuário</h2>
        <label for="nome" class="only">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php print $nomeUser; ?>" required autofocus>

        <label for="matricula" class="only">Matrícula</label>
        <input type="number" name="matricula" id="matricula" class="form-control" <?php print "value='$codUser' readonly"; ?> required autofocus>

        <label for="funcao" class="only">Ocupação</label>
        <input type="text" name="funcao" id="funcao" class="form-control" value="<?php print $funUser; ?>"  required><br>

        <div class="btn-group btn-group-justified">
      <!--<div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Inserir</button>

      </div>-->
      <div class="btn-group">
        <button class="btn btn-success" type="submit" name="btn" value="atualizar"><span class="glyphicon glyphicon-refresh"></span>Salvar</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-danger" type="submit" name="btn" value="cancelar"><span class="glyphicon glyphicon-ban-circle"></span>Cancelar</button>
      </div>
      <!--<div class="btn-group">
        <button class="btn btn-danger" type="submit" name="btn" value="deletar"><span class="glyphicon glyphicon-remove"></span>Deletar</button>
      </div>-->
      </div>
    
    </form>
	  </div>
<?php include_once 'includes/footer.php'; ?>