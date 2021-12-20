<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/cardapio.css" />
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<div <img class="img-fundo2" src="img-fundo2">
<?php 
if($_SESSION["ligado"] !=1){
	$_SESSION["falha"] =1;
header("location:login.php");
die();
}
else {
	$_SESSION["falha"] =1;
header("location:cardapio.php");
die();
}

?>
<a><span href="logout.php" class="sair glyphicon glyphicon-log-out" </span> </a>	
 <h1 class="nome-bebidas"><strong class="bebidas"><img class="logo3" src="arquivos/logo1.png"> | Realizar Pedidos</strong></h1>
	</div>
<body>

<div class="container2">
  <div class="row bebidas-logo">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    <img class="logo2" src="img/absolut-logo.jpg"> 
	</div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
   <img class="logo2" src="img/black-logo.jpg"> 
	</div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/ciroc-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/smirnoff-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/skyy-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/johnnie-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/jacobs-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/jack-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/gallo-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/eisen-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/bud-logo.jpg"> 
	</div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<img class="logo2" src="img/belvedere-logo.jpg"> 
	</div>
</div>
</div>
<div class="container">
    <div class="margem-inicio">
    	<h2 class="titulo-bebidas">Vodka</h2>
        <div class="row">
        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img class="bebidas-foto" src="img/absolut-foto.jpg"> 
            <p class="bebidas-titulo">Absolut Vodka - 750ml</p>
            <p class="preco">R$99,90 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="absolut"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/belvedere-foto.jpg">
             <p class="bebidas-titulo">Belvedere Pure - 1.75l</p>
             <p class="preco">R$320,50 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="belvedere"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/cir-foto.jpg">
             <p class="bebidas-titulo">Cîroc Vodka - 750ml</p>
             <p class="preco">R$200,00 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="ciroc"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/skyy-foto2.jpg">
             <p class="bebidas-titulo">Skyy Vodka - 750ml</p>
             <p class="preco">R$89,90 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="skyy"></p>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img class="bebidas-foto" src="img/smirnoff-foto.jpg"> 
            <p class="bebidas-titulo">Smirnoff Vodka - 1l</p>
            <p class="preco">R$72,50 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="smirnoff"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
        </div>
    </div>
    <div>
    	<h2  class="titulo-bebidas">Whisky</h2>
        <div class="row">
        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img class="bebidas-foto" src="img/black-foto.jpg"> 
            <p class="bebidas-titulo">Black & White Whisky - 1l</p>
            <p class="preco">R$89,90 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="black"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/jack-foto.jpg"> 
            <p class="bebidas-titulo">Jack Daniel's Whisky - 1l</p>
            <p class="preco">R$149,90 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="jack"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/johnnie-foto.jpg"> 
            <p class="bebidas-titulo">Red Label Whisky - 1l</p>
            <p class="preco">R$102,50 <span class="und">(1 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="red"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
        </div>
    </div>
    <div>
    	<h2  class="titulo-bebidas">Cerveja</h2>
        <div class="row">
        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img class="bebidas-foto" src="img/bud-foto.jpg"> 
            <p class="bebidas-titulo">Budweiser - 600ml</p>
            <p class="preco">R$50,00 <span class="und">(6 und.)</span></p>
            <p class="qtd-btn">Quantidade: <input max="20" min="0" type="number" name="bud"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             <img class="bebidas-foto" src="img/eisen-foto.jpg"> 
            <p class="bebidas-titulo">Eisenbahn Pilsen - 365ml</p>
            <p class="preco">R$41,90 <span class="und">(6 und.)</span></p>
            <p class="qtd-btn espaco4">Quantidade: <input max="20" min="0" type="number" name="eisen"></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              
        </div>
    </div>

    <div class="espaco4">
    	<input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar" value="Limpar">
    </div>
    </div>
    
    <div class="carrinho">
    <img class="carrinho2" src="img/carrinho.png"><h5 class="titulo-carrinho">R$</h5>
    
    </div>
   

	<?php
	
	if(isset($_GET["enviar"])){
	}
	
			
    
    ?>

    
   </body>
   </div>
   
   <footer class="rodape">
   <span class="rodape2"><strong class="maior">+18 </strong>| Proibido a venda para menores de 18 (dezoito) anos. Previsto na lei 13.106/15</span>
   </footer>

