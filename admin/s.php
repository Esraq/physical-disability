<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
?>







<html>
  <head>
    <title>Viewing all the forget password emails</title>
	  <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
  </head>
     <body>
          <center><h1>All user information</h1></center>
		  
		
		   <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			  
			   <th>email</th>
			 
				
			  </tr>
              <tr>
<?php
 mysql_connect("localhost","root","");
	mysql_select_db("eisty");
	
	$query = "select * from subscriber";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $a=$row[0];
	

?>
          <td><?php echo $a; ?></td>
		 
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>
		   
		  
        
			  
			  
			   
		    <a href="home.php">back</a>
           </fieldset>
		   </form>
		   <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		
      </body>
   </html>	  