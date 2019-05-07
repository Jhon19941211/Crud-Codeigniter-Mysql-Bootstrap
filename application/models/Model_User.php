<?php 


class Model_User extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

        // Para que cargue la base de datos
		$this->load->database();
	}




    /**
    *Función que se encarga de listar los perfiles 
    */
	public function selectPerfil(){

        //hacemos la consulta a la base de datos y sacamos los resultados
		$query= $this->db->query("select * from perfil");
		return $query->result();
	}
    
    /**
    *Función que se encarga de registrar un usuario en la 
    * base de datos
    */
	public function insertUser($perfil,$nombre,$apellido,$correo,$telefono){

        $datos=array(
        	'perfil_id'=>$perfil,
        	'nombre'=>$nombre,
        	'apellido'=>$apellido,
        	'correo'=>$correo,
        	'telefono'=>$telefono

        );
        
        $this->db->insert('usuario',$datos);

	}

	/**
    *Función que se encarga de listar usuarios
    */
	public function selectUser(){

        //hacemos la consulta a la base de datos y sacamos los resultados
		$query= $this->db->query("SELECT * FROM usuario u INNER JOIN perfil p ON u.perfil_id = p.id_per ");
		return $query->result();
	}
    
    /**
    *Función que se encarga de eliminar un usuario
    */
	public function deleteUser($id){

        //hacemos la consulta a la base de datos y sacamos los resultados
		 $this->db->where('id', $id);
		 $this->db->delete('usuario');
	
	}

	/**
    *Función que se encarga de retonar datos de  un usuario
    */
	public function editUser($id){

      
		$query= $this->db->query("SELECT * FROM usuario u INNER JOIN perfil p ON u.perfil_id = p.id_per WHERE u.id = $id");

		return $query->result();
	
	}

	/**
    *Función que se encarga de retonar datos de  un usuario
    */
	public function updateUser($id,$perfil,$nombre,$apellido,$correo,$telefono){

      
		  $datos=array(
        	'perfil_id'=>$perfil,
        	'nombre'=>$nombre,
        	'apellido'=>$apellido,
        	'correo'=>$correo,
        	'telefono'=>$telefono

        );
        
        $this->db->where('id',$id);
         $this->db->update('usuario',$datos);
	
	}


}