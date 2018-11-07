<?php

mysql_connect("localhost","root","");
mysql_select_db("eisty");

 $a=$_POST['mail'];






		 	 $query="insert into forget
			  (email) values ('$a')";
			   if(mysql_query($query)){
			 
			 echo  "Check your email"; 
			 exit();
			 
			 }


  
  
  
 ?>		  