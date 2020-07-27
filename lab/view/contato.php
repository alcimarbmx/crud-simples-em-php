<?php
//teste

if(!empty($_REQUEST['emailcontato'])):
  $nomecontato = $_REQUEST['nomecontato'];
  $emailcontato = $_REQUEST['emailcontato'];
  $msgcontato = $_REQUEST['msgcontato'];
  var_dump($_REQUEST);
  mail("alcimarbmx@gmail.com", $nomecontato, $msgcontato, $emailcontato);
endif;

$title = "Contato";
include_once "includes/header.php";

 ?>


<form action="" method="post">
  <label for="nome">Nome</label>
  <input type="text" name="nomecontato" id="nomecontato">
  <label for="email">E-mail</label>
  <input type="email" name="emailcontato" id="emailcontato">
  <label for="mensagem">Mensagem</label>
  <textarea type="textarea" name="msgcontato" id="msgcontato"></textarea>
  <input type="submit" value="Enviar">
</form>

<?php
include_once "includes/footer.php";
 ?>
