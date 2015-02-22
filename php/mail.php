<?php 

$empresa=$_POST['nombre-de-la-empresa'];

$contacto=$_POST['persona-de-contacto'];

$ciudad=$_POST['ciudad-de-contacto'];

$email=$_POST['email-de-contacto'];

$telefono=$_POST['tel%c3%a9fono-de-contacto'];

$mensaje=$_POST['comentario'];

	

// LO QUE HIZO MILENA

$cabeceras = "MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: "."De: MENSAJE ENVIADO DESDE HOSTING <".$email.">\r\n";

	$dest="luiscarlosbar01@gmail.com,oscar.valderrama@rentacold.com,oscar.valderrama@medicalcard.com.co,oscar.valderrama@affinitymarketing.com.co";

	//Estoy recibiendo el formulario, compongo el cuerpo

	$cuerpo = "<p>Un mensaje para Oscar Valderrama</p>";

	$cuerpo .= "<p>Nombre de la empresa " . $empresa . "</p>";

	$cuerpo .= "<p>Persona de contacto: " . $contacto . "</p>";

	$cuerpo .= "<p>Ciudad: " . $ciudad. "</p>";

	$cuerpo .= "<p>Email: " . $email. "</p>";

	$cuerpo .= "<p>Telefono: " . $telefono . "</p>";

	$cuerpo = $cuerpo."Comentarios: ".$mensaje;

	//mando el correo...

	mail($dest,"Mensaje de un Usuario",$cuerpo,$cabeceras);

	

		header("location: ../contacto.html")

?>