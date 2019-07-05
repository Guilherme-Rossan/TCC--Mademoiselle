    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="Css/estilo.css">
        <!-- Links e script do Login (Bootstrap) -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <title>Principal</title>
    </head>

    <body>
        <div class="wrapper fadeInDown">
         <div id="formContent">
        <!-- Tabs Titles -->

     <!-- Icon -->
    <div class="fadeIn first">
        <h1 style="color:cornflowerblue; text-align:center; ">Login</h1>
    </div>

    <!-- Login Form -->
    <form method="post" action="login.php">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Digite seu usuário">
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Digite sua senha">
      <input type="submit" class="fadeIn fourth" value="Logar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="cadastro.php">Cadastre-se</a>
    </div>
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Voltar</a>
    </div>

  </div>
</div>
    

    </body>
    
    </html>