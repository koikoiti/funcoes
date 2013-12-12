<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');
	
	#Instancia o objeto
	$banco = new bancoinicio();
	
	#Monta Estados
	$estados = $banco->MontaEstados();
	
	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('estado-cidade');
	$Conteudo = str_replace("<%ESTADOS%>", $estados, $Conteudo);
?>
