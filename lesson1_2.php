<!-- Рабочая среда, переменные, константы. Типы данных урок 1-2 -->
<?php 
// error_reporting(-1);
// Это однострочный комментарий
# это тоже однострочный комментарий

/**
 * Многострочный комментарий string 1
 * вторая строка string 2
 * много звёздочек
 */
    // echo "test";
    // print 'test 2';

$name = "my name is \"viktor krokholev\""; //string
$names = "Alex, Cris, Elena";
$int = 10; //integer
$float = 75.6; //float
$bool = true; //boolean True true TRUE
$null = null; //null
$fruits = ['apples', 'oranges', 'bananas', 'ananas']; //Array
$user = new stdClass; // Object
//resource
$file = fopen('test.txt', 'r');

$user->name = "alex";

print_r($file); 

$args = ['Viktor', 10, 75.6, true]; //array нумерованный массив
$args2 = [
    "name" =>  $name, 
    "age" => 10, 
    "height" => 76.5, 
    "isMale" => true,
    "fruits" => $fruits
]; //array ассоциативный массив

echo count($fruits); // количество элементов в массиве
echo '<br>';
array_push($fruits, "mango");
array_unshift($fruits, "dragon_fruit");
// arsort($fruits);
$args3 = array_merge($fruits, $args2);
$rFruits = array_reverse($fruits);
print_r($rFruits);

$argsnames = explode(", ", $names);
print_r($argsnames);
echo $argsnames[0];
echo is_array($fruits);

$names = implode(" ", $argsnames);
print_r($names);



// var_dump($int + intval($float));
// settype($float, "string");
// echo gettype($float);
// echo $float; 

// echo 'My name is: '.$name.' and my age: '.$age.'<br>';
// echo "My \"name\" is: $name and my age: {$age}years <br>";

// $Name = "Cris";
// $NAME = "Elemne";

$my_variable = "snake_case";
$myVariable = "camelCase";

define("NAME","Alex");
define("echo","Cris");


?>