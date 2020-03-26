<?php
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

?>

<?php
	$file =  fopen('user.txt', 'a');
	fwrite($file, $name);
	fclose($file);

	$file = fopen('usermail.txt', 'a');
	fwrite($file, $mailFrom);
	fclose($file);

	$file = fopen('subject.txt', 'a');
	fwrite($file, $subject);
	fclose($file);

	$file = fopen('message.txt', 'a');
	fwrite($file, $message);
	fclose($file);


?>