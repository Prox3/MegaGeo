<?php
  require_once('class.phpmailer.php');
	
	ini_set("memory_limit","50M");
	set_time_limit(0);
	
	################################################ E-mail para ADM's ##########################################################################		
	$mail = new PHPMailer();
	
	//Variaveis para envio
	$nome = $_POST['txtNome'];
	$empresa = $_POST['txtEmpresa'];
	$telefone = $_POST['txtTelefone'];
	$email = $_POST['txtEmail'];
	$local = $_POST['txtLocalObra'];
	$tipoObra = $_POST['txtTipoObra'];
	$qtd = $_POST['txtQtdEstacas'];
	$diametro = $_POST['txtDiametroEstacas'];
	$profundidade = $_POST['txtProfundidadeEstacas'];
	$previsao = $_POST['txtPrevisao'];
	$arqError = 1;
	
	// O nome original do arquivo no computador do usuário
	$arqName = $_FILES['image_event']['name'];
	// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
	$arqType = $_FILES['image_event']['type'];
	// O tamanho, em bytes, do arquivo
	$arqSize = $_FILES['image_event']['size'];
	// O nome temporário do arquivo, como foi guardado no servidor
	$arqTemp = $_FILES['image_event']['tmp_name'];
	// O código de erro associado a este upload de arquivo
	$arqError = $_FILES['image_event']['error'];
	if ($arqError == 0 && isset($arqName)) {
		$pasta = '../anexo/';
		$upload = move_uploaded_file($arqTemp, $pasta . $arqName);
	}
	
	//Fim Variaveis para envio
	
	$body = '<h1>Solicitação de Orçamento</h1>';
	$body .='<br/>';
	$body .='<p>Nome: '. $nome .'</p>';
	$body .='<p>Empresa: '. $empresa .'</p>';
	$body .='<p>Telefone: '. $telefone .'</p>';
	$body .='<p>E-mail: '. $email .'</p>';
	$body .='<p>Loca da Obra: '. $local .'</p>';
	$body .='<p>Tipo da Obra: '. $tipoObra .'</p>';
	$body .='<br/>';
	$body .='<p><b>Estacas Hélice Contínua:</b></p>';
	$body .='<p>Quantidade: '. $qtd .'</p>';
	$body .='<p>Diâmentro: '. $diametro .'</p>';
	$body .='<p>Profundidade: '. $profundidade .'</p>';
	$body .='<br/>';
	$body .='<p><b>Previsão de Início</b></p>';
	$body .='<p>'. $previsao .'</p>';
		
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "contato@prox3.com.br";  // GMAIL username
	$mail->Password   = "Contato112233Prox3";            // GMAIL password
	
	$mail->SetFrom('contato@prox3.com.br', 'PROX3');
	
	$mail->AddReplyTo("contato@prox3.com.br","PROX3");
	
	$assunto = '[MegaGeo] Solicitação de Orçamento';
	$assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'B', base64_encode($assunto));
	
	$mail->Subject    = $assunto_codificado;
	
	//$mail->AltBody    = "Caso n&atilde;o esteja visualizando este e-mail, acesse esse link:"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress('contato@prox3.com.br','PROX3');
	if ($arqError == 0 && isset($arqName)) {
		$mail->AddAttachment('../anexo/'. $arqName );// attachment
	}
	if(!$mail->Send()) {
		echo "error";
	} else {
		echo "ok";
	}
	if ($arqError == 0 && isset($arqName)) {
		unlink('../anexo/'. $arqName );
	}
?>