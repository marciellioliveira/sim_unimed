<?php

  try{
  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed', 'root', '');
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM clientes");
  
  foreach($dados as $linha)
  {

    $nomet=$linha['nome'];
    $idadet=$linha['idade'];
    $categ_plano=$linha['categoria_plano'];

    header('Location: mostra.php?nome='.$nomet.'&idade='.$idadet.'&categoria='.$categ_plano);   


    echo '
        
        <form method="POST" action="index.php">



        </form>
    ';


  #echo $linha['em'];
  }
  } // fecha try
  
  catch (PDOException $erro)
  {
    echo "Nao posso fazer a pesquisa";
  }
  
 ?>