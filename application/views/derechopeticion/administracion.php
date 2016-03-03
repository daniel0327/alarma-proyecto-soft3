<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Administracion de derechos de peticion</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<h1>Administración de Derechos de peticion</h1>
    <div>
		<?php echo $output; ?>
			
				 
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
</style>
<div align="">
  <form name="form1" action="http://localhost/alarma/tecnico"  >
    <input type="submit" value="MENU PRINCIPAL" class="boton">
  </form>
</div>
		 

    </div>
		
	
		
		
		
    </div>
</body>
</html>
