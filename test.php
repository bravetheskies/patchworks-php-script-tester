<?php

$line_seperator = "===============" . PHP_EOL;

echo "Running test..." . PHP_EOL;
echo $line_seperator;

include 'script.php';

$input['payload'] = file_get_contents('payload.txt');

$output = handle($input);

var_dump($output);

?>