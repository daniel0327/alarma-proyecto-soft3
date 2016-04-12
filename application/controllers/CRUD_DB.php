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

				$records = $databaseConnection->prepare("DELETE FROM `derechopeticion` WHERE ((`Radicado_Interno` = 5435 AND               `Usuario_codigo_rol` = 1) OR (`Radicado_Interno` = 87364 AND `Usuario_codigo_rol` = 1) OR (`Radicado_Interno` = 233333 AND `Usuario_codigo_rol` = 1))");
				$records->execute();

				$records = $databaseConnection->prepare("INSERT INTO `derechopeticion` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Tipo_Derecho_Peticion`, `Solicitante`, `Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`, 
				`Usuario_codigo_rol`) VALUES
					(5435, 456, 'informacion', 'informacion', 'jorge contreras', 'andres marin', 'andres@uniquindio.edu.co', '2016-02-18', '2016-03-10', 1),
					(87364, 76453, 'consulta', 'consulta', 'camilo cifuentes ', 'jose hernandez', 'hernandez@uniquindio.edu.co', '2016-02-20', '2016-03-3', 1),
					(233333, 3222432, 'realizar queja', 'queja', 'angie', 'julian cardona', 'julian_cardona@uniquindio.edu.co', '2016-02-18', '2016-03-09', 1)");
					
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

				$records = $databaseConnection->prepare("DELETE FROM `derechopeticion` WHERE (`Radicado_Interno` = 5435 AND               `Usuario_codigo_rol` = 1)");
				$records->execute();

				
					$databaseConnection = null;

					return "derecho de peticion eliminado";

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

	$records = $databaseConnection->prepare("DELETE FROM `tutela` WHERE ((`Radicado_Interno` = 34234 AND `Usuario_codigo_rol` = 1) OR (`Radicado_Interno` = 988773 AND `Usuario_codigo_rol` = 1))");
		$records->execute();


	$records = $databaseConnection->prepare("INSERT INTO `tutela` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Solicitante`, 										`Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`, `Usuario_codigo_rol`) VALUES	(34234, 5435, 'devolucion de dinero', 'jhon', '												jorge', 'jose@hotmail.com', '2016-01-20', '2016-03-22', 1), (988773, 65534, '											integracion a la universidad', 'manuel', 'luis', 'uq@hotmail.com', '2016-02-20', '										2016-03-9', 1)");
			
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

	$records = $databaseConnection->prepare("DELETE FROM `tutela` WHERE (`Radicado_Interno` = 34234 AND `Usuario_codigo_rol` = 1)");
		$records->execute();


			$databaseConnection = null;

			return "tutela eliminada";

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

	}

?>
