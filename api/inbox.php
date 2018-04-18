<?php
$linecount = 0;
$fh = fopen(__DIR__ . '/../inbox/inbox.txt', 'r');

while (($line = fgets($fh)) !== FALSE) {
  if ($line === "\n") {
    continue;
  }
  $linecount++;
}

if ($linecount == 0) {
  $empty = '<span class="null">'.$linecount.'</span>';
  print $empty;
}
else {
  $new = '<span class="num">'.$linecount.'</span>';
  print $new;
}
?>
