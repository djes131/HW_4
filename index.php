<?php
require "geometria.php";
require "string.php";

function fact($x){
	return $x ? $x*fact($x-1):1;
}
$name='Yevgeniya';
$surname='Buryk';
$sumName= strlen($name);
	$sumSurname= strlen($surname);
	$sum=$sumName+$sumSurname;
	
function countNameSername($name,$surname){
	$sumName= strlen($name);
	$sumSurname= strlen($surname);
	$sum=$sumName+$sumSurname;
	if($sum>10 && $sum<12){
		return AreaCirleDiametr($sum);
	}
	else if($sum>=12 && $sum<15){
		return AreaRectangle($sumName,$sumSurname);
	}
	else if($sum>15){
		return AreaCircleRadius($sumName);
	}
	else if($sum<=10){
		return fact($sum);
	}
}
switch ($sum) {
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo "Использовали Факториал <br/>";
		break;
	case 11:
		echo "Использовали площадь круга <br/>";
		break;
	case 12:
	case 13:
	case 14:
		echo "Использовали площадь прямоугольника <br/>";
		break;
	case 15:
	case 16:
	case 17:
	case 18:
	case 19:
	case 20:
		echo "Использовали площадь круга только с количеством букв с имени <br/>";
		break;
	default:
		echo "Сумма больше 20 символов!!!<br/>";
		break;
}
echo"Всего символов ".$sum." = ".countNameSername($name,$surname)."<br/>";

$name = file_get_contents('name.txt');
$lastname = file_get_contents('lastname.txt');
echo $name." ".$lastname."<br/>";

$string = file_get_contents('http://source-it.com.ua/teachers/');
$word = strip_tags($string);
echo "Количество слов равно ".WordCount($word)."<br/>"."<br/>";

echo "Слово QA повторяется ".PopularWord($word)." раз(а)"."<br/>";
$str2="ХНУРЭ";
echo "Поиск слова ".FindWord($word,$str2)."<br/>";
