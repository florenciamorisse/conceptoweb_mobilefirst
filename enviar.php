<?php 
$var=

	$nombre = $_POST['name'];
    $telefono = $_POST['phone'];
	$email = $_POST['email'];
	$mensaje = $_POST['message'];

	echo "<h2> Información recibida desede PHP</h2>";
	echo "Nombre:".$nombre."<br/>";
	
	// $asunto = 'Formulario Rellenado';

	// $formcontent="
	// 	Nombre: $nombre \n
	// 	Correo electrónico: $email \n
	// 	Teléfono: $telefono \n
	// 	Mensaje: $mensaje
	// ";
	// $recipient= "florenciamorisse@gmail.com, contactoconceptoweb@gmail.com ";

	// $subject= "Consulta vía web de $nombre";

	// $header = "From: $email \r\n";
	// $header .= "Content-Type: text/plain; charset=UTF-8";
	// mail($recipient, $subject, $formcontent, $header) or die("Error!");
	// header("Location: index.html");


	
?>

