<?php
$content = file('../whiteboard/calendar/calendar.txt');
$pattern = 'id="'.$_GET['id'].'"';
$replace = '';
wtf($pattern);


foreach($content as $key => $line) {
  if (strstr($line, $pattern) !== false) {
    $str = str_replace($content[$key], $replace, $content);
    file_put_contents('../whiteboard/calendar/calendar.txt', $str);
  }
}

header('Location: ../whiteboard/calendar/index.php');
exit();

?>