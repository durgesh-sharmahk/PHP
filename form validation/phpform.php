
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$mob = $_POST['number'];
$message = $_POST['message'];
$error = NULL;

$regx1 = preg_match("/[a-zA-z]/",$name);
$regx2 = preg_match("/^[6-9]\d{9}$/",$mob);


if($name == "" || strlen($name) >50)
{
    $GLOBALS['error'] = "enter your name";
    echo "please enter your name in not more than 50 characters <br>";
}
else if(!$regx1)
{
    $GLOBALS['error'] = "n";
    echo "please enter valid name <br>";
}

if($email == "" || strlen($email) >50)
{
    $GLOBALS['error'] = "please enter your email ";
    echo "Please enter email <br>";
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
if($cpass == "")
{
    $GLOBALS['error'] = "confirm password";
    echo "Please enter pass to confirm<br>";
}
else if($cpass!=$pass)
{
    $GLOBALS['error'] = "passwords do not match";
    echo "*passwords do not match* <br>";
}

if($mob == "" || strlen($mob) <10)
{
    $GLOBALS['error'] = "please enter your mob no";
    echo "Please enter valid mobile no <br>";

}

else if (!$regx2)
{
    $GLOBALS['error'] = "please enter your mobile no";
        echo "Please enter valid mobile no. <br>";
}



if($message == "")
{
    $GLOBALS['error'] = "please enter review";
    echo "Please give feedback <br>";

}
else if(strlen("$message") > 150)
{
    $GLOBALS['error'] = "please enter your feedback";

    echo "Please give feedback in less than 150 words <br>";
}

if(isset($GLOBALS['error'])){

}

else
{
echo "Your details are: <br><br> ";
echo "Name : $name <br>";
echo "email : $email <br> ";
echo "password : $pass <br>";
echo "mobile no  : $mob <br>"; 
echo "Your feedback  : $message <br>";

}

?>


