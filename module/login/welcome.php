﻿
<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: login.php");
	
}
?>



<html>
  <head>
    <title>welcome.php</title>
  </head>
      <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	   <font color='red' size='5'>
	   <?php echo $_SESSION['email']; ?>
	   </font>
	    <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			   <th>Date</th>
			   <th>Notice</th>
			    
	
			
			  </tr>
              <tr>
	   <?php
 mysql_connect("localhost","root","");
	mysql_select_db("eisty");
	
	$query = "select * from notice";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $u= $row[0];
	    $n= $row[1];;
	
		
		

?>
          <td><?php echo $u; ?></td>
		  <td><?php  echo $n; ?></td>
		  
		   

              </tr>		

	<?php } ?>	  
		   
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		  
		</body>
        </html>		