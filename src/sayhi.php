<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (!isset($_POST['Name']) or $_POST['Name'] === '') exit('Name not set');
		if (!isset($_POST['Email']) or $_POST['Email'] === '') exit('Email not set');
		if (!isset($_POST['Message']) or $_POST['Message'] === '') exit('Message not set');

		$to = 'contractor@stevenhollidge.co.uk';
		$subject = 'Website message from: ' .$_POST['Name'];
		$message = $_POST['Message'];
		$headers = 'From: hello@stevenhollidge.co.uk' . "\r\n" .
    				'Reply-To: '.$_POST['Email']. "\r\n" .
					'X-Mailer: PHP/' . phpversion() .PHP_EOL;

		if (mail($to, $subject, $message, $headers)) 
		{
			header("Location: http://stevenhollidge.co.uk/feedback.html");
		}else{
			echo "Mail Not Sent";
		}
		exit();
	}
?>