<?php 
include "config.php";


	if (isset($_POST['submit'])) {
  
    $id = $_POST['id'];
		$name = $_POST['name'];
		$contact = $_POST['mob'];
		$email = $_POST['email'];
		$password = $_POST['password'];
    

        $error = NULL;
        $regx1 = preg_match("/[a-zA-z]/",$name);
        $regx2 = preg_match("/^[a-zA-Z0-9]{1,20}@[a-z]{1,8}\.[a-z]{2,3}$/",$email);
        $regx3 = preg_match("/^[6-9]\d{9}$/", $contact);
        if($name == "" || strlen($name) >50)
        {
            $GLOBALS['error'] = "Enter your name";
            echo "<script>alert('Please enter your name in not more than 50 characters '); </script>";
        }
        else if(!$regx1)
        {
            $GLOBALS['error'] = "n";
            echo "<script>alert('Please enter valid name '); </script>";
        }
        if($password == "")
        {
            $GLOBALS['error'] = "Please enter your password";
            echo "<script>alert('Please enter pass '); </script>";
        }
        else if(strlen($password) < 8)
        {
            $GLOBALS['error'] = "please enter your pass";
            echo "<script>alert('Please enter password in not less than 8 characters '); </script>";
        }
        if($email == "" || strlen($email) >50)
        {
            $GLOBALS['error'] = "Enter your email";
            echo "<script>alert('Please enter your email in not more than 50 characters '); </script>";
        }
        else if(!$regx2)
        {
            $GLOBALS['error'] = "t";
            echo "<script>alert('Please enter valid email id '); </script>";
        }
        if($contact == "" || strlen($contact)<10 || strlen($contact)>10)
        {
            $GLOBALS['error']="m";
            echo "<script>alert('Please enter valid mobile number'); </script>";
        }
        else if(!$regx3)
        {
            $GLOBALS['error'] = "Enter your Mobile Number";
            echo "<script>alert('Please enter your Mobile Number correctly'); </script>";
        }
        if($GLOBALS['error']==NULL)
        {
            
                $sql = "INSERT INTO users(`id`,`name`, `mob`, `email`, `password`) VALUES ('$id','$name','$contact','$email','$password')";
                $result = $conn->query($sql);

                
                
                if ($result == TRUE) {
                        echo "<script>alert('You have successfully inserted the data');</script>";
        
                        }
            }
        }
    
    
?>

<!DOCTYPE html>
<html>
<body>



<form action="" method="POST">
  
    <legend>Enter Details: </legend>
    Name:<br>
    <input type="text" name="name">
    <br>
    Contact no.:<br>
    <input type="text" name="mob">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Id:<br>
    <input type="text" name="id">
    <br>
    <input type="submit" name="submit" value="submit">
  
</form>

</body>
</html>