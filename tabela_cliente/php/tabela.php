<?php

include_once("conexao.php");



$sql = "SELECT * FROM cliente";

$result = mysqli_query($conn,$sql);


echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' />
    <link rel='stylesheet' href='./css/style.css'>
    <link rel='stylesheet' href='./css/bootstrap.css'>
    
</head>
<body>
    
    <!--Demonstração AnteriorMelhor jQueryCodelab 
    Estilo De Tabela : Demo 12
    Programa: 
    10
    Ação	#	Nome	Idade	Vista
     
    1	Vincent Williamson	31	
     
    2	Taylor Reyes	22	
     
    3	Bloco Justin	26	
     
    4	Sean Guzman	26	
     
    5	Keith Carter	24	
    mostrando 5 de 25 entradas«12345»
    
     HTML (Fontes de ícone usadas: Fontawesome & CSS Framwork: Bootstrap)-->

    
    <div class='container'>
        <div class='row'>
            <div class=' col-md-12'>
                <div class='panel'>
                    <div class='panel-heading'>
                        <div class='row'>
                            <div class='col-sm-12 col-xs-12'>
                                <a href='../formulario_cliente/index' class='btn btn-sm btn-primary pull-left'><i class='fa fa-plus-circle'></i> Adicionar</a>
                                <form class='form-horizontal pull-right'>
                                    <div class='form-group'>
                                        <label>Show : </label>
                                        <select class='form-control'>
                                            <option>5</option>
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>";
                    
        if($result){
        echo "
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>CPF</th>
                                    <th>Idade</th>
                                    <th>Sexo</th>
                                    <th>Email</th>
                                    <th>numero</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Plano</th>
                                </tr>
                            </thead>
                            <tbody>";
                            while ($linha = mysqli_fetch_array($result)){          
                            echo" <form action='crud.php' method='POST'>
                            <div class='panel-body table-responsive'>
                                <tr>
                                    <td>
                                        <ul class='action-list'>
                                        <input class='btn btn-primary' type='submit' name='comando' value='Editar'>
                                        <input type='submit' class='btn btn-danger' name='comando' value='Deletar'>
                                        <input type='hidden' name='id' value=".$linha['id']."> 
                                        </ul>
                                    </td>
                                    <td>".$linha["nome"]."</td>
                                    <td>".$linha["cpf"]."</td>
                                    <td>".$linha["idade"]."</td>
                                    <td>".$linha["sexo"]."</td>
                                    <td>".$linha["email"]."</td>
                                    <td>".$linha["numero"]."</td>
                                    <td>".$linha["cidade"]."</td>
                                    <td>".$linha["estado"]."</td>
                                    <td>".$linha["plano"]."</td>
                                </tr></form>";
                           
                           
                     }
                   echo " </tbody>  
                   </table></div>"; 
                } else {
                    echo "0 resultados";
                }
                echo    "<div class='panel-footer'>
                        <div class='row'>
                            <div class='col-sm-6 col-xs-6'>showing <b>5</b> out of <b>25</b> entries</div>
                            <div class='col-sm-6 col-xs-6'>
                                <ul class='pagination hidden-xs pull-right'>
                                    <li><a href='#'>«</a></li>
                                    <li class='active'><a href='tabela.php'>Cliente</a></li>
                                    <li><a href='../tabela_profissional/tabela.php'>Profissional</a></li>
                                    <li><a href='#'>»</a></li>
                                </ul>
                                <ul class='pagination visible-xs pull-right'>
                                    <li><a href='#'>«</a></li>
                                    <li><a href='#'>»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='js/bootstrap.js'></script>
</body>
</html>";
?>