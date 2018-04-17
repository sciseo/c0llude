<?php
if (isset($_POST['submit'])) {
  TaskAdd();
}

function TaskAdd() {
$original = file('../whiteboard/tasks/tasks.txt');
$highest = 0;

foreach ($original as $line) 
  if (
    preg_match('/\d+/', $line, $value) && $value[0] > $highest
  ) $highest = $value[0];

$id = ($highest + 1);

  $data = '<div name="'.$id.'" class="taskitem"><span class="taskname">'.htmlspecialchars($_POST['label']).'</span>'.htmlspecialchars($_POST['task']).'<a href="../../api/taskdel.php?id='.$id.'" class="taskdel">-</a></div>';
  file_put_contents('../whiteboard/tasks/tasks.txt', $data, FILE_APPEND);

  $divide = "\n";
  file_put_contents('../whiteboard/tasks/tasks.txt', $divide, FILE_APPEND);

  header('Location: ../whiteboard/tasks/index.php');
  exit();
}
?>
