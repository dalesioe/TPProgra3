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

			window.location.href="estacionamiento.php";
		}else{
			alert(respuesta);
			alert("Error de usuario o contraseña");
		}

	});
}
function Desloguear()
{
	var sesion="";
	$.post("validar.php",sesion,function(rta)
	{
		if (rta=="ok") {
			window.location.href="index.html";
		}
		else
		{
			alert(rta);
		}
	})
}
function MostrarUsuarios()
{
	var mostrar ="";
	var datos={"mostrar":mostrar};
	$.post("validar.php",datos,function(respuesta){
		
		$("#tablauser").html(respuesta);

	});
}
function Ocultar()
{
	$("#tablauser").html("");
}
function MostrarModalAlta()
{
	$("#modalAlta").modal("show");
}