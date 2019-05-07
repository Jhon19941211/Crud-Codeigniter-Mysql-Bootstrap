

<h1>CRUD CODEIGNITER 3</h1>

<!-- inicio tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="listar-tab" data-toggle="tab" href="#listar" role="tab" aria-controls="listar" aria-selected="true">Consulta</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="registro-tab" data-toggle="tab" href="#registro" role="tab" aria-controls="registro" aria-selected="false">Registro</a>
	</li>
</ul>
<!-- fin tabs -->

<!-- inicio del contenido de los tabs -->
<div class="tab-content" id="myTabContent">

	<!-- Inicio para el tab de consulta -->
	<div class="tab-pane fade show active" id="listar" role="tabpanel" aria-labelledby="listar-tab">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Perfil</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Correo Electrónico</th>
					<th scope="col">Teléfono</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($selectUser as $value){ ?>
					<tr>
						<th><i><?php echo $value->perfil; ?></i></th>
						<td><?php echo $value->nombre; ?></td>
						<td><?php echo $value->apellido; ?></td>
						<td><?php echo $value->correo; ?></td>
						<td><?php echo $value->telefono; ?></td>
						<td>
							<a type="button" class="btn btn-danger"  href="<?php echo base_url("index.php/User/delete/$value->id")?>">Eliminar</a>

							<a type="button" class="btn btn-success"  href="<?php echo base_url("index.php/User/edit/$value->id")?>">Actualizar</a>


						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<!-- Fin para el tab de consulta -->


	<!-- Inicio para el tab de registro -->
	<div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="registro-tab">
		<form method="POST" action="<?php echo base_url('index.php/User/insert') ?>">
			<div class="form-group">
				<label for="perfil">Perfil:</label>
				<select class="form-control" id="perfil" name="perfil">
					<?php foreach($selectPerfil as $value){ ?>
						<option value="<?php echo $value->id_per; ?>"><?php echo $value->perfil;  ?></option>
					<?php } ?>
				</select>
			</div> 	
			<div class="form-group">
				<label for="nombre">Nombres:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite sus nombres">
			</div>
			<div class="form-group">
				<label for="apellido">Apellidos:</label>
				<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Digite sus apellidos">
			</div> 	
			<div class="form-group">
				<label for="correo">Correo electrónico</label>
				<input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Digite su correo electrónico">
			</div> 		
			<div class="form-group">
				<label for="telefono">Teléfono</label>
				<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Digite su telefono">
			</div> 		
			<button type="submit" class="btn btn-primary">Registrar usuario</button>
		</form>
		<!-- Fin para el tab de registro -->
	</div>

</div>
<!-- fin del contenido de los tabs -->

