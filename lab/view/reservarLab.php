<?php
    include '../controller/conexao.php';
    $title = "Reservar";
    include_once 'includes/header.php';

    $queryLab = "SELECT * FROM laboratorio";
    $queryUser = "SELECT * FROM usuario";

$resLab = mysqli_query($conn, $queryLab);
$resUser = mysqli_query($conn, $queryUser);

?>


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
<form class="form-inline" action="../controller/controllerRes.php" method="POST">
       <!-- </select> -->
        <!--campo de matricula de usuario-->
        <label for="matricula" class="control-label col-sm-1">Matrícula</label>
<div class="control-label col-sm-2">
        <select name="matricula" id="matricula"  required>
          <option  value=""></option>
  <?php
    while($user = mysqli_fetch_array($resUser)):
      echo "<option value='$user[matricula]'>$user[matricula]</option>";
    endwhile;
 ?>
        </select>
</div>

<!--campo de codigo do laboratorio-->
<label for="codigo" class="control-label col-sm-1">Código</label>
<div class="control-label col-sm-2">
  <select name="codigo" id="codigo"  required>
    <option value=""></option>
<?php //$u = 0;
  while($lab = mysqli_fetch_array($resLab)):
  echo "<option value='$lab[codigo]'>$lab[codigo]</option>";
  //$varLab[$u] = $lab[codigo];
  //$u++;
  endwhile;
?>
</select>
</div>
  <label for="data" class="control-label col-sm-1">Data</label>
    <input type="date" name="data" id="data" class="control-label col-sm-2" required autofocus>

  <!-- <label for="horario" class="control-label col-sm-4">Horários</label>
-->
<div class="control-label col-sm-7">
    <label for="horario"  class="control-label">Horários</label>
  <label>
    <input type="checkbox" name="horario[]" value="1">1º primeiro</label>
  <label>
    <input type="checkbox" name="horario[]" value="2">2º segundo</label>
  <label>
    <input type="checkbox" name="horario[]" value="3">3º terceiro</label>
  <label>
    <input type="checkbox" name="horario[]" value="4">4º quarto</label>
  <label>
    <input type="checkbox" name="horario[]" value="5">5º quinto</label>
  <label>
    <input type="checkbox" name="horario[]" value="6">6º sexto</label>
</div>
<div class="control-label col-sm-3">
	  <label for="turno"  class="control-label">Turno</label>


		<input type="radio" name="turno" value="Manhã">Manhã
		<input type="radio" name="turno" value="Tarde">Tarde
		<input type="radio" name="turno" value="Noite">Noite

		</div>

      <div class="control-label col-sm-10">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Reservar</button>
      </div>

      </form>

<?php include_once 'includes/footer.php'; ?>
