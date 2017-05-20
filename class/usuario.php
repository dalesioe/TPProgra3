<?php 

session_start();
/**
* 
*/
class Usuario
{
	private $id;
	private $nombre;
	private $password;
	private $turno;
	private $ape;
	private $admin;
	
	
	function __construct($id,$nomb,$pass,$ape,$turno,$admin)
	{
		$this->nombre=$nomb;
		$this->password= $pass;
		$this->id=$id;
		$this->ape=$ape;
		$this->turno=$turno;
		$this->admin=$admin;		
	}

	public function GetUsuario()
	{
		return $this->id;
	}
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetPass()
	{
		return $this->password;
	}
	public function GetTurno()
	{
		return $this->turno;
	}
	public function GetApellido()
	{
		return $this->ape;
	}
	public function GetAdmin()
	{
		return $this->admin;
	}
	
	public function TraerTodosLosUsuariosDB()
		{
			$ListaUsuarios = array();
			$pdo = new PDO("mysql:host = localhost; dbname=estacionamiento","root","");
			$contenido = $pdo->query("SELECT * FROM usuario");
			while($linea = $contenido->fetch(PDO::FETCH_ASSOC))
			{
				$unCliente = new Usuario($linea["id"],$linea["nombre"],$linea["password"],$linea["apellido"],$linea["turno"],$linea["admin"]);
				array_push($ListaUsuarios, $unCliente);
			}		
				
			
			return $ListaUsuarios;
		}
	

}
 ?>