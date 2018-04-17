<?php
if (isset($_POST['submit'])) {
  CalAdd();
}

function CalAdd() {
  $original = file('../whiteboard/calendar/calendar.txt');
  $highest = 1;
   

  foreach ($original as $line) {

    $highest++;
  }
 $highest = $highest-1;
	$dir = "../whiteboard/calendar/calendar.txt"; 
	$event = $_POST['event'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$day = $_POST['day'];

	// gets the time in a format that will fit into the DATETIME object
	$time = $_POST['hour'] . ':' . $_POST['minute'];
	// optional setting of the timezone 
	$timezone = new DateTimeZone('America/New_York'); 

	$timeStamp = uniqid(); 
	$dateInput = $year . '-' . $month . '-' . $day . ' ' . $time ;
	$eventTime = new DateTime($dateInput);

	$data = '<ul id="' . $eventTime->getTimestamp() . '"><s>' . $eventTime->format('D, F d, Y @ H:i') . '</s><a href="../../api/caldel.php?id=' . $eventTime->getTimestamp() . '" class="caldel"></a>' . $event . '</ul>';

	if(file_put_contents($dir, $data, FILE_APPEND)) {
	$divide = "\n";
	file_put_contents($dir, $divide, FILE_APPEND);
		header('Location: ../whiteboard/calendar/index.php');
	  	exit(); 
	} else {
		echo 'You had an error';
	}

}

?>