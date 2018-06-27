<?php

class EnlacesPaginas{

	public static function enlacesPaginasModel($enlaces){
		if($enlaces=="registros/registro_usuario"||$enlaces=="aplazamiento/form_aplazamiento"||$enlaces=="desercion/form_desercion"||$enlaces=="reintegro/form_reintegro"||$enlaces=="retiro_voluntario/form_retiro_voluntario"||$enlaces=="traslado/form_traslado"||$enlaces=="registro_aprendiz/form_registro_aprendiz"||$enlaces=="cambio_jornada/form_cambio_jornada"){
			$modulo="views/modulos/formularios/".$enlaces.".php";
		} 
		else if($enlaces=="index"){
			$modulo="views/modulos/cuerpo/slider.php";
		}else if($enlaces=="ok") {
			$modulo="views/modulos/cuerpo/ok.php";
		}
		else if($enlaces=="perfil") {
			$modulo="views/modulos/cuerpo/perfil.php";
		}
		else if($enlaces=="perfil_instructor") {
			$modulo="views/modulos/cuerpo/perfil_instructor.php";
		}
		else if($enlaces=="perfil_apoyo_admin") {
			$modulo="views/modulos/cuerpo/perfil_apoyo_admin.php";
		}
		else{
			$modulo="views/modulos/cuerpo/slider.php";
		}
		return $modulo;
	}

}

?>