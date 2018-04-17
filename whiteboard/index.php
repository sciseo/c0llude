<?php

if (($_POST['submit']) == "update") {
$fp = fopen("index.txt","w");
fwrite($fp, stripslashes($_POST['organic']));
fclose($fp);
}

// was stripslashes($organic);

$fp = fopen("index.txt","r");
while (!feof($fp)) {
$data .= fgets($fp, 4096);
}
fclose($fp);

?>

<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<title><?php include '../settings/site_name.txt';?> | c0llude</title>

        <link rel="stylesheet" href="../api/css/index.css" type="text/css">
        <link rel="stylesheet" href="../api/css/fonts.css" type="text/css">

</head>
<body>

<div class="base"></div>
<a href="<?php include '../settings/site_url.txt';?>" id="logo"></a>

<div id="menu">
	<a href="<?php include '../settings/site_url.txt';?>" class="nav">Dashboard</a>
	<a class="sel">Whiteboard</a>
                <a href="calendar/" class="nav sub">Calendar</a>
                <a href="tasks/" class="nav sub">Task List</a>
	<a href="../inbox/" class="nav">Inbox <?php include '../api/inbox.php';?></a>
</div>
<div id="prefs">
	<a href="../settings/">Settings</a>
	<a href="https://neflabs.com/contact/" target="_blank" class="help">Help</a>
</div>

<form action="<?php print $PHP_SELF; ?>" method="post">

<div class="page light no"><textarea id="whiteboard" name="organic" spellcheck="false"><?php print $data; ?></textarea></div>

<input id="update" type="submit" name="submit" value="update">
</form>

</body>
</html>
