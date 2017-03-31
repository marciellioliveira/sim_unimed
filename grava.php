 <?php

                try{
                  // conecta banco de dados
                  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed','root','');
                  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $nomet=$_POST['nome_titular'];
                  $idade=$_POST['idade'];
                  $categoriap=$_POST['categoria'];

              
                  $textoSQL="INSERT INTO clientes(nome, idade, categoria_plano) VALUES ('".$nomet."','".$idade."','".$categoriap."')";  
                  $conecta->exec($textoSQL);

                  header('Location: consulta.php');
                 
                  }
                  catch (PDOException $e)
                  {
                  echo "Falha na gravação...";
                  }

              ?>
