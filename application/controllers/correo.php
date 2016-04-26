<?php

require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");

class correo
{
	function correo()
	{
		$mail = new PHPMailer();
		//$mail->CharSet = "utf-8";
		//$mail->Encoding = "quoted­printable";
		//indico a la clase que use SMTP
		$mail->IsSMTP();
		//permite modo debug para ver mensajes de las cosas que van ocurriendo
		$mail->SMTPDebug =1;
		//Debo de hacer autenticación SMTP
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		//indico el servidor de Gmail para SMTP
		$mail->Host = "smtp.gmail.com";
		//indico el puerto que usa Gmail
		$mail->Port = 465;
		//indico un usuario / clave de un usuario de gmail
		$mail->Username = "sistealarmasuq@gmail.com";
		$mail->Password = "sistealarmas2016";
		$mail->SetFrom('sistealarmasuq@gmail.com', 'sistealarmas UQ');
		$mail->AddReplyTo("sistealarmasuq@gmail.com","sistealarmas UQ");
		$mail->Subject = "Mensaje de prueba";
		$mail->MsgHTML("Hola  que tal, esto es el cuerpo del mensaje y se lo env&iacuteo desde php!");
		//indico destinatario
		$address = "d-cia@hotmail.com";
		$mail->AddAddress($address, "Nombre completo");
		if(!$mail->Send()) {
		echo "Error al enviar: " . $mail->ErrorInfo;
		} else {
		echo "Mensaje enviado!";
		}
	}
}



?>