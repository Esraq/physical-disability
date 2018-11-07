<?php

mysql_connect("localhost","root","");
mysql_select_db("eisty");

 $a=$_POST['date'];
 $b=$_POST['notice'];


         
		
		 $a=$_POST['date'];
		 $b=$_POST['notice'];
		 
		 
		 if($a==''){
			 
			 echo "<script>alert('Please enter date!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter notice!')</script>";
			 exit();
		 }

            
		 $query="insert into notice
			  (date,notice) values ('$a','$b')";
			   if(mysql_query($query)){
			 
			  echo "<script>window.open('cn.html','_self')</script>";
			 
			 
	}
		
				
				
				
				











?>