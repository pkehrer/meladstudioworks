<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'from:postmaster@meladstudioworks.com';

mail('pkehrer@meladstudioworks.com, ethan@meladstudioworks.com',
	'Website Contact from: '.$_POST['name'],
	 email_body(),
	 $headers);

header( 'Location: /?page_id=69&contact_sent') ;

function email_body() {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	return '<html><head></head><body>'.
			'<div style="font-size:1.7em">'.
			'<h1>Contact Form</h1><hr/><br/><br/>'.
			'<strong>Name:</strong> '.$name.'<br/><br/><br/>'.
			'<strong>Email:</strong> '.$email.'<br/><br/><br/>'.
			'<strong>Message:</strong><br/><pre style="font-family:arial">'.$msg.'</pre>'.
			'</div>'.
			'</body></html>';
}

?>