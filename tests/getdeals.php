<?php
$con = mysql_connect('singdeals.db.7440804.hostedresource.com', 'singdeals', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("singdeals", $con);

$sql="SELECT * FROM deals";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
	echo $row['name'] . '|' . $row['address'] . '|' . $row['dealinfo'] . '|' . $row['latitude'] . '|' . $row['longitude'] . '%';
  }

mysql_close($con);
?>