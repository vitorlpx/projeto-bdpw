<?php 
  
    include("conexao.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $nomemae = $_POST['nomemae'];
    $estadocivil = $_POST['estadocivil'];
    $ocupacao = $_POST['ocupacao'];

    $inserir = $pdo->prepare("insert into demo (name,email,cpf,rg,telefone,estado,cidade,nomemae,estadocivil,ocupacao)
                     values ('$name','$email','$cpf','$rg','$telefone','$estado','$cidade','$nomemae','$estadocivil','$ocupacao')");
    $inserir->execute();

    header("location:kaline.php");


?>