<?php
$deal1name = $_GET['deal1name'];
$deal1address = $_GET['deal1address'];
$deal1dealinfo = $_GET['deal1dealinfo'];
$deal1latitude = $_GET['deal1latitude'];
$deal1longiude = $_GET['deal1longitude'];

$con = mysql_connect('singdeals.db.7440804.hostedresource.com', 'singdeals', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("singdeals", $con);

$sql="INSERT INTO deals (name, address, dealinfo, latitude, longitude) VALUES ('" . $deal1name ."', '" . $deal1address ."', '" . $deal1dealinfo ."', " . $deal1latitude .", " . $deal1longiude .");";

$result = mysql_query($sql);

if ($result == 1)
    {
        header('Location: http://www.soulofmachine.com/deals/insertForm.php?status=Success');
    }
else
    {
        echo "Error inserting deal";
    }

mysql_close($con);
?>
