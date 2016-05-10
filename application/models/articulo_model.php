<?php
class Articulo_model extends CI_Model {

   function __construct(){
		
		parent::__construct();
        $this->load->database();
    }
   
   /**
   *metodo llamado por el controlador de reportes de tutelas que devuelve un informe acerca del estado de las tutelas
   */
   function dame_ultimos_articulos(){
     
	    $query = $this->db->query("SELECT Fecha_Vencimiento,Solicitante,Fecha_Recibido,Responsable,Radicado_Interno,Asunto FROM tutela");
        $result= $query->result();
        ;
		 $tamaño=count($result);
		 
		 
		 
		  $hoy= date('Y-m-d',strtotime('-1 day')) ;

                $hoy = strtotime($hoy);
				
					
		 
		if($tamaño>0)
	      {
			
		
			 foreach ($result as $row)
					{
						
						 $Solicitante=$row->Solicitante;
						 $FechaVencimiento=$row->Fecha_Vencimiento;
						 $FechaRecibido=$row->Fecha_Recibido;
						 $Responsable=$row->Responsable;
						 $RadicadoInterno=$row->Radicado_Interno;
						 $Asunto=$row->Asunto;
					   
					   
					  
					   
					             $informativo1 = date('Y-m-d',strtotime('-21 days', strtotime($FechaVencimiento))); 
					             // informativo para quejas
								 $informativo2= date('Y-m-d',strtotime('-20 days', strtotime($FechaVencimiento))); 
								 $informativo3= date('Y-m-d',strtotime('-19 days', strtotime($FechaVencimiento))); 
								 $informativo4= date('Y-m-d',strtotime('-18 days', strtotime($FechaVencimiento))); 
								 $informativo5= date('Y-m-d',strtotime('-17 days', strtotime($FechaVencimiento))); 
								 $informativo6= date('Y-m-d',strtotime('-16 days', strtotime($FechaVencimiento))); 
								 $informativo7= date('Y-m-d',strtotime('-15 days', strtotime($FechaVencimiento))); 
                                 		 
					             $aceptable1 = date('Y-m-d',strtotime('-14 days', strtotime($FechaVencimiento))); 
					             // informativo para informacion
								 $aceptable2= date('Y-m-d',strtotime('-13 days', strtotime($FechaVencimiento))); 
								 $aceptable3= date('Y-m-d',strtotime('-12 days', strtotime($FechaVencimiento))); 
								 $aceptable4= date('Y-m-d',strtotime('-11 days', strtotime($FechaVencimiento))); 
								 $aceptable5= date('Y-m-d',strtotime('-10 days', strtotime($FechaVencimiento))); 
								 $aceptable6= date('Y-m-d',strtotime('-9 days', strtotime($FechaVencimiento))); 
								 $aceptable7= date('Y-m-d',strtotime('-8 days', strtotime($FechaVencimiento))); 

		                         $critico1 = date('Y-m-d',strtotime('-8 days', strtotime($FechaVencimiento)));
								 $critico1 = date('Y-m-d',strtotime('-7 days', strtotime($FechaVencimiento))); 
								 $critico2= date('Y-m-d',strtotime('-6 days', strtotime($FechaVencimiento))); 
								 $critico3= date('Y-m-d',strtotime('-5 days', strtotime($FechaVencimiento))); 
								 $critico4= date('Y-m-d',strtotime('-4 days', strtotime($FechaVencimiento))); 
								 $critico5= date('Y-m-d',strtotime('-3 days', strtotime($FechaVencimiento))); 
								 $critico6= date('Y-m-d',strtotime('-2 days', strtotime($FechaVencimiento))); 
								 $critico7= date('Y-m-d',strtotime('-1 days', strtotime($FechaVencimiento))); 
							
								
							
							if(strtotime($informativo1) == $hoy  || strtotime($informativo2) == $hoy || strtotime($informativo3) == $hoy
						    || strtotime($informativo4) == $hoy  || strtotime($informativo5) == $hoy || strtotime($informativo6) == $hoy
							|| strtotime($informativo7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"green",
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
								
								if(strtotime($aceptable1) == $hoy  || strtotime($aceptable2) == $hoy || strtotime($aceptable3) == $hoy
						    || strtotime($aceptable4) == $hoy  || strtotime($aceptable5) == $hoy || strtotime($aceptable6) == $hoy
							|| strtotime($aceptable7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"yellow",
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
								
									if(strtotime($critico1) == $hoy  || strtotime($critico2) == $hoy || strtotime($critico3) == $hoy
						    || strtotime($critico4) == $hoy  || strtotime($critico5) == $hoy || strtotime($critico6) == $hoy
							|| strtotime($critico7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"red",
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
							
							
							
					 
					}
				
									
			 
			 
		  }
		
      return $fechas;

  
   }
   
   
   
   /**
   *metodo que calcula la cantidad de tutelas 
   */
    function tamañoTutela(){
		
	     $query = $this->db->query("SELECT Fecha_Vencimiento,Solicitante,Fecha_Recibido,Responsable,Radicado_Interno,Asunto FROM tutela");
        $result= $query->result();
        ;
		 $tamaño=count($result);
		
		return $tamaño;
		
		
	}
   
   
   
   
   
}
?>