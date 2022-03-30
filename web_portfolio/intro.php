<!-- We can include the navigation menu in a php file called
header.php and just include it in all html docs -->
<?php include 'header.php';?>
<?php
echo 'Hello World<br>';
$name = "Xavier";
?>

<?php
$array = array(1,2,3,4,5);
//print array using normal loop or foreach loop
echo 'print array using for loop <br>';
for($n = 0; $n < count($array); $n++){ 
    echo $array[$n] . ","; 
} 
echo "<br>";
//in php arrays are associative 
$fav_foods = array("Ben"=>"ice cream", "Sam"=>"tacos", "Kelly"=>"sushi",
                    "Christina"=>"cereal", "Bella"=>"pizza");

?>

<?php

echo 'poop'

?>