<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/cardapio.css" />
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<div <img class="img-fundo2" src="img-fundo2">
<?php require_once("cabecalho.php");?>
<?php

//RECEBENDO DADOS DO FORMULÁRIO


//echo"<pre>";
//print_r($_FILES);
//echo"</pre>";

//foreach($_POST as $chave => $campos){
	//$$chave = $campos;//INDICE SENDO TRANSFORMADO EM VARIÁVEL
	
	//TORNANDO OS VALORES EM MINÚSCULO
	
	//$$chave= strtolower($campos);
	
	//RETIRARA OS ESPAÇOS EM BRANCO 
	//$$chave = trim($campos);
	
	//VALIDAÇÃO DE CAMPOS EM BRANCO
	
//}
	if(empty($$chave)){
		echo"Campos em Branco";
}
if($chave=="cpf"){
		
		$$chave = utf8_decode($$chave);
		
		if($chave=="nome"){
		
		$$chave = utf8_decode($$chave);

		}
		
	}

	//VERIFICAÇÃO DE CAMPOS
	if($chave== "dtnascimento"){
		$data = explode ("/",$$chave);
		$result = checkdate($data[1],$data[0],$data[2]);
		if(!$result){
		$_SESSION["id"]=6;
		header("location:cadastro.php"); //data invalida
		die();
		}
	}
		
		
		//Retirar aspas simples e aspas duplas
	if ($chave=="email"){
	$result = filter_var($$chave,FILTER_VALIDATE_EMAIL);
	if(!$result){
	$_SESSION["id"]=7;
	header("location:cadastro.php");
	}
	}


?>

<selection id="exibir">
<p> Nome: <?=$nome?></p>
<p> CPF: <?=$cpf?></p>
<p> Data de Nascimento: <?=$dtnascimento?></p>
<p> Sexo: <?=$sexo?></p>
<p> E-mail: <?=$email?></p>
<p> Senha: <?=$senha?></p>
</selection>
</body>
</html>