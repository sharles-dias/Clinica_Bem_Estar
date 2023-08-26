<?php

include_once("conexao.php");

echo "
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <!-- Required meta tags-->
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content='Colorlib Templates'>
    <meta name='author' content='Colorlib'>
    <meta name='keywords' content='Colorlib Templates'>

    <!-- Title Page-->
    <title>index_2</title>

    <!-- Icons font CSS-->
    <link href='vendor/mdi-font/css/material-design-iconic-font.min.css' rel='stylesheet' media='all'>
    <link href='vendor/font-awesome-4.7/css/font-awesome.min.css' rel='stylesheet' media='all'>
    <!-- Font special for pages-->
    <link href='https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>

    <!-- Vendor CSS-->
    <link href='vendor/select2/select2.min.css' rel='stylesheet' media='all'>
    <link href='vendor/datepicker/daterangepicker.css' rel='stylesheet' media='all'>

    <!-- Main CSS-->
    <link href='css/main.css' rel='stylesheet' media='all'>
</head>

<body>
    <div class='page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins '>
        <div class='container'>
            <div class='card card-2'>
                
                <div class='card-body '>
                    <h2 class='title'>Registration Form</h2>
                    ";
                    $sql = "SELECT * FROM cliente";
$result = mysqli_query($conn,$sql);

if ($result){
    echo "<table class = 'table table-striped'>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>IDADE</th>
    <th>Sexo</th>
    <th>E-mail</th>
    <th>Numero</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Plano</th>
    <tr>";

    while ($linha = mysqli_fetch_array($result)){
        echo "<tr><td>".$linha["id"]."</td>
        <td>".$linha["nome"]. "</td>
        <td>" .$linha['cpf']. "</td>
        <td>".$linha['idade']. "</td>
        <td>".$linha['sexo']. "</td>
        <td>".$linha['email']. "</td>
        <td>".$linha['numero']. "</td>
        <td>".$linha['cidade']. "</td>
        <td>".$linha['estado']. "</td>
        <td>".$linha['plano']. "</td>
        </tr>";
    }
    echo "</table>";
}else {
        echo "0 resultados";
}
echo "
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src='vendor/jquery/jquery.min.js'></script>
    <!-- Vendor JS-->
    <script src='vendor/select2/select2.min.js'></script>
    <script src='vendor/datepicker/moment.min.js'></script>
    <script src='vendor/datepicker/daterangepicker.js'></script>

    <!-- Main JS-->
    <script src='js/global.js'></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<a href='https://www.freepik.com/photos/asian-nurse'>Asian nurse photo created by benzoix - www.freepik.com</a>
";
?>