<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartNG contact form</title>
</head>
<body>
    <main>
    	<h1>My Contact form</h1>
    	
    	<p>Fill required fields</p>
    	<form class="contact-form" action="contactform.php" method="post">
    		<input type="text" name="name" placeholder="Full name">
    		<input type="email" name="mail" placeholder="Your E-mail">
    		<input type="text" name="subject" placeholder="Subject">
    		<textarea name="message" placeholder="Message"></textarea>
    		<button type="submit" name="submit">SUBMIT</button>
    	</form>
    </main>
</body>
</html>