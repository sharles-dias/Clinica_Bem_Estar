<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$numero_casa = $_POST["numero_casa"];
$bairro = $_POST["bairro"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$idade = $_POST["idade"];
$plano = $_POST["plano"];

$conn = new MySQli('localhost', 'root', '', 'bem_estar');
if ($conn) {
    echo 'conectado com sucesso';
}else{
    echo 'Erro de conexão';
}

$sql = "INSERT INTO cliente (nome, cpf, telefone, rua, numero_casa, bairro, estado, cidade, idade, plano) 
VALUES (n'$nome',n'$cpf','$idade','$preco',n'$plano',n'$profissional','$horario')";

if(mysqli_query($conn,$sql))
echo "<br>Salvo com sucesso";
else
echo "<br>Cadastro não realizado";

mysqli_close($conn);

?>