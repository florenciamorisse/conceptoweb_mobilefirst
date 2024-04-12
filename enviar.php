<?php 
$var=

	$nombre = $_POST['name'];
    $telefono = $_POST['phone'];
	$email = $_POST['email'];
	$mensaje = $_POST['message'];

	$destinatario= "contactoconceptoweb@gmail.com";
	$asunto = 'Envío desde la web';
	$cuerpo= '
		<html>
			<head>
				<title> Prueba de envío de correo</title>
			</head>
			<body>
				<h1>Solicitud de contacto desde correo de prueba</h1>
				<p>
				Nombre: '.$nombre .' <br>
				Teléfono: '.$telefono .' <br>
				Email: '.$email.' <br>
				Mensaje: '.$mensaje .' <br>
				</p>
			</body>
		</html>
	';

	//para envío formulario html

	$headers = "MIME-vERSION:1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	//direccióndel remitente

	$headers .= "FROM: $nombre <$email>\r\n";
	mail( $destinatario , $asunto, $cuerpo, $headers);

	echo "Correo enviado";

	// echo "<h2> Información recibida desede PHP</h2>";
	// echo "Nombre:".$nombre."<br/>";
	
 

	// $formcontent="
	// 	Nombre: $nombre \n
	// 	Correo electrónico: $email \n
	// 	Teléfono: $telefono \n
	// 	Mensaje: $mensaje
	// ";
	// $recipient= "florenciamorisse@gmail.com, contactoconceptoweb@gmail.com ";

	// $subject= "Consulta vía web de $nombre";

	
	// mail($recipient, $subject, $formcontent, $header) or die("Error!");
	// header("Location: index.html");


	
?>

