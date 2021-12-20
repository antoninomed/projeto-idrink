<?php
session_start();
$conexao = mysqli_connect("localhost","root","","idrink_bd");

if(!$conexao){
	$_SESSION["id"]=5;
	$_SESSION["msg_falha"]= "A conexão não foi estabelecida, o seguinte erro foi gerado:<b>".mysqli_connect_error()."</b>";
	header("location:cadastro.php"); //BANCO NÃO CONECTADO
	die();
}