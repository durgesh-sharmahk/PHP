<?php 
include "config.php";


	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$user_id = $_POST['user_id'];
		$mob = $_POST['mob'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
        
		
		$sql = "UPDATE `users` SET `name`='$name',`mob`='$mob',`email`='$email',`password`='$password' WHERE `id`='$user_id'";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
        }
    
}
	



if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$mob = $row['mob'];
			$email = $row['email'];
			$password  = $row['password'];			
			$id = $row['id'];
		}

	?>
		<h2>Update Form</h2>
		<form action="" method="post">
		  
		    <legend>Personal information:</legend>
		    Name:<br>
		    <input type="text" name="name" value="<?php echo $name; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		    Contact no.:<br>
		    <input type="text" name="mob" value="<?php echo $mob; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="password" value="<?php echo $password; ?>">
		    <br>
		    
		    <input type="submit" value="Update" name="update">
		  
		</form>

		</body>
		</html>




	<?php
	} else{
		
		header('Location: view.php');
	}

}
?>