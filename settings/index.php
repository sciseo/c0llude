<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<title><?php include 'site_name.txt';?> | c0llude</title>

        <link rel="stylesheet" href="../api/css/index.css" type="text/css">
        <link rel="stylesheet" href="../api/css/fonts.css" type="text/css">

</head>
<body>

<div class="base"></div>
<a href="<?php include 'site_url.txt';?>" id="logo"></a>

<div id="menu">
	<a href="<?php include 'site_url.txt';?>" class="nav">Dashboard</a>
	<a href="../whiteboard/" class="nav">Whiteboard</a>
                <a href="../whiteboard/calendar/" class="nav sub">Calendar</a>
                <a href="../whiteboard/tasks/" class="nav sub">Task List</a>
	<a href="../inbox/" class="nav">Inbox <?php include '../api/inbox.php';?></a>
</div>
<div id="prefs">
	<a>Settings</a>
	<a href="https://neflabs.com/contact/" target="_blank" class="help">Help</a>
</div>

<div class="page dark pad"><span class="large">Settings</span>

	<div class="buffer">
	Site Name: <b><?php include 'site_name.txt';?></b><br />
	<span class="data">edit configuration file at /settings/site_name.txt</span><br /><br />

	Site URL: <b><?php include 'site_url.txt';?></b><br />
	<span class="data">edit configuration file at /settings/site_url.txt</span><br /><br />

	Collude Version: <b>0.1.2</b>
	</div>

</div>

</body>
</html>
