		<?php

$IP = $_POST['id_ip'];
$CP = $_POST['CP'];
$cc = $_POST['ID_CC'];
$tipo = $_POST['ID_TIPO'];
$estadocobranza = $_POST['ID_EO_COB'];
$nrocot = $_POST['nrocot'];
$fechaip = $_POST['fechaip'];
$valorip = $_POST['vip'];
//$valorfact = $_POST['vfact'];
//$nfasoc = $_POST['nfasoc'];
$observaciones = $_POST['obs'];





		require("bd.php");
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}
			//Validar que exista la base de datos
			mysqli_select_db($conexion, $base_datos) or die("No se encuentra la base de datos.");
			mysqli_set_charset($conexion, "utf8");
		
        $consulta = "UPDATE INFORME_DE_PAGO set ID_IP='".$IP."', CP='".$CP."', ID_CCosto='".$cc."', ID_TIPO='".$tipo."', ID_EO_COB='".$estadocobranza."', NRO_COTI='$nrocot', FECHAENVIOIP='$fechaip', VALOR_IP='".$valorip."', OBSERVACIONES='$observaciones'  WHERE ID_IP=".$IP;
		/*	$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"sssss",$nip,$fip,$ncoti,$vip,$id_ip,$observaciones);
			$ok=mysqli_stmt_execute($resultado);*/


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/



/*
if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadoip.php');
            
            
        }
*/
        $resultado = mysqli_query($conexion, $consulta);		

		if(!$resultado){  		

			echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
			//echo 'MySQL Error: favor reportar al administrador del sistema<br>';  

			exit;  

		}  else {
			 header('Location: listadoInformePago.php');
		}

		
		mysqli_close($conexion);
		
		
		?>