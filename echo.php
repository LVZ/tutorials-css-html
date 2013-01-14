<html>
  <head>
    <title>PHP Tutorial for syntax</title>
  </head>
<body>

<?php
$aString = "<b> Hello Robert.</b>";
$total = 400;

echo $aString;
echo "<br>"; //the line break
echo "<u>Hello World</u>";

echo "<br><img src= '../img/star.jpg' style = 'width: 250px'> ";

// robert said, "hello you".

echo "<br><br>robert said, \" Hello you \" ";

// echoing variables

$question = "<br><br>What is 2 + 2?<br>";
$answer = "4";

echo $question;
echo $answer;

// echoing text strings and variables

echo "<br><br>What is 2 +2? <br>That's easy, 2+2 is $answer";


echo "<br><br>$answer";
echo '<br><br>$answer';

?>

<?= "<br><br>hello shorthand" ?>

<?php
echo "<br><br>hello world"
?>

</body>
</html>
