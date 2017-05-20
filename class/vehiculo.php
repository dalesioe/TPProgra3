<?php 
/**
* 
*/
class Vehiculo
{
	private $patente;
	private $marca;
	private $id_lugar;
	private $hora_entrada;
	
	function __construct($pat,$marca,$lugar,$hora)
	{
		$this->patente=$pat;
		$this->marca=$marca;
		$this->id_lugar= $lugar;
		$this->hora_entrada=$hora;
	}

	public static function GetPatente()
	{
		return $this->patente;
	}
	public static function GetMarca()
	{
		return $this->marca;
	}
	public static function GetLugar()
	{
		return $this->id_lugar;
	}
	public static function GetHoraEntrada()
	{
		return $this->hora_entrada;
	}

}
 ?>