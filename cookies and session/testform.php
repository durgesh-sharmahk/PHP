<?php
$myname = "Durgesh Sharma";
$mypass = "Durgesh@123";

if(isset($_POST['login'])){
    $name=$_POST['fname'];
    $pass=$_POST['pass'];
    
    $error = NULL;
    $regx1 = preg_match("/[a-zA-z]/",$name);
    

    if($name == "" || strlen($name) >20)
    {
    $GLOBALS['error'] = "enter your name";
    echo "please enter your name in not more than 20 characters <br>";
    }
    else if(!$regx1)
    {
    $GLOBALS['error'] = "n";
    echo "please enter valid name <br>";
    }
    if($pass == "")
    {
    $GLOBALS['error'] = "please enter your pass";
    echo "Please enter pass <br>";
    }
    else if(strlen($pass) < 8)
    {
    $GLOBALS['error'] = "please enter your pass";
    echo "Please enter password in more than 8 characters <br>";
    }
    
    if(isset($GLOBALS['error'])){

    }
    


    else if($name==$myname and $pass==$mypass and $mob==$mymob)
    {
        if(isset($_POST['remember'])){
        setcookie('fname', $name, time()+20);
        setcookie('pass', $pass, time()+20);
              
        session_start();
        
        }
        else
        {
        setcookie('fname', $name, time()-20);
        setcookie('pass', $pass, time()-20);
                
              
        }
        
        $_SESSION['fname'] = $name;
         echo "Welcome " . $_SESSION['fname'];
         echo "\n";
         echo "<a href = 'forms.php'><br><br> LOGOUT </a>";
    }
    else
    {
        echo "Invalid Details.<br> Click here <a href='forms.php'>
         to try again </a>";
    }
}
else
{
    header("location: forms.php");
}



?>
