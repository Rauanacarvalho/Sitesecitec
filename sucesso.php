<html>
  <head>
  <title>PHP Test</title>
  <style>
    body {
    background-color: #e6e6ff;
    }
  </style>
<body>

    <strong>Seu cadastro foi realizado com sucesso!</strong><br>
    Nome: <?php echo $_POST["nome_pessoa"]; ?><br>
    E-mail: <?php echo $_POST["email_pessoa"]; ?>

  <?php

    $nome_pessoa = $_POST['nome_pessoa'];
    $email_pessoa = $_POST['email_pessoa'];
    $conexao = new mysqli('localhost','ifpb','ifpb');

    if (!$conexao){
      die('Não foi possível conectar' .  mysql_error());
    }

    $conexao->select_db("secitec");

    $query = "INSERT INTO `secitec`.`participante`(`nome`,`email`) VALUES ('" . $nome_pessoa . "','" .  $email_pessoa . "');";

    if($conexao->query($query) === TRUE){

      echo "<p> Cadastrado com sucesso!</p>";

    }else{
      echo "Erro: " . mysql_error();
    }

    $conexao->close();

  ?>

</body>
</html>
