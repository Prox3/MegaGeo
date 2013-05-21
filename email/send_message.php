<?php
  require_once('class.phpmailer.php');
	
	################################################ E-mail para ADM's ##########################################################################		
	$mail = new PHPMailer();
	
	//Variaveis para envio
	$nome = $_POST['nome'];
	$empresa = $_POST['empresa'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$local = $_POST['local'];
	$tipoObra = $_POST['tipoObra'];
	$qtd = $_POST['qtd'];
	$diametro = $_POST['diametro'];
	$profundidade = $_POST['profundidade'];
	$previsao = $_POST['previsao'];
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
	
	if (isset($_FILES['image_event']) &&
		$_FILES['image_event']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['image_event']['tmp_name'],
							 $_FILES['image_event']['name']);
	}
		
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

	if(!$mail->Send()) {
		echo "error";
	} else {
		echo "ok";
	}
?>