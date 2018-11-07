<?php

mysql_connect("localhost","root","");
mysql_select_db("eisty");

 $a=$_POST['email'];






 $check_email="select * from subscriber where email='$a'";
		 $run=mysql_query($check_email);
		 if(mysql_num_rows($run)>0){
			 
			  echo "<script>alert('Email $a already exists in our database!')</script>";
			 exit();
			 }
		 	 $query="insert into subscriber
			  (email) values ('$a')";
			   if(mysql_query($query)){
			 
			   header("location:wel.html");
			 exit();
			 
			 }


  
  
  
 ?>