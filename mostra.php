        

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
            <?php     

		 echo "<br><br><br>";
		               
		 $nome1=$_GET['nome'];
		 $idade1=$_GET['idade'];
		 $cat_p1=$_GET['categoria'];
		           
		 echo $nome1;
		 
		 switch($cat_p1) {

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
		 



		                  
		 ?> 

          </div>	
			<div class="col-sm-4"></div>
				

				</div>



			</div>

		     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>