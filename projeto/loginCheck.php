<?php 
  
    include("conexao.php");


    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
 

    $consulta = $pdo->prepare("SELECT * from demo where 'email' == $email ;");
    $consulta->execute();

    echo"$consulta"


    header("location:kaline.php");


?>