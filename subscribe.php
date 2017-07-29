<? error_reporting(0);

$mail = "paul@discount-website-design.co.uk";

if($_POST['message']) {
        $message = "<h2>Hello here is a message from Weejee Architects".$_SERVER['SERVER_NAME']."</h2><hr>
					 
					<p><strong>Message:</strong> ".$_POST['newsletter_email']."</p>";
		$subject="Subscribe Me: ".$_POST['subject'];
		mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
		echo 'AAAAAAAAAAAAAAA';
}
?> 