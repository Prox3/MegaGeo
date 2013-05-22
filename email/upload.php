<?php
	ini_set("memory_limit","50M");
	set_time_limit(0);
	
	// O nome original do arquivo no computador do usuário
	$arqName = $_FILES['arquivo']['name'];
	// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
	$arqType = $_FILES['arquivo']['type'];
	// O tamanho, em bytes, do arquivo
	$arqSize = $_FILES['arquivo']['size'];
	// O nome temporário do arquivo, como foi guardado no servidor
	$arqTemp = $_FILES['arquivo']['tmp_name'];
	// O código de erro associado a este upload de arquivo
	$arqError = $_FILES['arquivo']['error'];
	
	if ($arqError == 0) {
		$pasta = '../anexo/';
		$upload = move_uploaded_file($arqTemp, $pasta . $arqName);
		echo '../anexo/'. $arqName;
	}

?>