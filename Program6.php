<?php
session_start();
$counter_name = "program_5_counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)){
$f = fopen($counter_name, "w") or die("Unable to open file!");
fwrite($f,"0");
fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal=number_format($counterVal);


// Has visitor been counted in this session?
// If not, increase counter value by one

$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
echo "You are visitor number $counterVal to this site";

?>
