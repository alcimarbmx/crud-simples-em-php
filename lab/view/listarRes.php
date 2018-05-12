<?php include '../controller/conexao.php';

    //$query = "SELECT * FROM agendados";
	$query = "SELECT a.nome AS usuario, a.matricula, b.nome, b.codigo, c.id, c.data, c.horario, c.turno, c.reservado_em FROM usuario AS a, laboratorio AS b, reserva AS c WHERE b.codigo=c.fk_codigo AND a.matricula=c.fk_matricula";
	//INNER JOIN usuario u ON u.matricula=c.matricula 
	//";
	$lis = new conecta();
    $res = $lis->consult($query);
    $title = "Reservados";
include_once 'includes/header.php';
  
?>
   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Matrícula</th> 
        <th>Laboratório</th> 
        <th>Código</th> 
        <th>Reservado para o dia</th> 
        <th>Horários</th> 
        <th>Turno</th>
		    <th>Reservado em</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>

<?php             
//nomeUser, codUser, nomeLab, codLab, data, horarios, turno
while($linha = mysqli_fetch_array($res)){
echo "<tr><td>".$linha['id']."</td>";
echo "<td>".$linha['usuario']."</td>";
echo "<td>".$linha['matricula']."</td>";
echo "<td>".$linha['nome']."</td>";
echo "<td>".$linha['codigo']."</td>";
echo "<td>".$linha['data']."</td>";
echo "<td>".$linha['horario']."</td>";
echo "<td>".$linha['turno']."</td>";
echo "<td>".$linha['reservado_em']."</td>";
echo "<td><a href=\"../controller/controllerRes.php?btn=deletar&id=$linha[id]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
/*
echo "<td><a href=\"verLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"<span class='glyphicon glyphicon-eye-open'></span></a></td>";
echo "<td><a href=\"editLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "<td><a href=\"../controller/controllerLab.php?btn=deletar&codigo=$linha[codigo]&nome=$linha[nome]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";*/
      }
?>
    </tbody>
  </table>

<?php include_once 'includes/footer.php'; ?>