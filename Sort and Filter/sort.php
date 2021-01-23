<?php 
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sort</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<h1>Sort by ID </h1>


<form action="" method="POST">
<select name="val" >
<option name="none" value="none">None</option>
<option name="asc" value="asc">Ascending</option>
<option name="dsc" value="dsc">Descending</option>
</select>
<input type="submit" name= "submit" value="sort">
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
$val = $_POST['val'];
if($val=="dsc"){
    $sql = "SELECT * FROM `users` ORDER BY `id` DESC;";
    $result = $conn->query($sql);
            
        if ($result->num_rows > 0)
        {
			while ($row = $result->fetch_assoc()) {
			?>
	
		    <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['mob']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><a class="btn" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn " href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn" href="create.php?id=<?php echo $row['id']; ?>">New</a></td>
			</tr>
            <?php
             }}}
             
            else if($val=="asc") {
                $sql = "SELECT * FROM `users` ORDER BY `id` ASC;";
                $result = $conn->query($sql);
            
        if ($result->num_rows > 0)
        {
			while ($row = $result->fetch_assoc()) {
			?>
	
		    <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['mob']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><a class="btn" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn " href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn" href="create.php?id=<?php echo $row['id']; ?>">New</a></td>
			</tr>
            <?php
             }}}
            
            else{
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                        
                    if ($result->num_rows > 0)
                    {
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
                 }}}?>
</tbody>
</table>    
</body>
</html>