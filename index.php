<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<title><?php include 'settings/site_name.txt';?> | c0llude</title>

        <link rel="stylesheet" href="api/css/index.css" type="text/css">
        <link rel="stylesheet" href="api/css/fonts.css" type="text/css">

</head>
<body>

<div class="base"></div>
<a href="<?php include 'settings/site_url.txt';?>" id="logo"></a>

<div id="menu">
	<a class="sel">Dashboard</a>
	<a href="whiteboard/" class="nav">Whiteboard</a>
                <a href="whiteboard/calendar/" class="nav sub">Calendar</a>
		<a href="whiteboard/tasks/" class="nav sub">Task List</a>
	<a href="inbox/" class="nav">Inbox <?php include 'api/inbox.php';?></a>
</div>
<div id="prefs">
	<a href="settings/">Settings</a>
	<a href="https://neflabs.com/contact/" target="_blank" class="help">Help</a>
</div>

<div class="page light pad">
	<span class="large"><?php include 'settings/site_name.txt';?></span>

An experimental dashboard will be implemented in the next version. If you have suggestions for what you want to see on this page, send us a message, and we'll build it!

</div>

</body>
</html>