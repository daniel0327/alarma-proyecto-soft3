<?php


//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'alarma');
	class CRUD_DB
	{


		public function crearDerechodePeticion()
		{

			
			
			//PDO Database Connection
			try {
				$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
				$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}

				$records = $databaseConnection->prepare("DELETE FROM `derechopeticion` WHERE ((`Radicado_Interno` = 5435) OR (`Radicado_Interno` = 87364) OR (`Radicado_Interno` = 233333))");
				$records->execute();

				$records = $databaseConnection->prepare("INSERT INTO `derechopeticion` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Tipo_Derecho_Peticion`, `Solicitante`, `Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`) VALUES
					(5435, 456, 'informacion', 'informacion', 'jorge contreras', 'andres marin', 'andres@uniquindio.edu.co', '2016-02-18', '2016-03-10'),
					(87364, 76453, 'consulta', 'consulta', 'camilo cifuentes ', 'jose hernandez', 'hernandez@uniquindio.edu.co', '2016-02-20', '2016-03-3'),
					(233333, 3222432, 'realizar queja', 'queja', 'angie', 'julian cardona', 'julian_cardona@uniquindio.edu.co', '2016-02-18', '2016-03-09')");
					
					$records->execute();
					$databaseConnection = null;

					return "derechos de peticion creados";

		}

public function eliminarDerechodePeticion()
{

	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

		$records = $databaseConnection->prepare("DELETE FROM `derechopeticion` WHERE (`Radicado_Interno` = 5435)");
		$records->execute();

		
			$databaseConnection = null;

			return "derecho de peticion eliminado";

}

public function actualizarDerechodePeticion()
{

	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

		$records = $databaseConnection->prepare("UPDATE FROM `derechopeticion` SET `Solicitante` = 'jorge contreras'  WHERE (`Radicado_Interno` = 87364)");
		$records->execute();

		
			$databaseConnection = null;

			return "derecho de peticion actualizado";

}


public function crearTutela()
{
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	$records = $databaseConnection->prepare("DELETE FROM `tutela` WHERE ((`Radicado_Interno` = 34234) OR (`Radicado_Interno` = 988773))");
		$records->execute();


	$records = $databaseConnection->prepare("INSERT INTO `tutela` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Solicitante`, 										`Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`) VALUES	(34234, 5435, 'devolucion de dinero', 'jhon', 'jorge', 'jose@hotmail.com', '2016-01-20', '2016-03-22'), (988773, 65534, 'integracion a la universidad', 'manuel', 'luis', 'uq@hotmail.com', '2016-02-20', '2016-03-9')");
			
			$records->execute();

			$databaseConnection = null;

			return "tutelas creadas";

}

public function eliminarTutela()
{
	
	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	$records = $databaseConnection->prepare("DELETE FROM `tutela` WHERE (`Radicado_Interno` = 34234)");
		$records->execute();


			$databaseConnection = null;

			return "tutela eliminada";

}

public function actualizarTutela()
{

	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

		$records = $databaseConnection->prepare("UPDATE FROM `tutela` SET `Solicitante` = 'jhon contreras'  WHERE (`Radicado_Interno` = 988773)");
		$records->execute();

		
			$databaseConnection = null;

			return "tutela actualizada";

}

public function crearUsuario()
{	

	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	
	$records = $databaseConnection->prepare("DELETE FROM `usuario` WHERE `codigo_rol` = 2;");
		$records->execute();

	$records = $databaseConnection->prepare("INSERT INTO `usuario` (`codigo_rol`, `perfil`, `username`, `passsword`) VALUES
											(2, 'administrador', 'admin', 'admin');");
			
			$records->execute();


			$databaseConnection = null;

			return "usuario creado";

}

public function eliminarUsuario()
{	

	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	
	$records = $databaseConnection->prepare("DELETE FROM `usuario` WHERE `codigo_rol` = 2;");
		$records->execute();

			$databaseConnection = null;

			return "usuario eliminado";

}

public function enviarCorreoTutela()
{
	$mail = new PHPMailer();
		$mail->CharSet = "utf-8";
		//indico a la clase que use SMTP
		$mail->IsSMTP();
		//permite modo debug para ver mensajes de las cosas que van ocurriendo
		$mail->SMTPDebug =0;
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
		$mail->Subject = "Mensaje de pruebaen el test";
		$mail->MsgHTML("Hola  que tal, mensaje de prueba del test tutela");
		//indico destinatario
		$address = "d-cia@hotmail.com";
		$mail->AddAddress($address, "Daniel");
		if(!$mail->Send()) {
		return "test mensaje tutela";
		} else {
		return "test mensaje tutela";
		}
}

public function enviarCorreoPeticion()
{
	$mail = new PHPMailer();
		$mail->CharSet = "utf-8";
		//indico a la clase que use SMTP
		$mail->IsSMTP();
		//permite modo debug para ver mensajes de las cosas que van ocurriendo
		$mail->SMTPDebug =0;
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
		$mail->Subject = "Mensaje de pruebaen el test";
		$mail->MsgHTML("Hola  que tal, mensaje de prueba del test peticion");
		//indico destinatario
		$address = "d-cia@hotmail.com";
		$mail->AddAddress($address, "Daniel");
		if(!$mail->Send()) {
		return "test mensaje derecho de peticion";
		} else {
		return "test mensaje derecho de peticion";
		}
}

public function notificarUsuario()
{
	$mail = new PHPMailer();
		$mail->CharSet = "utf-8";
		//indico a la clase que use SMTP
		$mail->IsSMTP();
		//permite modo debug para ver mensajes de las cosas que van ocurriendo
		$mail->SMTPDebug =0;
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
		$mail->Subject = "Mensaje de prueba notificar Usuario";
		$mail->MsgHTML("Hola  que tal, mensaje de prueba notificar usuario");
		//indico destinatario
		$address = "d-cia@hotmail.com";
		$mail->AddAddress($address, "Daniel");
		if(!$mail->Send()) {
		return "usuario notificado";
		} else {
		return "usuario notificado";
		}
}

}

?>
