<?php 
  $title = "Inserir laboratório";
  include_once 'includes/header.php'; ?>
     
      <form class="form" method="get" action="../controller/controllerLab.php">
        <h2 class="form">Laboratório</h2>
		
        <label for="nome" class="only">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus>

        <label for="codigo" class="only">Código</label>
        <input type="number" name="codigo" id="codigo" class="form-control" required autofocus><br>

        <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir"><span class="glyphicon glyphicon-ok"></span>Inserir</button>
      </div>
      </div>
      </form>

<?php include_once 'includes/footer.php'; ?>