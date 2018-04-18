<?php
$content = file('../whiteboard/tasks/tasks.txt');
$pattern = 'name="'.$_GET['id'].'"';
$replace = '';

foreach($content as $key => $line) {
  if (strstr($line, $pattern) !== false) {
    $str = str_replace($content[$key], $replace, $content);
    file_put_contents('../whiteboard/tasks/tasks.txt', $str);
  }
}

header('Location: ../whiteboard/tasks/index.php');
exit();

?>
