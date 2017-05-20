<?php 
include_once("class/usuario.php");
if (isset($_POST["usuario"])&&isset($_POST["password"]))
{
	$rta = "no";
	$arrayUsuarios= Usuario::TraerTodosLosUsuariosDB();
	foreach ($arrayUsuarios as $itm) {
		if ($itm->GetNombre()==$_POST["usuario"]&& $itm->GetPass()==$_POST["password"]) {
			$rta= "si";
			$_SESSION["usuario"]=$itm->GetNombre();
			$_SESSION["admin"]=$itm->GetAdmin();
			
			setcookie("usuario", $_SESSION['usuario'],time()+3000,"/");
			break;
		}
	}
	echo $rta;
}
 ?>