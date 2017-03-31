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

    <div id="banner" style="margin: 10px">
         <?php echo '<image src="imagens/header.jpg" />'; ?>
    </div>
      
      <div class="container">
        
        <div class="row">

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <div class="col-sm-4">
            
            <h1>Cliente</h1>

            
              <div class="form-group">
                <label for="nome_titular">Nome do Titular:</label>
                <input type="text" required="true" class="form-control" id="email" name="nome_titular">
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
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" accept-charset="utf-8">              
                            
                <button type="submit" value="enviar" name="enviar" class="btn btn-default">Gerar Valor da Mensalidade</button>
              </form> 
            
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

                    session_start();

                    $no1=$nomet;
                    $va1=$valor;

                    $_SESSION['firstMessage'] = $no1;
                    $_SESSION['secondMessage'] = $va1; 

                          echo "<br>";
                          echo "<strong>Titular:</strong> ".$nomet;  
                         
                          echo "<br>";
                          echo "<strong>Valor Individual:</strong> ".$valor;  
                          
                          

                         # header('Location: index.php?val='.$valor);            
                 
              }

            ?>
             </div>
          </form>

          <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <div class="col-sm-4">            
                        
            <h1>Dependente</h1>
            <br>
              
            <br>
          
            <div class="form-group">
            <input name="teste" class="hidden"> 
            </div>            
              <div class="form-group">
                <label for="sel1">Quantidade de Dependentes:</label>
                <select class="form-control" id="sel1" name="qnt_dep">
                  <option value="id1">1</option>
                  <option value="id2">2</option>
                  <option value="id3">3</option>
                  <option value="id4">4</option>
                  <option value="id5">5</option>
                  <option value="id6">6</option>
                </select>
              </div>  
              <div class="form-group">
                <label for="sel1">Idade dos Dependentes:</label>
                <select class="form-control" id="sel1" name="idade_dep">
                  <option value="d7">Até 10 anos</option>
                  <option value="d8">Até 20 anos</option>
                  <option value="d9">Até 30 anos</option>
                  <option value="d10">Até 40 anos</option>
                  <option value="d11">Até 50 anos</option>
                  <option value="d12">Até 60 anos</option>
                </select>
              </div>        
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" accept-charset="utf-8">              
                            
                <button type="submit" value="enviar" name="enviar" class="btn btn-default">Gerar Valor Total da Mensalidade</button>
              </form> 
           
              <?php 

               if(isset($_POST['teste'])){              
              
            // conecta banco de dados
                  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed','root','');
                  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $qd=$_POST['qnt_dep'];           
                  $id=$_POST['idade_dep'];

                 
                 

                  //Quantidade de Dependentes

                  if($qd == "id1") {
                    $qd1 = 1;
                  } 
                  if($qd == "id2") {
                    $qd1 = 2;
                  }
                  if($qd == "id3") {
                    $qd1 = 3;
                  }
                  if($qd == "id4") {
                    $qd1 = 4;
                  }
                  if($qd == "id5") {
                    $qd1 = 5;
                  }
                  if($qd == "id6") {
                    $qd1 = 6;
                  }

                    echo "<h4>Quantidade: ".$qd1."</h4>";


                    //Idade
                    if($id == "d7") {
                    $id1 = 10;
                  } 
                  if($id == "d8") {
                    $id1 = 20;
                  }
                  if($id == "d9") {
                    $id1 = 30;
                  }
                  if($id == "d10") {
                    $id1 = 40;
                  }
                  if($id == "d11") {
                    $id1 = 50;
                  }
                  if($id == "d12") {
                    $id1 = 60;
                  }

                   echo "<h4>Idade: ".$id1."</h4>";



                 $textoSQL="INSERT INTO dependentes(qnt_dependentes, idade_dependentes) VALUES ('".$qd1."','".$id1."')";  
                 $conecta->exec($textoSQL);


                $valorTotal = $qd1 * $id1;
                echo "Valor Total: ".$valorTotal;


                  }




            ?>
          

           

          </div> <!--Fecha coluna do meio -->
          </form>
          <div class="col-sm-4">
            
           
            </div>
             </form> <!-- Form geral -->

          </div> <!-- Fecha ultima coluna -->
        </div>
        </div>
       

 


      </div> <!-- Container -->


    </div> <!-- Jumntron -->


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