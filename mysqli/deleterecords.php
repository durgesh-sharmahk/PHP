<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQLi</title>
</head>
<body>
<h1> mysqli connection </h1>
<?php
    $mob = 1234567899;
    
    $query1 = "DELETE FROM `student_details` WHERE `student_details`.`Mobile` = $mob ";
    $hostname = 'localhost';
    $dbname = "durgeshdb";
    $username = "root";
    $password = "";
    try{
        $db = new mysqli($hostname, $username, $password, $dbname);
        //check connection
        if($db->connect_error){
            die("connection failed". $db->connect_error);
        }
        if( $db->query($query1) == TRUE){
            echo "success";

        }
        else
        {   echo "failure";

        }
        
        //close connection
        $db->close();
    } catch(Exception $e){
        $error_message = $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }

?>