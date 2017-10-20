<?php
   	include("connect.php");
   	
   	$link=Connection();

	$var1=$_POST["var1"];
	$var2=$_POST["var2"];

	$query = "INSERT INTO `Log` (`Variable_1`, `Variable_2`) 
		VALUES ('".$var1."','".$var2."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);

   	header("Location: index.php");
?>
