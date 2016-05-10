<?php 
if ( ! defined('BASEPATH'))
{
	exit('No direct script access allowed');
}
/* Heredamos de la clase CI_Controller */
class reportesP extends CI_Controller 

{

	  function index(){
    
	 $this->load->helper('url');
	       $this->load->model('reportes_model');
	   
	    $ultimosArticulos = $this->reportes_model->dame_ultimos_articulos();
      
      //creo el array con datos de configuración para la vista
      $datos_vista = array('rs_articulos' => $ultimosArticulos);
	  	 
		 
	
	  
	   $offset = isset($_POST['rp']) ? intval($_POST['rp']) : 5;
                 $page=isset($_POST['page']) ? intval($_POST['page']) : 1;
				 $limit = ($page-1)*$offset;
				 	 
                 $userdata = array_slice($datos_vista,$limit, $offset);
				 
		$response['userList'] = array(
	        'page' => $page,
			'total' => count($datos_vista),
	        'rows' => $userdata );


	  $json =  json_encode($response);		 
	$this->load->view('reportesP/administracion' ,$json);
	  
	 
  
   }
   
   /*
   funcion que es llamada por el script que crea la tabla de reportes de derechos de peticion
   */
   function load()
   {
	 
	   
	 $this->load->helper('url');
	 $this->load->model('reportes_model');
	 $ultimosArticulos = $this->reportes_model->dame_ultimos_articulos();
      
      //creo el array con datos de configuración para la vista
     $datos_vista = array('rs_articulos' => $ultimosArticulos);
	  	 
		 
	
	  
	   $offset = isset($_POST['rp']) ? intval($_POST['rp']) : 5;
                 $page=isset($_POST['page']) ? intval($_POST['page']) : 1;
				 $limit = ($page-1)*$offset;
				 	 
                 $userdata = array_slice($datos_vista,$limit, $offset);
				 
		$response['userList'] = array(
	        'page' => $page,
			'total' => count($datos_vista),
	        'rows' => $userdata["rs_articulos"] );


	  $json =  json_encode($response["userList"]);
	  echo $json;  
	   
   }
   
 
	 
}