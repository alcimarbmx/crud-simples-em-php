<?php
      include '../controller/conexao.php';
      //include '../controller/conect.php';
      $title = "Reservados";
      include_once 'includes/header.php';



    //$query = "SELECT * FROM agendados";
$query = "SELECT a.nome AS usuario, a.matricula, b.nome, b.codigo, c.id, c.data, c.horario, c.turno, c.reservado_em FROM usuario AS a, laboratorio AS b, reserva AS c WHERE b.codigo=c.fk_codigo AND a.matricula=c.fk_matricula";

    $res = mysqli_query($conn, $query);
    
?>
   
  <table class="table table-hover">
    <thead>
      <tr>
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
if(isset($_SESSION['user'])):

    while($linha = mysqli_fetch_array($res)):
    echo  "<td>".$linha['usuario']."</td>".
          "<td>".$linha['matricula']."</td>".
          "<td>".$linha['nome']."</td>".
          "<td>".$linha['codigo']."</td>".
          "<td>".$linha['data']."</td>".
          "<td>".$linha['horario']."</td>".
          "<td>".$linha['turno']."</td>".
          "<td>".$linha['reservado_em']."</td>".
          "<td><a href=\"../controller/controllerRes.php?btn=deletar&id=$linha[id]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
          endwhile;
    else:
      
      while($linha = mysqli_fetch_array($res)):
        echo "<td>".$linha['usuario']."</td>".
              "<td>".$linha['matricula']."</td>".
              "<td>".$linha['nome']."</td>".
              "<td>".$linha['codigo']."</td>".
              "<td>".$linha['data']."</td>".
              "<td>".$linha['horario']."</td>".
              "<td>".$linha['turno']."</td>".
              "<td>".$linha['reservado_em']."</td></tr>";
              endwhile;
endif;
/*
echo "<td><a href=\"verLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"<span class='glyphicon glyphicon-eye-open'></span></a></td>";
echo "<td><a href=\"editLab.php?codigo=$linha[codigo]&nome=$linha[nome]\"><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "<td><a href=\"../controller/controllerLab.php?btn=deletar&codigo=$linha[codigo]&nome=$linha[nome]\"onClick=\"return confirm('Tem certeza que deseja excluir?')\"><span class='glyphicon glyphicon-trash'></span></a></td></tr>";*/
      
?>
    </tbody>
  </table>

<?php include_once 'includes/footer.php'; ?>