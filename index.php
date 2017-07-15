<?php
//$name1 = $_POST["imja"];
//$age = $_POST["vozr"];
//$myclass = $_POST["class"];

//echo "Привет медвед, меня зовут ".$name1." и мне ".$age." лет и я учусь в ".$myclass." классе.";

require_once "classes/House.php";
require_once "classes/Block.php";

$denishouse = new House();
$denishouse->build("Дениса","черепицы",4,1,"кирпича","синий");
$denishouse->show();
echo "<br>";

$tadjikhouse = new House();
$tadjikhouse->build("таджика","соломы",7,1,"глины","cерый");
$tadjikhouse->show();
echo "<br>";

$sheniHouse = new Block();
$sheniHouse->build("Жени","рубероед",3,1,"бетона","белый",2,3);
$sheniHouse->show();
echo "<br>";
