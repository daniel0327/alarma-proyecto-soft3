<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SisteAlarmas</title>
	<style type='text/css'>
		body
		{
			font-family: Arial;
			font-size: 14px;
			background-color: #eee;
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

		a
		{
		    color: blue;
		    text-decoration: none;
		    font-size: 14px;
		}
		a:hover
		{
			text-decoration: underline;
		}
		#container{
			width: 50%;
		    margin: 0 auto;
		    margin-top: 50px;
		    border: 1px solid #ccc;
		    padding: 10px;
		    background: #ddd;
		    text-align: center;
		}
		.dropdown-menu{
			left: 50% !important;
			right: auto !important;
			  text-align: center !important;
			  transform: translate(-50%, 0) !important;
		}
		#logo{
			display: block;
		    margin: 15px auto;
		    height: 165px;
		    padding-top: 10px;
		    padding-bottom: 10px;
			}
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
</head>


<body BGCOLOR="#D8D8D8">

	<header>
		<img src="assets/images/uniquindio.PNG" id="logo">
	</header>

		
	<div id="container">       
		<h1>Sistema de trazabilidad para derechos de peticion y tutelas UQ</h1>
	    <div>
	    	
	    	<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Elige una opcion
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li>				<a href="Tutelas">TUTELAS</a>
			    </li>
			    <li>	    		<a href="DerechoPeticion">DERECHOS DE PETICIÓN</a>
			    </li>
			    <li>	    		<a href="reportes">REPORTES TUTELAS</a>
			    </li>
			     <li>	    		<a href="reportesP">REPORTES PETICIÓN</a>
			    </li>
				 <li>	    		<a href="graficos">ESTADISTICAS</a>
				  </li>
				 
			  </ul>
			</div>
			
	    </div>

	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br />
		<div align="">
		  <form name="form1" action="inicio"  >
		    <input type="submit" value="Salir" class="boton">
		  </form>
		</div>
<footer>
	<p align="center"> Pertinente Creativa Integradora</p>
</footer>
</body>
</html>