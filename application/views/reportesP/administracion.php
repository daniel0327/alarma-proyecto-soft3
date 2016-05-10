<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device−width, initial−scale=1.0" />
	<title>Reporte Derechos De Peticion</title>

	
	
	
	
 <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="application/views/reportesP/flexigrid.pack.js"></script>
<link rel="stylesheet" type="text/css" href="application/views/reportesP/flexigrid.css">


	

</head>
<body  BGCOLOR="#D8D8D8">

   <style type="text/css">
    .boton{
          font-size:10px;
          font-family:Verdana,Helvetica;
          font-weight:bold;
          color:white;
          background:black;
          border:0px;
          width:130px;
          height:25px;
         }
  header
  {
    background: #20912D;
    -webkit-border-radius: 40px;
  }
  footer
  {
    background: #20912D;
    -webkit-border-radius: 40px;
    height: 90px;
  }

  p
  {
    font-size: 25px;
    padding-top: 32px;
  }
  #logo{
        display: block;
          margin: 15px auto;
          height: 165px;
          padding-top: 10px;
          padding-bottom: 10px;
        }
  </style>
  <header>
    <img src="http://localhost/alertas-proyecto-soft3/assets/images/uniquindio.PNG" id="logo">
  </header>
	<div>		
		<br>
	<center><h2>REPORTE DE DERECHOS DE PETICIÓN</h2></center>

    
	</div>
  
<div align="left">
  <br>  
<table width="350" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A"> 
<tr> 
   <td><font color="#FFFFFF" face="arial, verdana, helvetica"> 
<b>Estados de derechos de petición</b> 
   </font></td> 
</tr> 
<tr> 
   <td bgcolor="#ffffcc"> 

   <font face="arial, verdana, helvetica"> 
   Los colores de esta tabla están distribuidos según el estado en el que en el
   que se encuentre la tutela, así:   
   <br>     
   Critico:Rojo
   <br>
   Advertencia:Amarillo
   <br>
   Información:Verde
   </font> 
   </td> 
</tr> 
</table>
  </form>
</div>



  




<title>proyecto software</title>

<div><h3>Tabla De Verificación de Vencimientos De Derechos de Petición</h3></div>




<div id="flex1" style=""></div> 




		
    

<script>



jQuery(document).ready(function() 
{
	
		
	
var issueListingGrid = null;
       jQuery("#flex1").flexigrid({
		 url: 'reportesP/load', dataType: 'json', colModel : 
	   [
	   {display: 'Radicado Interno', name : 'radicadoInterno',width: 180 , sortable : true, align: 'left'},
	    {display: 'Asunto', name : 'asunto',width: 160 , sortable : true, align: 'left'},
       {display: 'Solicitante', name : 'Solicitante',width: 200 , sortable : true, align: 'left'}, 
       {display: 'Responsable', name : 'Responsable',width: 200 , sortable : true, align: 'left'},
	   {display: 'Fecha Inicio ', name : 'fechaRecibido',width: 170 , sortable : true, align: 'left'},
	   {display: 'Fecha Vencimiento', name : 'fechaVencimiento', width: 170 , sortable : true, align: 'left'},
	 	{display: 'tipo Derecho', name : 'tipo', width: 170 , sortable : true, align: 'left'},

		      
		   ], 
        searchitems : [ {display: 'Name', name : 'name', isdefault: true} ],
				
        sortname: "name", 
        sortorder: "asc", 
        usepager: true, 
        title: 'Información vencimiento de Derechos De Peticion', 
		onSuccess:function()
		{
			console.log("todo funciono");
            },
        useRp: true, 
        rp: 5, 
        showTableToggleBtn: false, 
        width: 1300, 
        //onSubmit: addFormData, 
        height: 250 
}); 
});



</script>

    <br>
    <br>
    <div align="left">

	 <input type="button" value="Volver al inicio" onclick="history.back(-1)" class='boton' />
  </div>
	<footer>
    <p align="center"> Pertinente Creativa Integradora</p>
  </footer>
</body>
</html>
