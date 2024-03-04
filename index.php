<?php
$marks=1050;
// 80 A+
// 70 A-
switch($marks){
    case($marks>=80 && $marks<=100):
        echo "A+";
        break;
    case($marks<80 && $marks>=70):
        echo "A-";
        break;
    case($marks>60 && $marks<70):
        echo "B+";
        break;
  default:
  echo "invalid ";
}
?>