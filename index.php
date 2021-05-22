<html>
<head>

<script type="text/javascript">
	
	function validar(){

		var copia = document.getElementById("txtcopia").value;
		var captcha = document.getElementById("captcha").value;
				
		if(copia == captcha){
			window.open("http://www.google.com.pe");
		}else{
			alert("El codigo Ingresado no coincide");
		}
	}

</script>

<style type="text/css">



h1{
	color: #FFF;
}

strong{
	color: #FFF;
}

.fondo{
	background-color: rgba(158, 25, 58, 0.3);
}	

.captcha{
	border-radius: 5px;
	font-size: 20px;
	text-transform: uppercase;
	height: 45px;
	border-color: #000000;
	text-align: center;

}	

.boton{
	border-radius: 10px;
	font-size: 15px;
	text-transform: uppercase;
	height: 45px;
	color: #FFF;
	background-color: #548624;	
	text-align: center;
	width: 150px;
}

</style>

</head>
<body class="fondo" >

<center>
<span> <h1>SIMULADOR DE CAPTCHA</h1></span>
<br><br>
	<table>
	<tr>
		<td>
			<strong>Nombre: </strong>
		</td>
		<td>
			<input type="text" name="txtnom" id="txtnom">
		</td>
	</tr>
	<tr>
		<td>
			<strong>Apellido: </strong>
		</td>
		<td>
			<input type="text" name="txtape" id="txtape">
		</td>
	</tr>	

	<tr>
		<td>
			<input type="text" name="txtcopia" id="txtcopia" size="10">
		</td>
		<td>
			<input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
		</td>
	</tr>		
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" >
			<input type="button" name="entrar" id="entrar" value="SIGUIENTE" class="boton" onclick="validar();">
		</td>
	</tr>
	</table>
</center>

<?php
		function codigo_captcha(){
				$k="";
				$paramentros="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$maximo=strlen($paramentros)-1;
				for($i=0; $i<5; $i++){
					$k.=$paramentros{mt_rand(0,$maximo)};
				}
				return $k;
		}
?>

</body>
</html>