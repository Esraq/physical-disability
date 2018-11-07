<html>
  <head>
    <title>Viewing all the users</title>
  </head>
     <body>
          <center><h1>All user information</h1></center>
		  <font size='6' color-'red'>
		  <?php echo @$_GET['deleted'];?></font>
		   <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			   <th>date</th>
			   <th>notice</th>
			   
				<th>Delete notice</th>
			  </tr>
              <tr>
<?php
 mysql_connect("localhost","root","");
	mysql_select_db("eisty");
	
	$query = "select * from notice";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $d= $row[0];
	    $n =$row[1];
		
		
		

?>
          
		  
		  <td><?php echo $d; ?></td>
		  <td><?php  echo $n; ?></td>
		   <td><a href='delete.php?del=<?php echo $d; ?>'>Delete</a></td>
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>

      </body>
   </html>	  