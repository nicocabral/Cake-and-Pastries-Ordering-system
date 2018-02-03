
               <?php include('includes/dbconn.php');
			   $stat = $_POST['filter'];
			   $query = mysql_query("SELECT tblcnp.*,tblorders.* 
			   								FROM tblorders LEFT JOIN 
											tblcnp ON tblorders.cnpoid = tblcnp.id WHERE tblorders.ostatus = '$stat' order by tblorders.id LIMIT 0,30") or die (mysql_error());
				if(mysql_num_rows($query)>0){
					while($row = mysql_fetch_assoc($query)){?>
               <tr class="success" style="cursor:pointer;">
               		<td style="text-align:center;"><a href="admin_reject_completed.php?id=<?php echo $row['id']?>" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                <td style="text-align:center;"><?php echo $row['cname'];?></td>
                <td style="text-align:center;"><?php echo $row['name'];?></td>
                <td style="text-align:center;"><?php echo $row['address'];?></td>
                <td style="text-align:center;"><?php echo $row['contact'];?></td>
                <td style="text-align:center;"><?php echo $row['timestamp'];?></td>
               
               
               </tr>
                 
               <?php }}else {echo'<strong style="color:red">No '.$stat.' record from database</strong>';}?>
        