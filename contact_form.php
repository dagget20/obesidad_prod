<?php

	echo "oks";
	//Only process POST request.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get the form fields and remove whitespace.

		$name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$phone = trim($_POST["phone"]);
		$message = trim($_POST["message"]);

		//Check that data was sent to mailer
		if (empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			//Set a 400(bad_request) responde code and exit.
			http_response_code(400);
			echo "Oops! There was an issue";
			exit;
		}
	}
	
	//Set the recipient email address.
	$recipient = "juampalg85@gmail.com";

	//Set the email subject.
	$subject = "Mensaje del Formulario Obesidad Peru";

	//Build the email content
	$email_content = "Nombre: $name \n";
	$email_content .= "Email: $email \n";
	$email_content .= "Teléfono: $phone \n\n";
	$email_content .= "Mensaje: \n $message \n";

	//Build the email headers.
	$email_headers = "From: $name <$email>";

	//Send the email.
	if(mail($recipient, $subject, $email_content, $email_headers)) {
		//Set a 200 (okay) response code;
		http_response_code(200);
		echo "Gracias, su mensaje ha sido enviado.";
	}else {
		//Not a POST request, set 403 (forbidden) response code.
		http_response_code(403);
		echo "Parece que hubo un problema con su envío, por favor vuelva a intentarlo.";
	}


?>