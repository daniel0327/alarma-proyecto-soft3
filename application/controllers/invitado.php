<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class invitado extends CI_Controller 

{

	  function index(){
  
     //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
	 
      
    $this->load->view('invitado/administracion');
	  
	
   }
   
  
   
 
	 
}