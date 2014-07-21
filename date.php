<!DOCTYPE HTML> 
<html>
<body> 

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
//h - 12-hour format of an hour with leading zeros (01 to 12)
//i - Minutes with leading zeros (00 to 59)
//s - Seconds with leading zeros (00 to 59)
//a - Lowercase Ante meridiem and Post meridiem (am or pm)
echo "The time is " . date("h:i:sa") . "<br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>

<br> © 2010-<?php echo date("Y")?>


</body>
</html>
