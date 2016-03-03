<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Reporte tutelas</title>

    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://localhost/alarma/application/views/reportes/flexigrid.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/alarma/application/views/reportes/flexigrid.css">


</head>
<body  BGCOLOR="#D8D8D8">



	<div >
		
		<br>
			

	<center><h2>REPORTE DE TUTELAS</h2></center>

    
	</div>
  
<div align="left">
  <br>  
<table width="350" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A"> 
<tr> 
   <td><font color="#FFFFFF" face="arial, verdana, helvetica"> 
<b>Estados de la tutela</b> 
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

<div><h3>Tabla De Verificacion de Vencimientos </h3></div>


<div id="flex1" style=""></div> 






<script>

 



jQuery(document).ready(function() 
{
	
var issueListingGrid = null;
       jQuery("#flex1").flexigrid({
		 url: 'http://localhost/alarma/reportes/load', dataType: 'json', colModel : 
	   [
	   {display: 'Radicado Interno', name : 'radicadoInterno',width: 180 , sortable : true, align: 'left'},
	    {display: 'Asunto', name : 'asunto',width: 160 , sortable : true, align: 'left'},
       {display: 'Solicitante', name : 'Solicitante',width: 200 , sortable : true, align: 'left'}, 
       {display: 'Responsable', name : 'Responsable',width: 200 , sortable : true, align: 'left'},
	   {display: 'Fecha Inicio ', name : 'fechaRecibido',width: 170 , sortable : true, align: 'left'},
	   {display: 'Fecha Vencimiento', name : 'fechaVencimiento', width: 170 , sortable : true, align: 'left'},
	 	

		      
		   ], 
        searchitems : [ {display: 'Name', name : 'name', isdefault: true} ],
				
        sortname: "name", 
        sortorder: "asc", 
        usepager: true, 
        title: 'Información vencimiento de tutelas', 
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

	 <input type="button" value="Volver al inicio" onclick="history.back(-1)" />
  </div>
	
</body>
</html>
