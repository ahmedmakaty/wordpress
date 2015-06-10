<?php

  $to = "ahmedmakaty@gmail.com";
  $subject = "Masalla Product Inquiry";
 
  $msg = "";
	foreach ($_POST as $key => $value) {
		if($value != null){
			$msg .= "<strong>" . str_replace("_", " ", $key) . "</strong>" . " : " . "<em>" . $value . "</em>" . "<br /><br />";
		}
	}
	echo $msg;

	echo "Your email has been recieved succefully";

  $headers = "From: webmaster@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";

 // mail($to,$subject,$msg,$headers);

?>