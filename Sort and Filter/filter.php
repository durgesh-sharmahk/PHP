<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    
<div class="container">
	
<h2>INFORMATION</h2><br>
<form action="filter.php" method="POST"> 	
    <input type="radio" name="gender" value="Male">Male
    <br>
    <input type="radio" name="gender" value="Female">Female  
    <br>  
	<input type ="submit" name="submit" value = "FILTER BY GENDER"><br>    
	</form>

<table class="table">
<thead>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
</tr>
</thead>
<tbody>				
<?php
include "config.php";

if(isset($_POST['submit']))
   {
        $gender = $_POST['gender'];       
    
		
			$sql="select * from `users` where `gender` ='$gender';";
            $result = $conn->query($sql);          
			
				
			if ($result->num_rows > 0) {
				
			while ($row = $result->fetch_assoc()) {
			?>
	
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['mob']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><a class="btn" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn" href="create.php?id=<?php echo $row['id']; ?>">New</a></td>
				</tr>
            <?php
             }}}
		?>
</tbody>
</table>
</div>
</body>
</html>