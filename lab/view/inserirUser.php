<?php
$title = "Inserir usuário";
include_once 'includes/header.php'; ?>

<form class="form-inline" method="post" action="../controller/controllerUser.php">
<h2 class="form-inline">Usuário</h2>
<div  class="form-group">
  <label for="nome" class="control-label col-sm-2">Nome</label>
  <input type="text" name="nome" id="nome" class="control-label col-sm-10" required autofocus>

  <label for="email" class="control-label col-sm-2">E-mail</label>
  <input type="email" name="email" id="email" class="control-label col-sm-10" required autofocus>

    <br>
  <label for="matricula" class="control-label col-sm-2">Matrícula</label>
    <input type="number" name="matricula" id="matricula" class="control-label col-sm-4" required autofocus>

  <label for="funcao" class="control-label col-sm-2">Ocupação</label>
    <input type="text" name="funcao" id="funcao" class="control-label col-sm-4"  required><br>

    <div class="btn-group btn-group-inline">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Gravar</button>
    </div>
    </div>

</form>
<?php include_once 'includes/footer.php'; ?>
