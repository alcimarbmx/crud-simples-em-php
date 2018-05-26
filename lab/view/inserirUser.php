<?php 
$title = "Inserir usuário";
include_once 'includes/header.php'; ?> 

<form class="form" method="post" action="../controller/controllerUser.php">
        
  <h2 class="form">Usuário</h2>
  <label for="nome" class="only">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" required autofocus>

  <label for="email" class="only">E-mail</label>
    <input type="email" name="email" id="email" class="form-control" required autofocus>

  <label for="matricula" class="only">Matrícula</label>
    <input type="number" name="matricula" id="matricula" class="form-control" required autofocus>

  <label for="funcao" class="only">Ocupação</label>
    <input type="text" name="funcao" id="funcao" class="form-control"  required><br>

    <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Inserir</button>
      </div>
    </div>
    
</form>
<?php include_once 'includes/footer.php'; ?>
