

<form method="POST" action="<?php echo base_url('index.php/User/update') ?>">
	<div class="form-group">
		<label for="perfil">Perfil:</label>

		<input   type="hidden" class="form-control" value="<?php echo $datosUser[0]->id ?>" id="id" name="id" >

		<select class="form-control" id="perfil" name="perfil">
			<?php foreach($selectPerfil as $value){ ?>
				<?php if ($value->id_per==$datosUser[0]->perfil_id){ ?>
					<option selected="true" value="<?php echo $value->id_per; ?>"><?php echo $value->perfil;  ?></option>
				<?php } else { ?>

					<option value="<?php echo $value->id_per; ?>"><?php echo $value->perfil;  ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div> 	
	<div class="form-group">
		<label for="nombre">Nombres:</label>
		<input   type="text" class="form-control" value="<?php echo $datosUser[0]->nombre ?>" id="nombre" name="nombre" >
	</div>
	<div class="form-group">
		<label for="apellido">Apellidos:</label>
		<input type="text" class="form-control" value="<?php echo $datosUser[0]->apellido ?>" id="apellido" name="apellido">
	</div> 	
	<div class="form-group">
		<label for="correo">Correo electrónico</label>
		<input type="email" class="form-control" value="<?php echo $datosUser[0]->correo ?>" id="correo" name="correo" aria-describedby="emailHelp">
	</div> 		
	<div class="form-group">
		<label for="telefono">Teléfono</label>
		<input type="text" class="form-control" value="<?php echo $datosUser[0]->telefono ?>" id="telefono" name="telefono" >
	</div> 		
	<button type="submit" class="btn btn-success">Editar usuario</button>
</form>

