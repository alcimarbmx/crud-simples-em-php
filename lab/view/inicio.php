<?php
    include ("../controller/conexao.php");
    //include '../controller/conect.php';
    $title = "Início";
  include_once ("includes/header.php");
?>


<h2>Agendados (em construção)</h2>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Laboratório</th>
        <th>Data</th>
        <th>Horários</th>
        <th>Turno</th>
      </tr>
    </thead>
    <tbody>
<?php  //$query = "SELECT * FROM agendados";
	  $query = "SELECT user.nome AS nome1, lab.nome, res.data, res.horario, res.turno FROM usuario user, laboratorio lab, reserva res WHERE lab.codigo=res.fk_codigo AND user.matricula=res.fk_matricula";

            $res = mysqli_query($conn, $query);

while($linha = mysqli_fetch_array($res)){
//SELECT a.nome, a.matricula, b.nome, b.codigo FROM usuario a, lab b;
        echo "<tr><td>".$linha['nome1']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['data']."</td>";
        echo "<td>".$linha['horario']."</td>";
        echo "<td>".$linha['turno']."</td></tr>";
    }
?>
    </tbody>
  </table>
<?php include_once 'includes/footer.php'; ?>
