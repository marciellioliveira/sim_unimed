 <?php

                try{
                  // conecta banco de dados
                  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=unimed','root','');
                  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $nomet=$_POST['nome_titular'];
                  $idade=$_POST['idade'];
                  $categoriap=$_POST['categoria'];
                  $qntD=$_POST['qnt_dep'];
                  $idadeD=$_POST['idade_dep'];
              
                  $textoSQL="INSERT INTO clientes(nome, idade, categoria_plano, qnt_dependentes,idade_dependentes) VALUES ('".$nomet."','".$idade."','".$categoriap."','".$qntD."','".$idadeD."')";  
                  $conecta->exec($textoSQL);

                  header('Location: consulta.php');
                 
                  }
                  catch (PDOException $e)
                  {
                  echo "Falha na gravação...";
                  }

              ?>
