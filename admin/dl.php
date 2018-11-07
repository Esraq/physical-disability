<?php

  mysql_connect("localhost","root","");
	mysql_select_db("eisty");
  $a=$_POST['date'];
  $query = "delete from forget where email='$a'";
	
	if(mysql_query($query)){
		
		
		echo "deleted successfully";
		
		
	}

?>
