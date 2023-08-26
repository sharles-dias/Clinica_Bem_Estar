<?php

echo "<head>
<meta http-equiv='Content-Type' content='text/html' charset='UTF-8'/>
<!-- CSS only -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>

<!-- JavaScript Bundle with Popper -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>";

/*$delete = $_POST["delete"];

$sql = "DELETE FROM cliente WHERE id = $delete";

include_once("../conexao.php");

if(mysqli_query($conn,$sql)){
  echo "<div class='card'>
  <div class='card-body'>
  <h5 class='card-title'>Atualização de sistema</h5>
  <p class='card-text'>Deletado com sucesso.</p>
  <a href='tabela.php' class='btn btn-primary'>Voltar</a>
  </div>
  </div>
  <br>";  
}

else
echo "<br>Cadastro não deletado";*/

$id = $_POST["id"];
$comando = $_POST["comando"];

include_once("conexao.php");

if($comando == "delete"){
$sql = "DELETE FROM cliente WHERE id = $id";
  if(mysqli_query($conn,$sql)){
  echo "<div class='card'>
  <div class='card-body'>
  <h5 class='card-title'>Atualização de sistema</h5>
  <p class='card-text'>Deletado com sucesso.</p>
  <a href='select_html.php' class='btn btn-primary'>Voltar</a>
  </div>
  </div>
  <br>";  
  }else
  echo "<br>Cadastro não deletado";

}elseif($comando = "editar"){
  $sql = "SELECT * FROM cliente WHERE id = $id";
  $result = mysqli_query($conn,$sql);

  if(mysqli_query($conn,$sql)){
    echo "<form action = 'update.php' method= 'POST'>
    <table class= 'table table-striped'>
    <tr>
    <th>NOME</th>
    <th>CPF</th>
    <th>IDADE</th>
    <th>SEXO</th>
    <th>EMAIL</th>
    <th>NUMERO</th>
    <th>CIDADE</th>
    <th>ESTADO</th>
    <th>PLANO</th>
    <th>Comfirmar</th>
    </tr>";
  

  while($linha = mysqli_fetch_array($result)){
    echo "<tr>
      <td><input type = 'text' name = 'nome' value = '".$linha["nome"]."'</td>
      <td><input type = 'text' name = 'cpf' value = '".$linha["cpf"]."'</td>
      <td><input type = 'text' name = 'idade' value = '".$linha["idade"]."'</td>
      <td><input type = 'text' name = 'sexo' value = '".$linha["sexo"]."'</td>
      <td><input type = 'text' name = 'email' value = '".$linha["email"]."'</td>
      <td><input type = 'text' name = 'numero' value = '".$linha["numero"]."'</td>
      <td><input type = 'text' name = 'cidade' value = '".$linha["cidade"]."'</td>
      <td><input type = 'text' name = 'estado' value = '".$linha["estado"]."'</td>
      <td><input type = 'text' name = 'plano' value = '".$linha["plano"]."'</td>
      <td><input class='btn btn-primary' type='submit' name='comando' value='comfirmar'></td>
      </tr>
      <input type='hidden' name='id' value = '".$linha["id"]."'>
      </table></form>
      <a class = 'btn btn-prymari' href = 'select_html.php>Voltar</a>";
  }
  }else
    echo "<br> Casdastro nao realizado";
}

mysqli_close($conn);

?>