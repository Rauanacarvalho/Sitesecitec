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

  <?php

    $nome_atividade = $_POST['nome_atividade'];
    $categoria = $_POST['categoria'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $conexao = new mysqli('localhost','ifpb','ifpb');

    if (!$conexao){
      die('Não foi possível conectar' .  mysql_error());
    }

    $conexao->select_db("secitec");

    $query = "INSERT INTO `secitec`.`cadastro`(`nome`,`categoria`) VALUES ('" . $nome_atividade . "','" .  $categoria . "','" .  $data . "','" .  $horario . "');";

    if($conexao->query($query) === TRUE){

      echo "<p> Cadastrado com sucesso!</p>";

    }else{
      echo "Erro: " . mysql_error();
    }

    $conexao->close();

  ?>

</body>
</html>
