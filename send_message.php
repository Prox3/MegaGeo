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
	
	$body ='[CORPO DO E-MAIL]';
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "contato@prox3.com.br";  // GMAIL username
	$mail->Password   = "Cont3Prox";            // GMAIL password
	
	$mail->SetFrom('contato@prox3.com.br', 'PROX3');
	
	$mail->AddReplyTo("contato@prox3.com.br","PROX3");
	
	$mail->Subject    = "[MegaGeo] Solicitação de Orçamento";
	
	//$mail->AltBody    = "Caso n&atilde;o esteja visualizando este e-mail, acesse esse link:"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress($email,$nome);

	if(!$mail->Send()) {
		echo "error";
	} else {
		$mail->Send();
		echo "ok";
	}
?>