<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<body class="img-fundo">

	
    <h1 class="nome-inicio"><strong class="boas-vindas">Bem-vindo ao <img class="logo" src="arquivos/logo1.png">, desfrute!</strong></h1>
    <section class="distancia-login">    
       
        <article id="form_login">
        
        <h2><strong>Entre para fazer seu pedido.</strong></h2>                
<?php
session_start();
	
	if(isset($_SESSION["falhar"]) && $_SESSION["falha"]==1){
		echo "<p class='erro>Você deve estar logado para acessar esta página</p>'";
	}

	
	if(isset($_SESSION["logado"]) && $_SESSION["logado"]==1){
		echo"<a href='logout.php'>";
		echo"<span class='glyphicon glyphicon-log-out'></span>";
		echo"</a>";		
		echo"<a href='recebe.php'>";
		echo"<span class='glyphicon glyphicon-user'></span>";
		echo"</a>";	
		
	$logado = true;				
	}
	else{
		$logado = false;
	}
	
	if(isset($_SESSION["nao_logado"]) && $_SESSION["nao_logado"]==0){
		
		echo"<p class='erro'>Usuário ou Senha incorretos</p>";
	}//fim 3º if

	echo"<br/><br/>";
	unset($_SESSION["falha"]);
	unset($_SESSION["nao_logado"]);
	
	
	if(!($logado)){//se não estiver logado mostra o form
?>       
       
        	<form action="valida.php" method="post" class="login">	
            <div class="seta_1"></div>
            <div class="seta_2"></div>
                <label for="email">E-mail:</label>
                <input type="text" name="email" placeholder="Informe seu E-mail" id="email" class="caixa" autofocus/> <br/>
                
                <label for="senha">Senha:</label>
                <input type="password" name="senha" placeholder="Informe sua senha" id="senha" class="caixa"/> <br/>
                
                
             	<input type="submit" value="Entrar" />
            <h1 class="n_cadastro">Não possui conta?<a href="cadastro.php"> Cadastre-se aqui</a></h1>
			
           	           
            </form>
            
          
            
 	<?php } ?>
    </article>
      	
        </article>
    </section>
   </body>
   <footer class="rodape">
    <p><strong class="maior">+18 </strong>| Proibido a venda para menores de 18 (dezoito) anos. Previsto na lei 13.106/15</p>
    </footer>

