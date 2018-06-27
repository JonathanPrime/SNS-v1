<?php
	class MvcController{
		
		public function plantilla(){
			include('views/plantilla.php');
		}

		public function enlacesPaginasController(){
			if (isset($_GET["action"])){
	
				$enlaces=$_GET["action"];
			
			}else{

				$enlaces="index";

			}
			$respuesta= EnlacesPaginas::enlacesPaginasModel($enlaces);	
			echo'<br><br><br>';
			include $respuesta;
		}

		//registro
		//******************************************
		public function registroUsuarioController(){

			if(isset($_POST["pn"])){
				$datosController = array( 'pn' =>$_POST["pn"],
							'sn'=>$_POST["sn"],
							'pa' =>$_POST["pa"],
							'sa'=>$_POST["sa"],
							'nd'=>$_POST["nd"],
							'tidoc'=>$_POST["tidoc"],
							'correo'=>$_POST["correo"],
							'contra'=>$_POST["contra"],
							'rol'=>"visitante");
				$respuesta = Datos :: registroUsuarioModel($datosController,"registro");

				if ( $respuesta=="success"){

					header("location:index.php?action=ok");

				}else{
					header("location:index.php");
				}
			}//if
			
		}//registroUsuarioController

	}//clase

?>	