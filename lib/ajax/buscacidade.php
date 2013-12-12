<?php
	include('../../functions/banco.php');
	include('../../conf/tags.php');
	$banco = new banco;
	$banco->Conecta();

	$idestado = (int) $_POST['idestado'];
	$Sql = "Select * from cidades where estados_cod_estados = $idestado";
	$result = $banco->Execute($Sql);
	$select_cidades = "<select class='form-control' name='cod_cidade' id='cod_cidade'>";
	while($rs = mysql_fetch_array($result, MYSQL_ASSOC)){
		$select_cidades .= "<option value='".$rs['cod_cidades']."'>".$rs['nome']."</option>";
	}
	$select_cidades .= "</select>";
	
	echo utf8_encode($select_cidades);
?>