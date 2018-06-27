<div id="main">
    <div class="container">
    	<br>
        <h3 class="">Registro del aprendiz</h3>
        	<br>
        	<form name="form1" method="post" action="regusuario.php">
        		<div class="form-group">
	      			<label for="usr">Primer nombre</label>
	      			<input type="text" class="form-control" name="pn" autocomplete="off" required>
              <label for="usr">Segundo nombre</label>
              <input type="text" class="form-control" name="sn" autocomplete="off" required>
              <label for="usr">Primer apellido</label>
              <input type="text" class="form-control" name="pa" autocomplete="off" required>
              <label for="usr">Segundo apellido</label>
              <input type="text" class="form-control" name="sa" autocomplete="off" required>
              <label for="usr">Documento</label>
              <input type="text" class="form-control" name="nd" autocomplete="off" required>
	      			<label for="usr">Tipo de documento</label>
            <label>Tipo de Documento</label>
              <select class="form-control" name="tidoc">
                <option>Cédula de Ciudadania</option>
                <option>Tarjeta de Identidad</option>
                <option>Cédula de Extranjeria</option>
                <option>Pasaporte</option>
              </select>
	      			<label for="usr">Direcci&oacute;n</label>
	      			<input type="text" class="form-control" name="direccion" autocomplete="off" required>
          <label for="usr">Correo</label>
              <input type="email" class="form-control" name="correo" autocomplete="off" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="ejemplo@mail.com" required>
	      			<label for="usr">Tel&eacute;fono</label>
	      			<input type="text" class="form-control" name="telefono" autocomplete="off">
	      			<label for="usr">Ficha</label>
	      			<input type="text" class="form-control" name="ficha">
              <label for="usr">Sede</label>
              <input type="text" class="form-control" name="ficha">
              <label for="usr">Modalidad</label>
              <select class="form-control" name="Modalidad" >
                    <option>Presencial</option>
                    <option>Virtual</option>
                    <option>Mixta</option>
              </select>
              <label for="usr">Jornada</label>
              <select class="form-control" name="Jornada">
                    <option>-- ninguna--</option>
                    <option>Diurna</option>
                    <option>Nocturna</option>
                    <option>Madrugada</option>
              </select>
              <label for="usr">Tipo de formaci&oacute;n</label>
              <select class="form-control" name="Tipo_Formacion">
                    <option>Tecnico</option>
                    <option value="Tecnologo">Tecnólogo</option>
                    <option>Especialización</option>
              </select>
	   			</div>
	   			<center><button type="button" class="btn btn-info">Registrar</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br><br><br><br>