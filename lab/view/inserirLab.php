<?php
  $title = "Inserir laboratório";
  include_once 'includes/header.php'; ?>

<form class="form-inline" method="get" action="../controller/controllerLab.php">
  <h2 class="form-inline">Laboratório</h2>
  <div class="form-group">
    <label for="nome" class="control-label col-sm-2">Nome</label>
    <input type="text" name="nome" id="nome" class="control-label col-sm-10" required autofocus>
    <label for="codigo" class="control-label col-sm-2">Código</label>
    <input type="text" name="codigo" id="codigo" class="control-label col-sm-4" required autofocus><br>
<br><br>
  <div class="btn-group btn-group-inline">
    <button class="btn btn-primary" type="submit" name="btn" value="inserir"><span class="glyphicon glyphicon-ok"></span>Gravar</button>
  </div>
  </div>
</form>

<?php include_once 'includes/footer.php'; ?>
