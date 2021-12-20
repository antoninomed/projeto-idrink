<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/cadastro.css" />
<body class="img-fundo">
	
    <h1 class="nome-junte"><strong class="junte">Junte-se ao <img class="logo" src="arquivos/logo1.png">, cadastre-se agora!</strong></h1>
    <section class="distancia-cadastro">   
    
    <a href="login.php"><img class="voltar-btn" src="img/voltar2.png"></a>
    
<section id="formulario">
	<?php
	session_start();
	
	/*so acessa quem logar
	if($_SESSION["logado"] != 1){
		$_SESSION["falha"] = 1;
		header("location:login.php");
		die();
	}
	*/
	
    //EXIBIR MENSAGENS
	if(isset($_SESSION["id"])){
		if($_SESSION["id"]==1){
			echo"<p class='erro'>Campos em Branco</p>";
		}				
		elseif($_SESSION["id"]==3){
			echo"<p class='sucesso'>Você foi cadastrado!</p>";
		}		
		
		elseif($_SESSION["id"]==5){
			echo"<p class='erro'>".$_SESSION["msg_falha"]."</p>";
		}
		elseif($_SESSION["id"]==6){
			echo"<p class='erro'>Data inválida</p>";
		}
		elseif($_SESSION["id"]==7){
			echo"<p class='erro'>E-mail inválido</p>";
		}
		elseif($_SESSION["id"]==8){
			echo"<p class='erro'>CPF DUPLO</p>";
		}		
		elseif($_SESSION["id"]==9){
			echo"<p class='erro'>E-mail DUPLO</p>";
		}
		
		
					
		
		
		
	}
	unset($_SESSION["id"]);
	//finalizando a variavel
	?>
    <form action="insere.php" method="post" enctype="multipart/form-data" class="cadastro">
        <fieldset>
            	<label for="usuario">Insira seu nome: </label>
                <input type="text" name="nome" id="usuario" autofocus /><br/>
                
                               
                <label>Insira seu CPF: </label>       
                <input type="text" name="cpf" /><br/>
               
                
                <label>Data de nascimento: </label><br/>
                <input type="text" name="dtnascimento"  id="amigos" placeholder="dd/mm/aaaa" />
                
                
                <label for="sexo">Qual o seu sexo?</label>
                <select name="sexo" id="sexo">
                	<option value="">Escolha...</option>
                    <option value="feminino">Feminino</option>
                	<option value="masculino">Masculino</option>
                	<option value="indefinido">Indefinido</option>
                    
                </select>
                
                <br/>
                
                <label>E-mail: </label>
                <input type="text" name="email" /><br/>
                
                <label>Senha: </label>
                <input type="password" name="senha" id="usuario" autofocus /><br/>
                
                <div class="nada">
                		<input type="submit" name="enviar" value="Enviar" class="nada2"/>
                       
       					<input type="reset" value="Limpar" class="nada3"/>
                </div>
        </fieldset>
    </form>
</section>
</body>
<footer class="rodape">
    <p><strong class="maior">+18 </strong>| Proibido a venda para menores de 18 (dezoito) anos. Previsto na lei 13.106/15</p>
    </footer>
</html>
    	
    	