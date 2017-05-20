function AsignarAdmin() {
	$("#user").val("admin");
	$("#password").val("admin");
}
function AsignarManana() {
	$("#user").val("manana");
	$("#password").val("123");
}
function AsignarTarde() {
	$("#user").val("tarde");
	$("#password").val("123");
}
function AsignarNoche() {
	$("#user").val("noche");
	$("#password").val("123");
}

function EnviarDatos()
{

	var usuario = $("#user").val();
	var password = $("#password").val();
	var datosLogin={"usuario":usuario, "password":password};

	$.post("validar.php",datosLogin,function(respuesta)	{

		if(respuesta=="si")
		{

			window.location.href="class/estacionamiento.php";
		}else{
			alert("Error en el usuario o contraseña");
		}

	});
}