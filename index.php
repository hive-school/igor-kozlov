<?php
function read_stdin()
{
    $inputHandler = fopen("php://stdin", "r");
    $input = fgets($inputHandler, 128);
    fclose($inputHandler);
    return $input;
}

echo "Please input string:\n";
$string = read_stdin();
if (!$string || $string = "" || $string = "\n") {
    echo "Nothing to output\n";
} else {
    echo "String you input:\n $string \n";
}