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
                <a class="sel sub">Calendar</a>
                <a href="../tasks/" class="nav sub">Task List</a>
	<a href="../../inbox/" class="nav">Inbox <?php include '../../api/inbox.php';?></a>
</div>
<div id="prefs">
	<a href="../../settings/">Settings</a>
	<a href="https://neflabs.com/contact/" target="_blank" class="help">Help</a>
</div>

<div class="page light pad"><span class="large">Calendar</span>

<span id="caladd">
	<form action="../../api/caladd.php" method="post">
		<input type="radio" name="month" id="m01" value="01" checked><label for="m01">Jan</label>
		<input type="radio" name="month" id="m02" value="02"><label for="m02">Feb</label>
		<input type="radio" name="month" id="m03" value="03"><label for="m03">Mar</label>
		<input type="radio" name="month" id="m04" value="04"><label for="m04">Apr</label>
		<input type="radio" name="month" id="m05" value="05"><label for="m05">May</label>
		<input type="radio" name="month" id="m06" value="06"><label for="m06">Jun</label>
		<input type="radio" name="month" id="m07" value="07"><label for="m07">Jul</label>
		<input type="radio" name="month" id="m08" value="08"><label for="m08">Aug</label>
		<input type="radio" name="month" id="m09" value="09"><label for="m09">Sep</label>
		<input type="radio" name="month" id="m10" value="10"><label for="m10">Oct</label>
		<input type="radio" name="month" id="m11" value="11"><label for="m11">Nov</label>
		<input type="radio" name="month" id="m12" value="12"><label for="m12">Dec</label>
		<select id="day" name="day">
			<?php
			for ($i = 1; $i <= 31; $i++) { ?>
				<option value="<?= $i ?>"><?= sprintf('%02d', $i);?></option>
			<?php }
			?>
		</select>
		<select id="year" name="year">
			<option value="<?php echo date('Y', strtotime('-1 year')); ?>"><?php echo date('Y', strtotime('-1 year')); ?></option>
			<option value="<?php echo date("Y"); ?>" selected="selected"><?php echo date("Y"); ?></option>
			<option value="<?php echo date('Y', strtotime('+1 year')); ?>"><?php echo date('Y', strtotime('+1 year')); ?></option>
			<option value="<?php echo date('Y', strtotime('+2 years')); ?>"><?php echo date('Y', strtotime('+2 years')); ?></option>
			<option value="<?php echo date('Y', strtotime('+3 years')); ?>"><?php echo date('Y', strtotime('+3 years')); ?></option>
			<option value="<?php echo date('Y', strtotime('+4 years')); ?>"><?php echo date('Y', strtotime('+4 years')); ?></option>
		</select>
		<span class="detail">at</span>
		<select id="hour" name="hour">
			<option value="00">00</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10" selected="selected">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
		</select>
		<span class="detail">:</span>
		<select id="minute" name="minute">
			<option value="00">00</option>
			<option value="15">15</option>
			<option value="30">30</option>
			<option value="45">45</option>
		</select><br />
		<input id="ca-event" name="event" type="text" maxlength="30" placeholder="Event">
		<input id="ca-sub" name="submit" type="submit" value="+">
	</form>
</span>

	<div id="sortList">
	<?php include 'calendar.txt';?>
	</div>

</div>

	<script src="../../api/js/sort.js"></script>

</body>
</html>