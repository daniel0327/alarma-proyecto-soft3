<?php 
if ( ! defined('BASEPATH')) 
{
	exit('No direct script access allowed');
}
/* Heredamos de la clase CI_Controller */
class graficos extends CI_Controller 

{

	  function index(){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
	 
	     
      //cargo el modelo de artículos
      $this->load->model('articulo_model');
	   $this->load->model('reportes_model');
	  
      
      //pido los ultimos artículos al modelo
      $tutela = $this->articulo_model->tamañoTutela();
      
      //creo el array con datos de configuración para la vista
     

       $quejas = $this->reportes_model->tamañoQuejas();
       $informacion = $this->reportes_model->tamañoInformacion();
       $consulta = $this->reportes_model->tamañoConsulta();
	  
	   $datos_vista = array('tutelas' => $tutela,'quejas' => $quejas,'informacion'=>$informacion,'consulta'=>$consulta);
	  
	    $this->load->view('graficos/administracion', $datos_vista);
	  	 
	
   }
   
  
   
 
	 
}