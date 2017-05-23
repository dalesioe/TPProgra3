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
	
	public static function TraerTodosLosUsuariosDB()
		{
			$ListaUsuarios = array();
			$pdo = new PDO("mysql:host = localhost; dbname=estacionamiento","root","");
			$contenido = $pdo->query("SELECT * FROM usuario");
			while($linea = $contenido->fetch(PDO::FETCH_ASSOC))
			{
				if ($linea["suspendido"]==false)
				{
				$unCliente = new Usuario($linea["id"],$linea["nombre"],$linea["password"],$linea["apellido"],$linea["turno"],$linea["admin"]);
				array_push($ListaUsuarios, $unCliente);
				}
			}		
				
			
			return $ListaUsuarios;
		}
	
	public static function MostrarUsuariosDB()
	{
		$rta="";
		$ArrayDeUsuarios = Usuario::TraerTodosLosUsuariosDB();
		
		$inicio = "<table class='table' border='1'>
					<thead>
						<tr>
							<th>  NOMBRE </th>
							<th>  APELLIDO  </th>
							<th>  TURNO       </th>
							<th>  ACCIONES     </th>
						</tr> 
					</thead>";
			$datos="";
				foreach ($ArrayDeUsuarios as $cont)
				{
					$nombre = $cont->GetNombre();
					$ape = $cont->GetApellido();
					$turno = $cont->GetTurno();
					$id= $cont->GetUsuario();
					$datos.= " 	<tr>
								<td>".$cont->GetNombre()."</td>
								<td>".$cont->GetApellido()."</td>
								<td>".$cont->GetTurno()."</td>
					
								<td>
									<button type='button' class='btn btn-warning btn-sm' data-toggle='modal' onclick='ModificarUser(\"".$nombre."\",\"".$ape."\",\"".$turno."\")'>Modificar</button>
									<button type='button' class='btn btn-danger btn-sm'  onclick='EliminarUser(\"".$id."\")'>Dar de Baja</button>
									<button type='button' class='btn btn-danger btn-sm'  onclick='SuspenderUser(\"".$id."\")'>Suspender</button>
								</td>
							</tr>";
				}
			$fin="</table>
			<input type='button' class='btn btn-primary btn-sm' value = 'Ocultar' onclick='Ocultar()' id='ocultar'>";
			$rta.= $inicio.$datos.$fin;
			return $rta;
	}

	
}
 ?>