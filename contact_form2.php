<?php
	require 'scripts/PHPMailer/PHPMailerAutoload.php';

	echo "ok \n";

	$mail = new PHPMailer;
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'clinicaobesidadperu@gmail.com';                 // SMTP username
	$mail->Password = 'BandaGastrica2015';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	//GET VARIABALES
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$phone = trim($_POST["phone"]);
	$message = trim($_POST["message"]);

	$mail->From = $email;
	$mail->FromName = $name;
	$mail->addAddress('clinicaobesidadperu@gmail.com', 'Juan Pablo');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('info@obesidad.com.pe', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz'igital ocean);         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Formulario de Contacto';
	$mail->Body    = "<p>Nombre: $name.</p> <p>Coreo: $email</p> <p>Teléfono: $phone.</p>  <p>Mensaje:</p><b>$message</b>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Su mensaje no pudo ser enviado, vuelvalo a intentar';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Su mensaje ha sido enviado con éxito.';
	}

?>