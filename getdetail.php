<?php 
 session_start();
 $con=mysqli_connect('localhost','root','universe','students');
 $q="select * from students ";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
?>
<html>
<head>
   <title>Users</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 class="u-info-head">User Information</h1>
  <div class="button" >
  <a href="index.php" style="text-align:center">Home</a>
</div><br>
  <table class="table-info">
  <thead>
	<th>Name</th>
	<th>Email</th>
	<th>Credit</th>
  </thead>
  <tr>
  <?php  
        $row=mysqli_fetch_array($result);
  ?>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
</tr>
<tr>
    <?php  
       $row=mysqli_fetch_array($result);
    ?>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
</tr>
       
<tr>
   <?php   
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
 </tr>
     
 <tr>
   <?php   
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
 </tr>
    
 <tr>
   <?php  
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
</tr>
   
<tr>
   <?php    
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
</tr>
   
<tr>
   <?php  
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
</tr>
 
<tr>
   <?php      
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>   
</tr>
        
<tr>
   <?php   
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
</tr>

<tr>
   <?php   
     $row=mysqli_fetch_array($result);
   ?>
   <td><?php echo  $row["name"]; ?></td>
   <td><?php echo  $row["email"]; ?></td>
   <td><?php echo  $row["credit"]; ?></td>
</tr>
        
</tbody>
</table>
         
 <br><br>


        
</body>
</html>