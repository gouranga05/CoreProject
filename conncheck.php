<?php
include ("connections.php");
echo "statement";
mysqli_query($conn, 'INSERT INTO user VALUES(7,"Danadan");');

?>