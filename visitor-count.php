<?php
$file = 'visitors.txt';
if(!file_exists($file)){
  file_put_contents($file,'0');
}
$visitors = (int)file_get_contents($file);
$visitors++;
file_put_contents($file,$visitors);
echo $visitors;
?>
