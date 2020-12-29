<?php
//1st way of making array
/*$colour= array(10, "yellow", "blue", "green");
echo $colour[0], "<br>";
echo $colour[1], "<br>";echo $colour[2], "<br>";echo $colour[3];
//2nd way of making array
$a=[10, 20, 30, "hello"];
print_r($a);
print_r($colour);
//by using pre tag, readability is enhanced
echo "<pre>";
print_r($a);
echo "</pre>";
//third way of making array
$x[0]="hello";
$x[1]="durgesh";$x[2]="welcome";$x[3]="back";
echo "<pre>";
print_r($x);
echo "</pre>";
 
//for accessing array elements using for loop. we can also use list tag of html for better readability
echo "<ul>";
for($i=0;$i<4;$i++){
    echo "<li>". $colour[$i]."<br>"."</li>";
}
echo "</ul>";*/

//Associative array
$aa=[
    "name"=>"Durgesh",
    "age"=>"20",
    "gender"=>"female"
];
//foreachloop
$cl=[
    "red",
    "yellow",
    20
];
foreach($cl as $value){
    echo $value."<br>";
}
foreach($aa as $key=>$value){
    echo $key."====".$value."<br>";
}
?>