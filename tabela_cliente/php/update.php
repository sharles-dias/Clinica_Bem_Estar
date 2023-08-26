<?php


echo "<head>
<meta http-equiv='Content-Type' content='text/html' charset='UTF-8'/>
<!-- CSS only -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>

<!-- JavaScript Bundle with Popper -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>";

/*$conn = new MySQli('localhost', 'root', '', 'senac');

if($conn){
    echo "Conexão Efetuada com Sucesso";
}else{
    echo "Falha na Conexão";
}

if(mysqli_query($conn,$sql)){
    echo "<br>Cadastro Atualizado";
}else{
    echo "Falha na Atualização";
}*/

include_once("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$idade = $_POST["idade"];
$sexo= $_POST["sexo"];
$email= $_POST["email"];
$numero= $_POST["numero"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$plano= $_POST["plano"];

$sql = "UPDATE cliente SET nome = n'$nome', cpf = n'$cpf', idade = $idade, sexo = n'$sexo', email = n'$email', numero = n'$numero', cidade = n'$cidade', estado = n'$estado', plano = n'$plano' WHERE id = '$id'";



if(mysqli_query($conn,$sql)){
    echo "<div class='card'>
    <div class='card-body'>
    <h5 class='card-title'>Atualização de sistema</h5>
    <p class='card-text'>Atualizado com sucesso.</p>
    <a href='tabela.php' class='btn btn-primary'>Voltar</a>
    </div>
    </div>
    <br>";  
    }else
    echo "<br>Cadastro não atualizado";
    
?>