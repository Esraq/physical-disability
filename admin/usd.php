<?php

  mysql_connect("localhost","root","");
	mysql_select_db("eisty");
  $a=$_post['date'];
  $query = "delete from users where name='$a'";
	
	if(mysql_query($query)){
		
		
		echo "deleted sucessfully";
		
		
	}

?>
