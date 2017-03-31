<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sim Unimed</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="jumbotron">
      
      <div class="container">
        
        <div class="row">
          <div class="col-sm-4">
            
            <h1>Cliente</h1>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <div class="form-group">
                <label for="nome_titular">Nome do Titular:</label>
                <input type="text" class="form-control" id="email" name="nome_titular">
              </div>
              <div class="form-group">
                <label for="sel1">Idade:</label>
                <select class="form-control" id="sel1" name="idade">
                  <option value="1">0 – 18 anos</option>
                  <option value="2">19 – 23 anos</option>
                  <option value="3">24 – 28 anos</option>
                  <option value="4">29 – 38 anos</option>
                  <option value="5">39 – 53 anos</option>
                  <option value="6">54 anos ou mais</option>
                </select>
              </div>  
              <div class="form-group">
                <label for="sel1">Categoria do Plano:</label>
                <select class="form-control" id="sel1" name="categoria">
                  <option value="e">Enfermaria</option>
                  <option value="a">Apartamento</option>
                </select>
              </div>        
              <form action="mostra.php" method="post" accept-charset="utf-8">              
                            
                <button type="submit" value="enviar" name="enviar" class="btn btn-default">Gerar Valor da Mensalidade</button>
              </form> 
            </form> <!-- Form geral -->
            <br><br>

            <?php 

              if(isset($_POST['nome_titular'])){
                 // conecta banco de dados
                  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed','root','');
                  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $nomet=$_POST['nome_titular'];
                  $idade1=$_POST['idade'];
                  $categoriap=$_POST['categoria'];
                 # $qntD=$_POST['qnt_dep'];
                  #$idadeD=$_POST['idade_dep'];
              
                 $textoSQL="INSERT INTO clientes(nome, idade, categoria_plano) VALUES ('".$nomet."','".$idade1."','".$categoriap."')";  
                  $conecta->exec($textoSQL);

                     echo $nomet;
                   
                   switch($categoriap) {

                        case "a":

                        if($idade1 == 1) {

                          $valor="282,00";

                        } else if($idade1 == 2) {

                          $valor="325,00";

                        } else if($idade1 == 3) {

                          $valor="373,00";

                        } else if($idade1 == 4) {

                          $valor="494,00";

                        } else if($idade1 == 5) {

                          $valor="902,00";

                        } else if($idade1 == 6) {

                          $valor="1200,00";

                        } 
                          break;
                        case "e":
                           if($idade1 == 1) {

                          $valor="193,00";

                        } else if($idade1 == 2) {

                          $valor="221,00";

                        } else if($idade1 == 3) {

                          $valor="255,00";

                        } else if($idade1 == 4) {

                          $valor="337,00";

                        } else if($idade1 == 5) {

                          $valor="616,00";

                        } else if($idade1 == 6) {

                          $valor="800,00";

                        }
                           break;
                        
                        default:
                          echo "Erro";
                          break;
                    }      

                          echo "<br>";
                          echo $valor;
                  
                 
              }

            ?>

            <br><br>
            <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Adicionar Dependentes
            </a>
          </div>


          <div class="col-sm-4">

            
            
            <div class="collapse" id="collapseExample">
            <h1>Dependente</h1>
            <br>
              <div class="well">
                <form method="POST" action="grava.php">
             
              <div class="form-group">
                <label for="qnt">Quantidade:</label>
                <input type="text" class="form-control" id="email" name="qnt_dep">
              </div>
              <div class="form-group">
                <label for="sel1">Idade:</label>
                <select class="form-control" id="sel1" name="idade_dep">
                  <option value="7">0 – 18 anos</option>
                  <option value="8">19 – 23 anos</option>
                  <option value="9">24 – 28 anos</option>
                  <option value="10">29 – 38 anos</option>
                  <option value="11">39 – 53 anos</option>
                  <option value="12">54 anos ou mais</option>
                </select>
              </div>                  
              <form action="mostra.php" method="post" accept-charset="utf-8">              
                            
                <button type="submit" value="enviar" name="enviar" class="btn btn-default">Gerar Valor Total das Mensalidades</button>
              </form> 
            </form> 
              </div>
            </div>
            

             



          </div>
          <div class="col-sm-4"></div>
        </div>




      </div>


    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!--
$nome1=$_GET['nome'];

                  echo "teste";
                  echo $nome1;
 -->