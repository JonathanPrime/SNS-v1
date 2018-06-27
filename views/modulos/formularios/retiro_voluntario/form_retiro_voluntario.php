<div id="main">
    <div class="container">
    	<br>
        <h3 class="">Retiros voluntarios</h3>
        	<br>
        	<form name="form1" method="post" action="regusuario.php">
        		<div class="form-group">
	      			<label for="usr">Documento del aprendiz</label>
	      			<input type="text" class="form-control" name="documentos" autocomplete="off" required>
	      			<label for="usr">Tipo de documento</label>
                    <label>Tipo de Documento</label>
                      <select class="form-control" name="tidoc">
                        <option>Cédula de Ciudadania</option>
                        <option>Tarjeta de Identidad</option>
                        <option>Cédula de Extranjeria</option>
                        <option>Pasaporte</option>
                      </select>
	      			<label for="usr">Fecha de retiro</label>
	      			<input type="date" class="form-control" name="fecha" autocomplete="off" required>
	      			<label for="usr">Motivo</label>
	      			<textarea class="form-control" name="motivo" autocomplete="off">
                    </textarea>
	      			<label for="usr">Respuesta</label>
	      			<select class="form-control" name="respuesta">
                <option>Aceptar</option>
                <option>Rechazar</option>
              </select>
	   			</div>
	   			<center><button type="button" class="btn btn-info">Registrar</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br><br><br><br>