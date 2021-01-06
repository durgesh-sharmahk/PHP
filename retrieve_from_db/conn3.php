<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        
        $error = NULL;
        $regx1 = preg_match("/[a-zA-z]/",$name);
        
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
            $query2check = "SELECT * FROM reg3 where Username = '$name'";
            $result1 = $db->query($query2check);

            $num = mysqli_num_rows($result1);

            if($num == 1)
            {

                $query3 = "SELECT * FROM reg3 where Username = '$name' AND Pass = '$pass'";

                $result2 = $db->query($query3);
                $num1 = mysqli_num_rows($result2);

                if($num1 == 1)
                {
 
                    $ar = $result2->fetch_array();

                    
                    echo " Welcome<br>";
                    echo "Name : ".$ar['Name']."<br>";
                    echo "Email : ".$ar['email']." <br>";
                    echo "Password : ".$ar['Pass']."<br> ";
                    echo "Username : ".$ar['Username']." <br>";
                    echo "<br>";
                    
                }

                else
                {
                    echo "You have entered incorrect password or username<br>";    
                }

            }
            else
            {

                echo "Please enter registered credentials";
            }


        $db->close();
}
else
{

    header("location:regis3.php");
}
    }
else
{

    header("location:regis3.php");
}


?>