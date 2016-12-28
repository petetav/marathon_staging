<?php
$con = mysql_connect("localhost");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="INSERT INTO marathon_test (Last_name, First_name, Run_number)
VALUES
('$_POST[Last_name]','$_POST[First_name]','$_POST[Run_number]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>
