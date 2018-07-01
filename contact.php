<?php

function sendMail( $request = array(), $response = array( 'status' => 'error', 'messages' => array() ) ) {
	$request = $_REQUEST;
	
	if( !isset( $request['name'] ) || empty( $request['name'] ) ) {
		$response['errors']['name'] = 'Please enter your name.';
		$response['messages'][] = array( 'message' => $response['errors']['name'], 'error' );
	}

	if( !isset( $request['email'] ) || empty( $request['email'] ) ) {
		$response['errors']['email'] = 'Please enter your email.';
		$response['messages'][] = array( 'message' => $response['errors']['email'], 'error' );
	}

	if( !isset( $request['mobile'] ) || empty( $request['mobile'] ) ) {
		$response['errors']['mobile'] = 'Please enter your mobile number.';
		$response['messages'][] = array( 'message' => $response['errors']['mobile'], 'error' );
	}

	if( !isset( $request['message'] ) || empty( $request['message'] ) ) {
		$response['errors']['message'] = 'Please enter what you want to talk about.';
		$response['messages'][] = array( 'message' => $response['errors']['message'], 'error' );
	}
	
	if( isset( $response['errors'] ) && !empty( $response['errors'] ) ) {
		$response['values'] = $request;
		return $response;
	}
	
	// Mail to site admin
	$subject = 'Communication | Da One Décor';
	$body = '<p>Dear Da One Décor,</p><p>The following person would like you to contact them as soon as possible. Their details are as follows:</p>
	<table>
	<tr><th align="left">Name</th><td align="center">:</td><td align="left">'.$request['name'].'</td></tr>
	<tr><th align="left">Email</th><td align="center">:</td><td align="left"><a href="mailto:'.$request['email'].'">'.$request['email'].'</a></td></tr>
	<tr><th align="left">Mobile</th><td align="center">:</td><td align="left">'.$request['mobile'].'</td></tr>
	<tr><th align="left">Message</th><td align="center">:</td><td align="left">'.$request['message'].'</td></tr>
	</table><br>--<br>Warm Regards,<br><a href="http://daonedecor.in" target="_blank" style="text-decoration:none;color:#70007f;">Da One Décor</a>';

	$to = 'Da One Décor <support@euroinfotek.com>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Da One Décor <no-reply@daonedecor.in>' . "\r\n";
	$headers .= 'Reply-To: ' . $request['name'] . ' <'. $request['email'] . '>' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
	$headers .= 'BCC: Support <support@euroinfotek.com>' . "\r\n";

	if ( @mail($to, $subject, $body, $headers) ) {
		$response['status'] = 'success';
		$response['messages'][] = array( 'message' => 'Thank you for contacting us. We shall get back to you shortly.', 'status' => 'success' );
	}else{
		$response['messages'][] = array( 'message' => 'Unable to send your message. Please try again in some time.', 'status' => 'error' );
	}
	
	return $response;
}

ob_clean();
ob_flush();
header( 'HTTP/1.1 200 OK' );
header('Content-Type: application/json; charset=utf-8' );
print json_encode( sendMail() );
exit;
?>