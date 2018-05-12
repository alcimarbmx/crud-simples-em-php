<?php include '../controller/conexao.php';

	$lab = new conecta();
  if(!empty($_REQUEST)){
    $busca = $_REQUEST['buscar'];
    $query = "SELECT * FROM laboratorio WHERE nome LIKE '%$busca%' or codigo LIKE '%$busca%'";
  }else{
    $query = "SELECT * FROM laboratorio";
  }
  
$res = $lab->consult($query);

$title = "Listar laboratórios";
include_once 'includes/header.php';

?>
 
  <form class="form-inline" method="get" action="listarLab.php">
    <input type="text" name="buscar" id="nome" class="form-control" autofocus>
      <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span>Procurar</button>
  </form>     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Código</th>
        <th>Laboratorio</th>
        <th>Visualizar</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>

<?php             

while($linha = mysqli_fetch_array($res)){
  
    
        echo "<tr><td>".$linha['codigo']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td><a href=\"verLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"<span class='glyphicon glyphicon-eye-open'></span></a></td>";
        echo "<td><a href=\"editLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"><span class='glyphicon glyphicon-edit'></span></a></td>";
        echo "<td><a href=\"../controller/controllerLab.php?btn=deletar&codigo=$linha[codigo]&nome=$linha[nome]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
      }
?>
    </tbody>
  </table>
<?php include_once 'includes/footer.php'; ?>