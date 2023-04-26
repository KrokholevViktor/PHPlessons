<?php

$a = '3';
$b = "1";

// echo ($a) ? : "2";

// if($a == 1 && $b == 1) {
//     echo "True";
// } else {
//     echo "False";
// }

// echo "<br>";

// switch($a){
//     case 1 :
//         echo "a = 1";
//         break;
//     case 2 :
//         echo "a = 2";
//         break;
//     default : 
//         echo "нет соответсвий";
//         break;
// }

// $num = 10;

// $result = match(true){
//     $num <= 5 => 'меньше равно 5',
//     $num <= 10 => 'меньше равно 10',
//     default => 'юольше 10'
// };

// for($i = 1; $i <= 10; $i++) {
//     echo "hello<br>";
// }

// $i = 0;
// for(;;) {

//     echo "hello world <br>";

//     $i++;

//     if($i === 10) break;
// }

// $args = ['1', '2', '3', '4'];

// for($i = 0; $i < count($args); $i++) {
//     echo $args[$i] . "<br>";
// }

// while($i <= 10){
//     echo $i . "<br>";
//     $i++;
// }


$r = 5;
$c = 2;

$i = 1;

echo "<table border=\"1\">";
while($i <= $r) {
    echo "<tr>";
    $j = 1;
    while($j <= $c){
        echo "<td>Строка: " . $i . ". Столбец: ". $j . "</td>";
        $j++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";

$year = 1992;
echo "<select>";
    while($year <= 2023) {
        echo "<option value=" . $year . ">$year</option>";
        $year++;
    }

echo "</select>";

// echo $result;

// $result = ($a) ? "true" : "False";
// echo $result;

// if (1<2) {
//  echo "True";
//  echo "test";
// } else {
//     echo "False";
// }

// if ($a !== $b) {
//     echo "True";
// }

?>