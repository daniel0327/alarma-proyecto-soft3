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

	}

?>
