<!-- Write a PHP script to extract the values from an associative array using the array_values()
function. -->

<?php

$student = array(
    "first_name" => "Arjun ",
    "last_name" => "Dhakan",
    "age" => 21,
    "email" => "arjunsoni96872@gmail.com"
);

$keys = array_values($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>