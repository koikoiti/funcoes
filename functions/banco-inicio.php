<?php
	class bancoinicio extends banco{
		function MontaEstados(){
			$Sql = "Select * from estados order by sigla";
			$result = $this->Execute($Sql);
			$estados = '<select class="form-control" name="cod_estados" onchange="buscaCidade()" id="cod_estados">';
			$estados .= '<option value = ""></option>';
			while($rs = mysql_fetch_array($result , MYSQL_ASSOC)){
				$estados .= '<option value="'.$rs['cod_estados'].'">'.$rs['nome'].'</option>';
			}
			$estados .= '</select>';
			return $estados;
		}
	}
?>