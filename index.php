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
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            
            <!-- LOGO -->

            <h1>Cliente</h1>

            <form method="POST" action="grava.php">
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
              
             
             
            </form>

             



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