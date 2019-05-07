<!DOCTYPE html>
<html lang="es">

   <!-- Encabezado -->
	<head>

		<!-- titulo -->
		<title>CRUD CODEIGNITER 3</title>

		<!-- referencias-->

		<!-- base_url nos trae la ruta hasta el directorio del proyecto -->
		<link rel="stylesheet"  href="<?php echo base_url('public/css/bootstrap.css')  ?>"> 
		<script src="<?php echo base_url('public/js/jquery.min.js')  ?>"></script>      
		<script src="<?php echo base_url('public/js/bootstrap.js')  ?>"></script>



	</head>

	<!-- cuerpo html -->
	<body>
         

		<header>
			
		</header>

		<div id="container">
			<!-- va el contenido de las vistas -->
            
            <div class="col-md-10">
            	
				<?php 
	                 $this->load->view($contenido);

				 ?>
			</div>
		</div>

		<!-- footer -->
		<footer>
			
		</footer>

	</body>


</html>