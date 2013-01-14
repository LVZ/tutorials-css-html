<html>
  <head>
    <title>PHP Tutorial for syntax</title>
  </head>
<body>

<?php

$aVariable = "The PHP Basics <br>";
echo "The PHP basics <br>";
echo $aVariable;

// Single quotes

$aVariable2 = 'The PHP Basics Single Quotes example <br>';
echo 'The php basics single quotes example <br>';
echo $aVariable2;

// Special Characters

$return = "A carriage return is \r";
$tab = "A tab is \t";
$dollar = "A dollar sign is \$";

echo 'This is Robert\'s xbox 360';

// Here doc

$aHeredoc = <<<EXAMPLE
<br> The PHP basics.com
has PHP tutorials
for free!
EXAMPLE;

echo $aHeredoc;


?>




</body>
</html>
