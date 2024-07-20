<?php 







header("HTTP/1. 404 NOT FOUND");

header("cach-control:no-cach, must-revalidate");


echo "<a href='testee.php'>test</a>";


header("Location: testee.php");
header("Refresh:  5; url=testee.php");
exit;


?>









