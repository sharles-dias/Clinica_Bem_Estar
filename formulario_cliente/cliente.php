<?php

include_once("../login/conexao.php");

include_once("../login/head.php");

$nome_completo = $_POST["nome_completo"];
$cpf = $_POST["cpf"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$numero_telefone = $_POST["numero_telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$plano = $_POST["plano"];



$sql = "INSERT INTO cliente (nome, cpf, idade, sexo, email, numero,
cidade, estado, plano) 
VALUES (n'$nome_completo',n'$cpf','$idade',n'$sexo',n'$email',n'$numero_telefone', n'$cidade', n'$estado', n'$plano')";

if(mysqli_query($conn,$sql))
echo "<div class='card'>
<div class='card-body'>
<h5 class='card-title'>Área do administrador</h5>
<p class='card-text'>Atualizado com sucesso.</p>
<a href='../tabela_cliente/tabela.php' class='btn btn-primary'> Gerenciar Cliente</a>
<a href='../tabela_profissional/tabela.php' class='btn btn-primary'>Gerenciar Profissional</a>
</div>
</div>
<br>";  
else
echo "<br>Cadastro não atualizado";

mysqli_close($conn);

?>