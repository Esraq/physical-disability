<?php

  mysql_connect("localhost","root","");
	mysql_select_db("eisty");
  $a=$_POST['date'];
  $query = "delete from notice where date='$a'";
	
	if(mysql_query($query)){
		
		
		header("location:acn.html");
		
		
	}

?>
