 <?php

                try{
                  // conecta banco de dados
                  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed','root','');
                  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $nomet=$_POST['nome_titular'];
                  $qntDep=$_POST['qnt_dep'];
                  $idade=$_POST['idade'];

              
                  $textoSQL="INSERT INTO clientes(qnt_dependentes,idade_dependentes) VALUES ('".$qnt_dep."','".$idade."')";  
                  $conecta->exec($textoSQL);

                  echo "gravou";
                  #header('Location: consulta.php');
                 
                  }
                  catch (PDOException $e)
                  {
                  echo "Falha na gravação...";
                  }

              ?>
