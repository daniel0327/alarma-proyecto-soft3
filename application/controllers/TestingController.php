<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'alarma');
	
	

function crearDerechodePeticion()
{

	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
		$records = $databaseConnection->prepare("INSERT INTO `derechopeticion` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Tipo_Derecho_Peticion`, `Solicitante`, `Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`, 
		`Usuario_codigo_rol`) VALUES
			(5435, 456, 'informacion', 'informacion', 'jorge contreras', 'andres marin', 'andres@uniquindio.edu.co', '2016-02-18', '2016-03-10', 1),
			(87364, 76453, 'consulta', 'consulta', 'camilo cifuentes ', 'jose hernandez', 'hernandez@uniquindio.edu.co', '2016-02-20', '2016-03-3', 1),
			(233333, 3222432, 'realizar queja', 'queja', 'angie', 'julian cardona', 'julian_cardona@uniquindio.edu.co', '2016-02-18', '2016-03-09', 1)");
			
			$records->execute();
			$databaseConnection = null;

			return "derechos de peticion creados";

}


function crearTutela()
{
	
	
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	


	$records = $databaseConnection->prepare("INSERT INTO `tutela` (`Radicado_Interno`, `Radicado_UQ`, `Asunto`, `Solicitante`, 										`Responsable`, `Correo_Responsable`, `Fecha_Recibido`, `Fecha_Vencimiento`, `Usuario_codigo_rol`) VALUES	(34234, 5435, 'devolucion de dinero', 'jhon', '												jorge', 'jose@hotmail.com', '2016-01-20', '2016-03-22', 1), (988773, 65534, '											integracion a la universidad', 'manuel', 'luis', 'uq@hotmail.com', '2016-02-20', '										2016-03-9', 1)");
			
			$records->execute();

			$databaseConnection = null;

			return "tutelas creadas";

}

function crearUsuario()
{	

	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	


	$records = $databaseConnection->prepare("INSERT INTO `usuario` (`codigo_rol`, `perfil`, `username`, `passsword`) VALUES
											(2, 'administrador', 'admin', 'admin');");
			
			$records->execute();


			$databaseConnection = null;

			return "usuario creado";

}


	class TestingController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('Unit_test');
		}


		public function index()
		{
			$this->unit->run(crearDerechodePeticion(),"derechos de peticion creados","probando la insercion en la tabla derechos de peticion");
			$this->unit->run(crearTutela(),"tutelas creadas","probando la insercion en la tabla tutelas");
			$this->unit->run(crearUsuario(),"usuario creado","probando la insercion en la tabla usuarios");
			$this->load->view('tests/tests.php');
		}

	}
?>
