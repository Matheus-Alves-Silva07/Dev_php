<h1>Lista de Usuários</h1>

<?php 
$sql = "SELECT * FROM tb_usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
  print "<table class='table table-hover table-striped table-bordered'>";
//parte referente a criação da tabela
  print "<tr>";
  print "<th>Código</th>";
  print "<th>Nome</th>";
  print "<th>E-mail</td>";
  print "<th>Data de Nascimento</th>";
  print "<th>Ações</th>";
//conteúdos importantes da tabela
  print "</tr>";

  while($row = $res->fetch_object() ) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->email . "</td>";
    
    print "<td>" . date_format(date_create($row->data_nasc), 'd/m/Y') . "</td";
    print "<td>
            <button onclick=\"location.href='?page=editar&id=" .$row->id. "';\" class = 'btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=Excluir&id="
             .$row->id. "';}else{false;} \"class = 'btn btn-danger'>Excluir</button>


            </td>";

    print "</tr>";
  }
   print "</table";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}

















?>