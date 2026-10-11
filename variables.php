<?php
# Define a variable
$name;
# Assign to a variable
$name = "Moop";

# "." Concatinates <br/> makes an html newline
print $name . "<br/>";

#Reference a variavble
$name_ref = &$name;

$name = "Evil Moop";

print ("$name_ref<br/>");

echo "Hello $name<br/>";
# Variables do not work in single quotes
echo 'Hello $name<br/>';