<?php

if (isset($_POST['submit'])) {
	WriteMessage();
}

function WriteMessage() {

	$date = date("r");
	$data = htmlspecialchars($_POST['message']) ." - ". htmlspecialchars($_POST['connect']);
	$break = " | " .$date. "\n\n\n";

	file_put_contents(__DIR__ . '/../inbox/inbox.txt', $data, FILE_APPEND);
	file_put_contents(__DIR__ . '/../inbox/inbox.txt', $break, FILE_APPEND);

	header('Location: thanks.html');
	exit();

}

?>

<!doctype html>
<html>

<head>

	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

</head>
<body>

<p>Send us a message using the contact form below.</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<textarea id="message" name="message"></textarea>
	<input id="connect" name="connect" type="text" placeholder="your email address">
	<input id="submit" name="submit" type="submit" value="send message">
</form>

</body>
</html>
