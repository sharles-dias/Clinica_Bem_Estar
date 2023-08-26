<?php

include_once("conexao.php");

include_once("head.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM administrador WHERE nome = '$nome' and senha = '$senha'";
$result = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($result);

if($linha){
    echo "<div class='card'>
    <div class='card-body'>
    <h5 class='card-title'>Atualização de sistema</h5>
    <p class='card-text'>Atualizado com sucesso.</p>
    <a href='../tabela_cliente/tabela.php' class='btn btn-primary'> Gerenciar Cliente</a>
    <a href='../tabela_profissional/tabela.php' class='btn btn-primary'>Gerenciar Profissional</a>
    </div>
    </div>
    <br>";  
    }else
    echo "<br>Cadastro não atualizado";

?>