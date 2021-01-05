<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $error = NULL;
        $regx1 = preg_match("/[a-zA-z]/",$name);
        $regx2 = preg_match("/^[a-zA-Z0-9]{1,20}@[a-z]{1,8}\.[a-z]{2,3}$/",$email);
        if($name == "" || strlen($name) >50)
        {
            $GLOBALS['error'] = "Enter your name";
            echo "Please enter your name in not more than 50 characters <br>";
        }
        else if(!$regx1)
        {
            $GLOBALS['error'] = "n";
            echo "Please enter valid name <br>";
        }
        if($pass == "")
        {
            $GLOBALS['error'] = "Please enter your password";
            echo "Please enter pass <br>";
        }
        else if(strlen($pass) < 8)
        {
            $GLOBALS['error'] = "please enter your pass";
            echo "Please enter password in not less than 8 characters <br>";
        }
        if($email == "" || strlen($email) >50)
        {
            $GLOBALS['error'] = "Enter your email";
            echo "Please enter your email in not more than 50 characters <br>";
        }
        else if(!$regx2)
        {
            $GLOBALS['error'] = "t";
            echo "Please enter valid email id <br>";
        }
        if($GLOBALS['error']==NULL)
        {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "durgeshdb";
            
            
            $db = new mysqli($hostname, $username, $password, $dbname);


            if($db->connect_error)
            {
                die("Connection failed ".$db->connect_error);
            }

            echo "Connection successful<br>";


            $query2check = "SELECT * FROM reg1 where Email = '$email'";
            $result1 = $db->query($query2check);

            $num = mysqli_num_rows($result1);

            if($num == 1)
            {
                 echo "Email already exists";
            }
            else   
            {
                $query1 = "INSERT INTO `reg1`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$pass');";

                $db->query($query1);

                echo "<h2>Your information has been inserted successfully</h2>";
                $query2= "SELECT * FROM reg1";
                $result = $db->query($query2);
                while($reg1 = $result->fetch_assoc())
                {
                    echo "Name: " . $reg1['Name']."<br>";
                    echo "E-mail: " . $reg1['Email']."<br>";
                    echo "Password: " . $reg1['Password']."<br>";
                    echo "<br><br>";
                }

            }
            $db->close();
        }
    }
else{

    header("location:reg2.php");
}


?>