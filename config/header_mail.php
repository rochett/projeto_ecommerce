<?php
	require('lib/PHPMailerAutoload.php'); 
	
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->Host = "mail.infrasis.com.br";
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';  
	$mail->SMTPAuth = true; 
	$mail->Username = 'noreply@infrasis.com.br'; 
	$mail->Password = 'zt09@a04bs';  
	
	$mail->SMTPOptions = array(
	 'ssl' => array(
	 'verify_peer' => false,
	 'verify_peer_name' => false,
	 'allow_self_signed' => true
	 )
	);
	
	$mail->From = "noreply@infrasis.com.br";
	$mail->FromName = "LojaTeste";  
	
	$mail->AddAddress($emailto, $nameto); 
	//$mail->AddCC('joana@provedor.com', 'Joana');

    if ($attach_mail=='s'){
        $mail->AddAttachment($pasta_backup . $arquivo);
    }

	$mail->IsHTML(true); 
	$mail->CharSet = 'UTF-8';
	
	$mail->Subject = "Contato LojaTeste"; 
	$mail->Body = $nome.' enviou a seguinte mensagem:<br><br>'.$mensagem.'<br><br>'; 	 
	$enviado = $mail->Send();
	 
	if ($enviado) {
		$msg_envio = "Seu e-mail foi enviado com sucesso!";    
	} else {
		$msg_envio = "Houve um erro enviando o email: ".$mail->ErrorInfo;		
	}
?>