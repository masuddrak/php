<?php
// index array
$numbers=[5,5,68,6,56];
echo $numbers[2]."<br>";
// asociative array
$person=[
    "name"=>"sakib",
    "age"=>"24",
    "color"=>"white",

];
print_r($person);

echo $person["age"];
echo "<ul>";
foreach($numbers as $number){
    echo "<li>$number</li>";
};
echo "</ul>";
?>