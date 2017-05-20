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
			$_SESSION["id"]=$itm->GetUsuario();
			$_SESSION["pass"]=$itm->GetPass();
			$_SESSION["apellido"]=$itm->GetApellido();
			$_SESSION["turno"]=$itm->GetTurno();
			setcookie("admin", $_SESSION['admin'],time()+3000,"/");
			break;
		}
	}
	echo $rta;
}
 ?>