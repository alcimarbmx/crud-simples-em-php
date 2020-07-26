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
<form action="../controller/controllerRes.php" method="POST">
       <!-- </select> -->
        <!--campo de matricula de usuario-->
        <label for="matricula" class="only">Matrícula</label>
        <select name="matricula" id="matricula" class="form-control" required>
          <option value=""></option>
  <?php
    while($user = mysqli_fetch_array($resUser)){
      echo "<option value='$user[matricula]'>$user[matricula]</option>";
}
 ?>
</select>
<!--campo de nome de laboratorio-->
        <!--<label for="nomeLab" class="only">Nome do laboratório</label>
<select name="nomeLab" id="nomeLab" class="form-control" required>
          <option value=""></option>-->
<?php
  /*$varLab = array(0);
  $u = 0;
  while($lab = mysqli_fetch_array($resLab)){
  echo "<option value='$lab[nome]'>$lab[nome]</option>";
  $varLab[$u] = $lab[codigo];
  $u++;
  } */
?>
<!--</select>-->
<!--campo de codigo do laboratorio-->
        <label for="codigo" class="only">Código</label>
<select name="codigo" id="codigo" class="form-control" required>
          <option value=""></option>
<?php //$u = 0;
  while($lab = mysqli_fetch_array($resLab)){
  echo "<option value='$lab[codigo]'>$lab[codigo]</option>";
  //$varLab[$u] = $lab[codigo];
  //$u++;
  }
?>
</select>
  <label for="data" class="only">Data</label>
    <input type="date" name="data" id="data" class="form-control" required autofocus>

  <label for="horario" class="only">Horários</label>
    <div class="form-control">
    <div class="checkbox-inline">
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="1">1º primeiro</label>
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="2">2º segundo
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="3">3º terceiro
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="4">4º quarto
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="5">5º quinto
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" name="horario[]" value="6">6º sexto</label>
  </div>
  </div>
	  <label for="turno" class="only">Turno</label>
	  <div class="form-control">

		<input type="radio" name="turno" value="Manhã">Manhã
		<input type="radio" name="turno" value="Tarde">Tarde
		<input type="radio" name="turno" value="Noite">Noite

		</div>
		<!--
		<select class="form-control" name="turno" id="turno" required>
          <option value=""></option>
          <option value="Manhã">Manhã</option>
          <option value="Tarde">Tarde</option>
          <option value="Noite">Noite</option>
        </select>
		-->
      <br>


        <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Reservar</button>

      </div>
      </div>

      </form>

<?php include_once 'includes/footer.php'; ?>
