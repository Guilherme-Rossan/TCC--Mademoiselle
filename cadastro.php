    <?php
        session_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--LINKS DA TELA DE CADASTRO-->
       <link href="Css/estilo_cadastro.css" rel="stylesheet" type="text/css">
        <title>Cadastro</title>
    </head>
    <body>
   <?php
  if (isset($_SESSION['usuario_existe'])):
   ?>
    <div  class="alert alert-danger ">
        <strong>Usuário já existe.</strong> O usuário escolhido já existe.
    </div>
    
 <?php 
      endif;   
      unset($_SESSION['usuario_existe']);
  ?>

    <?php
        if (isset($_SESSION['status_cadastro'])):
    ?>

    <div  class="alert alert-success ">
        <strong>Cadastro efetuado com sucesso.</strong>
        <p>Faça o login clicando <a href="index.php">aqui</a></p>
    </div>


    <?php
        endif;
        unset($_SESSION['status_cadastro']);
    ?> 
    

    <div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Cadastro</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="cadastrar.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="nome" name="nome" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Usuário" name="usuario" type="text" required>
                        </div>
                        <div class="form-group">
			    			<input class="form-control" placeholder="Senha" name="senha" type="password" required>
			    		</div>
			    		
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Cadastrar">
                        <br>
                        <div class="mx-auto" id="formFooter" >
                            <a class="underlineHover" href="index.php">Voltar</a>
                        </div>
                    </fieldset>
                </div>
                </form>
            </div>
        </div>
	</div>
</div>
    </body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </html>