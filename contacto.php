<?php

/*
$nombre = $_POST['c_name'];
$email = $_POST['c_mail'];
$mensaje = $_POST['c_message'];
$para = "cristian.avila.j@gmail.com";
$titulo = "Contacto";
$header = "From: " . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

//if ($_POST['submit']) {
	if (mail($para, $titulo, $msjCorreo, $header)) 
	{
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://localhost:8080/infusion/index.html';
		</script>";
	} 
	else
	{
		echo "Falló el envio";
	}
//}

*/

if(isset($_POST['c_email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "localhost@locahost.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['c_name']) ||
!isset($_POST['c_mail']) ||
!isset($_POST['c_message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['c_name'] . "\n";
$email_message .= "E-mail: " . $_POST['c_mail'] . "\n";
$email_message .= "Comentarios: " . $_POST['c_message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}


?>