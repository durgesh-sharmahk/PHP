<?php 

include "config.php";



$idd=(int)$_GET['id'];
/*$id=5;*/
echo $idd;
$x=(int)($idd)+2;

$sql = "SELECT * FROM users where id between 0 and $x";



$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	
		<h2>users</h2>
<table class="table">
	<thead>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
            
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['mob']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn btn-info" href="create.php?id=<?php echo $row['id']; ?>">New</a></td>
					</tr>
					
					
		<?php	    $id = $row['id'];
		            
        	}
                    
                    
        
        ?>
            <tr>   
                    <td><a class="btn btn-info" href = "loadmore.php?id=<?php echo $id;?>">Load More</a></td>
        	</tr>
			
		<?php }
		if($id==$idd){
			echo "no more data";
		} 
		
        
        
            
    ?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>