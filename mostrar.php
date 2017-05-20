<?php
include_once "Clases.php";
include_once "administracion.php";

$archivo = fopen("empleados.txt", "r");
$i=1;
while (!feof($archivo))
{
		$arch = fgets($archivo);
		$array = explode("-", $arch);
		if ($array[0]==NULL)
		{
			break;
		}else
		{
		$empleado = new Empleado ($array[0],$array[1],$array[2],$array[3],$array[4],$array[5]);
		echo "Empleado ".$i."<br>";
		echo $empleado->ToString()."<br>";
		$i+=1;
		}
}
fclose($archivo);

?>