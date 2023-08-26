<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$idade = $_POST["idade"];
$formacao = $_POST["formacao"];

$conn = new MySQli('localhost', 'root', '', 'clinica');
if ($conn) {
    echo 'conectado com sucesso';
}else{
    echo 'Erro de conexão';
}

$sql = "INSERT INTO profissional (nome, telefone, estado, cidade, idade, formacao) 
VALUES (n'$nome',n'$telefone',n'$estado',n'$cidade','$idade',n'$formacao')";

if(mysqli_query($conn,$sql))
echo "<br>Salvo com sucesso";
else
echo "<br>Cadastro não realizado";

mysqli_close($conn);

?>