<?php

	function Connection(){
		$server="";            // server used ( for local machine "localhost" )
		$user="";              // username
		$pass="";              // user password
		$db="";                // database name
	   	
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>
