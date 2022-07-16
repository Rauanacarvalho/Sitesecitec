<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="../../estilo/style.css">
  </head>
  <body>
    <div class="container">
      <div class="box">
     <form class="form" action="../sucesso.php" method="post">

      <h1 class="h1"><b> Cadastro </b></h1>

         <label for="nome">Nome:</label><br><br>
        <input id="nome" type="text" name="nome_pessoa" placeholder="Nome completo" ><br>
       </br>

       <label for="email">E-mail:</label><br><br>
        <input id="email" type="email" name="email_pessoa" placeholder="exemplo@academico.ifpb.edu.br" ><br>
       </br>
       
        <input class="cadastrobutton" type="submit" name="cadastrobutton" value="Cadastre-se"><br></br>
      </form>

      <form class="butaologin" method="post" action="../home/login.html">
        <button class="login1" name="botao" >Login</button>
      </form>
    
      </div>
    </div>
  </body>
</html>
