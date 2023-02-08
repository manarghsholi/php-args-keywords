<?php

$val=1; 

function func(string $arg1, string $arg2)
{
    return;
}

$startTimeBeforeLoop = microtime(true);
$result = '';

// Start loop 
for($i = 1; $i <= 99999; $i++) 
{
    $startTime = microtime(true);
    func(arg1: 'str1', arg2: 'str2');
    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime);
    $result .= "\n {$i} It takes ".$executionTime." seconds to execute the script \n";
}

$endTimeAfterLoop = microtime(true);
$executionTimeAfterLoop = ($endTimeAfterLoop - $startTimeBeforeLoop); 
$result2 = "\n {$i} It takes ".$executionTimeAfterLoop." seconds to execute the script after loop \n";

$myfile = fopen("keywords.txt", "w") or die("Unable to open file!");
fwrite($myfile, $result);
fwrite($myfile, "\n");
fwrite($myfile, $result2);
fclose($myfile);
