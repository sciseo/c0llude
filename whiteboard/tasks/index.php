<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<title><?php include '../../settings/site_name.txt';?> | c0llude</title>

        <link rel="stylesheet" href="../../api/css/index.css" type="text/css">
        <link rel="stylesheet" href="../../api/css/fonts.css" type="text/css">

	<script src="../../api/js/refresh.js"></script>

</head>
<body>

<div class="base"></div>
<a href="<?php include '../../settings/site_url.txt';?>" id="logo"></a>

<div id="menu">
	<a href="<?php include '../../settings/site_url.txt';?>" class="nav">Dashboard</a>
	<a href="../" class="nav">Whiteboard</a>
                <a href="../calendar/" class="nav sub">Calendar</a>
                <a class="sel sub">Task List</a>
	<a href="../../inbox/" class="nav">Inbox <?php include '../../api/inbox.php';?></a>
</div>
<div id="prefs">
	<a href="../../settings/">Settings</a>
	<a href="https://neflabs.com/contact/" target="_blank" class="help">Help</a>
</div>

<div class="page light pad"><span class="large">Task List</span>

<span id="taskadd">
	<form action="../../api/taskadd.php" method="post">
		<input id="ta-label" name="label" maxlength="30" type="text" placeholder="Label">
		<input id="ta-task" name="task" type="text" placeholder="Task"><br />
		<input id="ta-sub" name="submit" type="submit" value="Add New Task">
	</form>
</span>

<?php include 'tasks.txt'; ?>

</div>

</body>
</html>

