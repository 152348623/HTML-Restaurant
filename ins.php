<?php
$sql = mysql_Connect("localhost","admin","1234","msg");
$ins = sprintf("INSERT INTO msg_ (name,message) VALUES ('%%s%%','%%s%%')",$_GET["name"],$_GET["textarea"]);
mysql_query($ins);
?>