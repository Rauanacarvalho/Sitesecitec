<html>
  <head>
  <title>PHP Test</title>
  <style>
    body {
    background-color: #e6ffcc;
    }
  </style>
<body>

    <strong>Seu cadastro foi realizado com sucesso!</strong><br>
    Nome: <?php echo $_POST["nome_participante"]; ?><br>
    E-mail: <?php echo $_POST["email_participante"]; ?><br>
    Telefone: <?php echo $_POST["telefone_participante"]; ?><br>
    Data de nascimento: <?php echo $_POST["datanasc_participante"]; ?>
    
    

  <?php

    $nome_participante = $_POST['nome_participante'];
    $email_participante = $_POST['email_participante'];
    $telefone_participante = $_POST['telefone_participante'];
    $datanasc_participante = $_POST['datanasc_participante'];
    $usuario_participante = $_POST['usuario_participante'];
    $senha_participante = password_hash($_POST['usuario_participante'], PASSWORD_DEFAULT);
    $conexao = new mysqli('localhost','ifpb','ifpb');

    if (!$conexao){
      die('Não foi possível conectar' .  mysql_error());
    }

    $conexao->select_db("secitec");

    $query = "INSERT INTO `secitec`.`PARTICIPANTE`(`nome`,`email`,`telefone`,`datanasc`) VALUES ('" . $nome_participante . "','" .  $email_participante . "','" . $telefone_participante . "','" .  $datanasc_participante . "');";

    if($conexao->query($query) === TRUE){

      echo "<p> Cadastrado com sucesso!</p>";

    }else{
      echo "Erro: " . mysql_error();
    }

    $conexao->close();

  ?>

    <form class="butaologin" method="post" action="login.html">
    <button class="login1" name="botao" >Login</button>
    <p><button class="entrabotao" name="entrarb">Home</button></p>
    </form>

</body>
</html>
