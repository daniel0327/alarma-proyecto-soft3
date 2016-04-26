<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Tutelas extends CI_Controller {

	function __construct() 
	{
		
		parent::__construct();

		/* Cargamos la base de datos */
		$this->load->database();

		/* Cargamos la libreria*/
		$this->load->library('grocery_crud');

		/* Añadimos el helper al controlador */
		$this->load->helper('url');
	}

	function index() 
	{
		/*
		 * Mandamos todo lo que llegue a la funcion
		 * administracion().
		 **/
		redirect('Tutelas/administracion');
	}

	/*
	 * 
 	 **/
	function administracion()
	{
		
		
		try{

			/* Creamos el objeto */
			$crud = new grocery_CRUD();

			/* Seleccionamos el tema */
			$crud->set_theme('flexigrid');

			/* Seleccionmos el nombre de la tabla de nuestra base de datos*/
			$crud->set_table('tutela');

			/* Le asignamos un nombre */
			$crud->set_subject('Tutela');

			/* Asignamos el idioma español */
			$crud->set_language('spanish');

			
			
			
			/* Aqui le decimos a grocery que estos campos son obligatorios */
			$crud->required_fields(
				'Radicado_Interno',
                'Asunto',
				'Responsable',
				'Correo_Responsable', 
				'Solicitante', 
				'Fecha_Recibido',
				'Fecha_Vencimiento' 
	
			);
	        //$crud->field_type('Solicitante','dropdown',array('Angelica','Ana'));
		

			/* Aqui le indicamos que campos deseamos mostrar */
			$crud->columns(
			    'Estado',
				'Radicado_Interno',
                'Asunto',
				'Responsable',
				'Correo_Responsable', 
				'Solicitante', 
				'Fecha_Recibido',		
				'Fecha_Vencimiento'
			    
			);
			
			$crud -> set_rules ( 'Correo_Responsable' ,  'Email' , 'trim|required|valid_email' ); 
	
		    $crud->callback_column('Estado',array($this,'_GC_Estatus'));
			

			
			/* Generamos la tabla */
			$output = $crud->render();
			
			/* La cargamos en la vista situada en 
			/applications/views/productos/administracion.php */
			$this->load->view('tutelas/administracion', $output);
			
	
			
			
		}catch(Exception $e){
			/* Si algo sale mal cachamos el error y lo mostramos */
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
			
	}
	
	
		public function _GC_Estatus($value, $row) 
		{
			$inicio=date('Y-m-d');
			$fin=$row->Fecha_Vencimiento;

			
	      //  var_dump(strtotime($inicio));
          //  var_dump(strtotime($fin));
					
					
						if( $inicio < $fin) 
						{
							return '<span class="alert alert-success">Activa</span>';

						}
						else 
						{
						   return '<span class="alert alert-danger">Inactiva</span>';
		
					    }
	
		}
}