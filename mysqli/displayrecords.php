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
    $query1 = "SELECT * FROM `student_details`;";
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
        $result = $db->query($query1);
        //loop the records
        while($student_details = $result->fetch_assoc()){
            echo "Name: " . $student_details['Name']."<br>";
            echo "E-mail: " . $student_details['E-mail']."<br>";
            echo "Mobile: " . $student_details['Mobile']."<br>";
        }
        //close connection
        $db->close();
    } catch(Exception $e){
        $error_message = $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }

?>