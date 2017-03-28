<?php
	
		$Nombre = $_POST['Nombre'];
		$Email= $_POST['Email'];
		$Asunto= $_POST['Asunto'];
		$Mensaje= $_POST['Mensaje'];
		
		if ($Nombre == "" || $Email == "" || $Asunto == "" ||$Mensaje == "") {


			echo '<script language="javascript">alert("Es necesario que cubra todos los datos para tramitar este formulario");</script>'.'<script language="javascript">window.location="Contacto.html"</script>';
			

			

		
		}else{

			echo $para = 'maria_figueroa_ed@hotmail.es'.'<br \> '.$titulo = $_POST['Asunto'].'<br \>  '.$mensaje = $_POST['Asunto'].'<br \>  '. $cabeceras = $_POST['Email'];
		

			$para = 'maria_figueroa_ed@hotmail.es';
			$titulo = $_POST['Asunto'];
			$mensaje = $_POST['Asunto']; 
			$cabeceras = $_POST['Mensaje'];

			
			@mail($para, $titulo, $mensaje, $cabeceras);

  			 
		}

?>