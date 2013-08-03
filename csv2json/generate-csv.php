<?php

// x, y, y0

// First arguement from the command line
$filename = isset($_SERVER['argv'][1])? $_SERVER['argv'][1] : 'data.csv';

$headers = "x,y,y0\n";

$min = 64;

$max = 512;

file_put_contents($filename, $headers);

for ($i=0; $i < 20; $i++)
{
  $x  = $i;
  $y  = mt_rand($min, $max) / $max;
  $y0 = mt_rand($min, $max) / $max;

  $y = sprintf("%0.5f", $y);
  $y0 = sprintf("%0.5f", $y0);

  $data = "$x,$y,$y0\n";

  file_put_contents($filename, $data, FILE_APPEND);
}
