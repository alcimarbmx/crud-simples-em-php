<?php include '../controller/conexao.php';
$title = "Usuários";
      include_once 'includes/header.php';
  if(!empty($_REQUEST)){
    $busca = $_REQUEST['buscar'];
    $query = "SELECT * FROM usuario WHERE nome LIKE '%$busca%' or matricula LIKE '%$busca%'";
  }else{
    $query = "SELECT * FROM usuario";
  }
	$lis = new conecta();
    $res = $lis->consult($query);

?>
 
       <form class="form-inline" method="get" action="listarUser.php">
        <input type="text" name="buscar" id="nome" class="form-control" autofocus>
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span>Procurar</button>
        </form>      
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Matrícula</th>
        <th>Função</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php  

while($linha = mysqli_fetch_array($res)){
        echo "<tr><td>".$linha['nome']."</td>";
        echo "<td>".$linha['matricula']."</td>";
        echo "<td>".$linha['funcao']."</td>";
        echo "<td><a href=\"verUser.php?btn=atualizar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"><span class='glyphicon glyphicon-eye-open'></span></a></td>";
        echo "<td><a href=\"editUser.php?btn=atualizar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"><span class='glyphicon glyphicon-edit'></span></a></td>";
        echo "<td><a href=\"../controller/controllerUser.php?btn=deletar&nome=$linha[nome]&matricula=$linha[matricula]&funcao=$linha[funcao]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
        
 } ?>
    </tbody>
  </table>

<?php include_once 'includes/footer.php'; ?>
