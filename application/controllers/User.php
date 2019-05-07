<?php


class User extends CI_Controller
{

	function __construct(){

		parent::__construct();

		//cargamos el módelo y hacemos comunicación con él
		$this->load->model('Model_User');
	}
	
	public function index(){

        // escribimos la ruta donde se encuentra la vista
		$data['contenido']="users/index";

        /*cargamos los datos retornados de la consulta  del Model_User 
        de la función selectPerfil*/
        $data['selectPerfil']=$this->Model_User->selectPerfil();

		 /* cargamos los datos retornados de la consulta  del Model_User 
		 de la función selectUser*/
		 $data['selectUser']=$this->Model_User->selectUser();


        //le pasamos a la plantilla la vista que va ir dentro del contenido
		 $this->load->view("template",$data);


		}

		public function insert(){

			$datos=$this->input->post();

			if (isset($datos)) {
				$perfil=$datos['perfil'];	
				$nombre= $datos['nombre'];	
				$apellido= $datos['apellido'];	
				$correo= $datos['correo'];	
				$telefono= $datos['telefono'];	

			//envia los datos a la función que registra el usuario
				$this->Model_User->insertUser($perfil,$nombre,$apellido,$correo,$telefono);
				redirect();
			}

		}

		public function delete($id=null){

			if ($id != null) {

				$this->Model_User->deleteUser($id);
				redirect();
			}
		}

		public function edit($id=null){

			if ($id != null) {
			 // escribimos la ruta donde se encuentra la vista
				$data['contenido']="users/edit";

              // lista de perfiles
				$data['selectPerfil']=$this->Model_User->selectPerfil();

		        /*cargamos los datos retornados de la consulta  del Model_User 
		        de la función selectPerfil*/
		        $data['datosUser']= $this->Model_User->editUser($id);

		        //le pasamos a la plantilla la vista que va ir dentro del contenido
	        	 $this->load->view("template",$data);
		       
		    }else{
		    	redirect();
		    }
		}

		public function update(){

			$datos=$this->input->post();

			if (isset($datos)) {
				$id=$datos['id'];	
				$perfil=$datos['perfil'];	
				$nombre= $datos['nombre'];	
				$apellido= $datos['apellido'];	
				$correo= $datos['correo'];	
				$telefono= $datos['telefono'];	

			//envia los datos a la función que registra el usuario
				$this->Model_User->updateUser($id,$perfil,$nombre,$apellido,$correo,$telefono);
				redirect();
			}
		}
	}