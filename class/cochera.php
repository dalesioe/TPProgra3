<?php 
/**
* 
*/
class Cochera
{
	private $id_cochera;
	private $id_piso;
	private $discapacitados;
	private $ocupado;
	
	function __construct($coch,$piso,$disc,$ocu)
	{
		$this->id_cochera=$coch;
		$this->id_piso=$piso;
		$this->discapacitados= $disc;
		$this->ocupado=$ocu;
	}

	public static function GetCochera()
	{
		return $this->id_cochera;
	}
	public static function GetPiso()
	{
		return $this->id_piso;
	}
	public static function GetDiscapa()
	{
		return $this->discapacitados;
	}
	public static function GetOcupado()
	{
		return $this->ocupado;
	}

}
 ?>