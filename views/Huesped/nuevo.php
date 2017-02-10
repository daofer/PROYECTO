<form class="form-horizontal" id="formulario" onsubmit="return guardar()">
	<input type="hidden" name="id" id="id">
	<div class="form-group">
		<label class="col-lg-1 control-label">Tipo_Doc.</label>
		<div class="col-lg-2">
			<select class="form-control" name="tipo_documento" id="tipo_documento" required="true">
				<option value="">Seleccione</option>
				<?php 
					foreach ($tipos as $value) { ?>
						<option value="<?php echo $value["td_id"]; ?>"> 
							<?php echo $value["td_descripcion"]; ?> 
						</option>
					<?php }
				?>
			</select>
		</div>
		<label class="col-lg-1 control-label">Documento</label>
		<div class="col-lg-2">
			<div class="iconic-input">
				<i class="fa fa-bookmark-o"></i>
				<input type="text" class="form-control" name="dni" id="dni" maxlength="8" minlength="8" required onkeypress="return numeric(event)" onkeyup="buscarcliente()" placeholder="Nro Doc.">
			</div>
		</div>
		<label class="col-lg-2 control-label">Nombres completos</label>
		<div class="col-lg-4">
			<input type="text" class="form-control" name="nombres" id="nombres" required maxlength="40" onkeypress="return letter(event)">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-1 control-label"></label>
		<label class="col-lg-1 control-label">Celular</label>
		<div class="col-lg-2">
			<div class="iconic-input">
				<i class="fa fa-mobile"></i>
				<input type="text" class="form-control" name="celular" id="celular" maxlength="10" onkeypress="return numeric(event)">
			</div>
		</div>
		<label class="col-lg-2 control-label">Direccion huesped</label>
		<div class="col-lg-4">
			<div class="iconic-input">
				<i class="fa fa-map-marker"></i>
				<input type="text" class="form-control" name="direccion" id="direccion" maxlength="100" required>
			</div>
		</div>
	</div>
	<div class="form-group">
		<center>
			<button class="btn btn-danger" type="button" onclick="listado()">Cerrar</button>
			<button class="btn btn-success" type="submit" id="botonguardar">Guardar</button>
		</center>
	</div>
</form>