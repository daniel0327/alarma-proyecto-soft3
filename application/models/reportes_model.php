<?php
class Reportes_model extends CI_Model {

   function __construct(){
		
		parent::__construct();
        $this->load->database();
    }
   
    /**
   *metodo llamado por el controlador de reportes de derechos de peticion que devuelve un informe acerca del estado de estos
   */
   function dame_ultimos_articulos(){
     
	    $query = $this->db->query("SELECT Solicitante,Asunto,Radicado_Interno,Responsable,Fecha_Recibido,Fecha_Vencimiento,Tipo_Derecho_Peticion FROM derechopeticion");
        $result= $query->result();
        ;
		 $tamaño=count($result);
		 
		 
		  $hoy= date('Y-m-d',strtotime('-1 day')) ;

                $hoy = strtotime($hoy);


			
		 
		if($tamaño>0)
	    {
			 
			// echo "hay datos"; 
			 foreach ($result as $row)
					{
						
						 $Solicitante=$row->Solicitante;
						 $FechaVencimiento=$row->Fecha_Vencimiento;
						 $FechaRecibido=$row->Fecha_Recibido;
						 $Responsable=$row->Responsable;
						 $RadicadoInterno=$row->Radicado_Interno;
						 $Asunto=$row->Asunto;
						 $tipo=$row->Tipo_Derecho_Peticion;
						 
						 
						         $infoConsulta1= date('Y-m-d',strtotime('-42 days', strtotime($FechaVencimiento)));
					             $infoConsulta2= date('Y-m-d',strtotime('-41 days', strtotime($FechaVencimiento)));
								 $infoConsulta3= date('Y-m-d',strtotime('-40 days', strtotime($FechaVencimiento)));
								 $infoConsulta4= date('Y-m-d',strtotime('-39 days', strtotime($FechaVencimiento)));
								 $infoConsulta5= date('Y-m-d',strtotime('-38 days', strtotime($FechaVencimiento)));
								 $infoConsulta6= date('Y-m-d',strtotime('-37 days', strtotime($FechaVencimiento)));
								 $infoConsulta7= date('Y-m-d',strtotime('-36 days', strtotime($FechaVencimiento)));
								 $infoConsulta8= date('Y-m-d',strtotime('-35 days', strtotime($FechaVencimiento)));
								 $infoConsulta9= date('Y-m-d',strtotime('-34 days', strtotime($FechaVencimiento)));
								 $infoConsulta10= date('Y-m-d',strtotime('-33 days', strtotime($FechaVencimiento)));
								 $infoConsulta11= date('Y-m-d',strtotime('-32 days', strtotime($FechaVencimiento)));
								 $infoConsulta12= date('Y-m-d',strtotime('-31 days', strtotime($FechaVencimiento)));
								 $infoConsulta13= date('Y-m-d',strtotime('-30 days', strtotime($FechaVencimiento)));
								 $infoConsulta14= date('Y-m-d',strtotime('-29 days', strtotime($FechaVencimiento)));
								 
								 $infoConsulta15= date('Y-m-d',strtotime('-28 days', strtotime($FechaVencimiento)));
								 $infoConsulta16= date('Y-m-d',strtotime('-27 days', strtotime($FechaVencimiento)));
								 $infoConsulta17= date('Y-m-d',strtotime('-26 days', strtotime($FechaVencimiento)));
								 $infoConsulta18= date('Y-m-d',strtotime('-25 days', strtotime($FechaVencimiento)));
								 $infoConsulta19= date('Y-m-d',strtotime('-24 days', strtotime($FechaVencimiento)));
								 $infoConsulta20= date('Y-m-d',strtotime('-23 days', strtotime($FechaVencimiento)));
								 $infoConsulta21= date('Y-m-d',strtotime('-22 days', strtotime($FechaVencimiento)));
						 
						 
						 		// osea faltan 5 dias para que se venza
						         $informativo1 = date('Y-m-d',strtotime('-21 days', strtotime($FechaVencimiento))); 
								 $informativo2= date('Y-m-d',strtotime('-20 days', strtotime($FechaVencimiento))); 
								 $informativo3= date('Y-m-d',strtotime('-19 days', strtotime($FechaVencimiento))); 
								 $informativo4= date('Y-m-d',strtotime('-18 days', strtotime($FechaVencimiento))); 
								 $informativo5= date('Y-m-d',strtotime('-17 days', strtotime($FechaVencimiento))); 
								 $informativo6= date('Y-m-d',strtotime('-16 days', strtotime($FechaVencimiento))); 
								 $informativo7= date('Y-m-d',strtotime('-15 days', strtotime($FechaVencimiento))); 
                                 		 
					             $aceptable1 = date('Y-m-d',strtotime('-14 days', strtotime($FechaVencimiento))); 
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
						 
							// queja tiene un plazo de 15 dias habiles
							 if($tipo=="queja")
							 {

						    if(strtotime($informativo1) == $hoy  || strtotime($informativo2) == $hoy || strtotime($informativo3) == $hoy
						    || strtotime($informativo4) == $hoy  || strtotime($informativo5) == $hoy || strtotime($informativo6) == $hoy
							|| strtotime($informativo7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"green",'tipo'=>$tipo,
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
								
								if(strtotime($aceptable1) == $hoy  || strtotime($aceptable2) == $hoy || strtotime($aceptable3) == $hoy
						    || strtotime($aceptable4) == $hoy  || strtotime($aceptable5) == $hoy || strtotime($aceptable6) == $hoy
							|| strtotime($aceptable7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"yellow",'tipo'=>$tipo,
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
								
									if(strtotime($critico1) == $hoy  || strtotime($critico2) == $hoy || strtotime($critico3) == $hoy
						    || strtotime($critico4) == $hoy  || strtotime($critico5) == $hoy || strtotime($critico6) == $hoy
							|| strtotime($critico7) == $hoy)
								{			
								  $fechas[]= array('Solicitante'=> $Solicitante, "color"=>"red",'tipo'=>$tipo,
					                 'fechaVencimiento'=>$FechaVencimiento,'fechaRecibido'=>$FechaRecibido,
					                 'Responsable'=>$Responsable,'radicadoInterno'=>$RadicadoInterno,
					                 'asunto'=>$Asunto);
								}
						
				            }
				 
				 // informacion tiene un plazo de 10 dias habiles
				              if($tipo=="informacion")
				             {
                               
					 
					             if(strtotime($aceptable1) == $hoy || strtotime($aceptable2) == $hoy 
								 || strtotime($aceptable3) == $hoy || strtotime($aceptable4) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"#01DF01");
									
								}
								
								   if(strtotime($aceptable5) == $hoy || strtotime($aceptable6) == $hoy 
								   || strtotime($aceptable7) == $hoy || strtotime($critico1) == $hoy
								   || strtotime($critico2) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"#FFFF00");
									
								}
								
								
								   if(strtotime($critico3) == $hoy || strtotime($critico4) == $hoy 
								   || strtotime($critico5) == $hoy || strtotime($critico6) == $hoy
								   || strtotime($critico7) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"#FF0000");
									
								}
					 
				            }
							// una consulta tiene un plazo de 30 dias habiles
							 if($tipo== "consulta")
				             {
							
							    if(strtotime($infoConsulta1) == $hoy || strtotime($infoConsulta2) == $hoy || strtotime($infoConsulta3) == $hoy 
								|| strtotime($infoConsulta4) == $hoy || strtotime($infoConsulta5) == $hoy || strtotime($infoConsulta6) == $hoy
								|| strtotime($infoConsulta7) == $hoy || strtotime($infoConsulta8) == $hoy || strtotime($infoConsulta9) == $hoy
								|| strtotime($infoConsulta10) == $hoy || strtotime($infoConsulta11) == $hoy || strtotime($infoConsulta12) == $hoy
								|| strtotime($infoConsulta13) == $hoy || strtotime($infoConsulta14) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"green");
									
								}
								
								
				               if(strtotime($infoConsulta15) == $hoy || strtotime($infoConsulta16) == $hoy || strtotime($infoConsulta17) == $hoy 
								|| strtotime($infoConsulta18) == $hoy || strtotime($infoConsulta19) == $hoy || strtotime($infoConsulta20) == $hoy
								|| strtotime($infoConsulta21) == $hoy || strtotime($informativo1) == $hoy || strtotime($informativo2) == $hoy
								|| strtotime($informativo3) == $hoy || strtotime($informativo4) == $hoy || strtotime($informativo5) == $hoy
								|| strtotime($informativo6) == $hoy || strtotime($informativo7) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"yellow");
									
								}
								
								if(strtotime($aceptable1) == $hoy || strtotime($aceptable2) == $hoy || strtotime($aceptable3) == $hoy 
								|| strtotime($aceptable4) == $hoy || strtotime($aceptable5) == $hoy || strtotime($aceptable6) == $hoy
								|| strtotime($aceptable7) == $hoy || strtotime($critico1) == $hoy || strtotime($critico2) == $hoy
								|| strtotime($critico3) == $hoy || strtotime($critico4) == $hoy || strtotime($critico5) == $hoy
								|| strtotime($critico6) == $hoy || strtotime($critico7) == $hoy)
								
								{
									$fechas[]= array('Solicitante'=> $Solicitante,'asunto'=>$Asunto,
									 'radicadoInterno'=>$RadicadoInterno,'Responsable'=>$Responsable,
									 'fechaRecibido'=>$FechaRecibido,'fechaVencimiento'=>$FechaVencimiento,'tipo'=>$tipo,"color"=>"red");
									
								}
								
								
							
							 }
					 
					}
				
									
			 
			 
		  }
		
      return $fechas;

  
   }

   /**
   *metodo que calcula la cantidad de derechos de peticion de quejas 
   */   
     function tamañoQuejas(){
		
	     $query = $this->db->query("SELECT Solicitante,Asunto,Radicado_Interno,Responsable,Fecha_Recibido,Fecha_Vencimiento,Tipo_Derecho_Peticion FROM derechopeticion where Tipo_Derecho_Peticion='queja'");
         $result= $query->result();
		 $tamaño=count($result);

		return $tamaño;
		
	}

	/**
    *metodo que calcula la cantidad de derechos de peticion de informacion 
    */   
	function tamañoInformacion(){
		
	     $query = $this->db->query("SELECT Solicitante,Asunto,Radicado_Interno,Responsable,Fecha_Recibido,Fecha_Vencimiento,Tipo_Derecho_Peticion FROM derechopeticion where Tipo_Derecho_Peticion='informacion'");
         $result= $query->result();
		 $tamaño=count($result);

		
		return $tamaño;
		
		
	}
   		/**
   		*metodo que calcula la cantidad de derechos de peticion de consultas 
   		*/   
      function tamañoConsulta(){
		
	     $query = $this->db->query("SELECT Solicitante,Asunto,Radicado_Interno,Responsable,Fecha_Recibido,Fecha_Vencimiento,Tipo_Derecho_Peticion FROM derechopeticion where Tipo_Derecho_Peticion='consulta'");
         $result= $query->result();
		 $tamaño=count($result);

		
		return $tamaño;
		
		
	}
   
   
   

}
?>