<?php
/*
считаем количество слов с помощью своей функции, 
функцию поместить в отдельный файл и подгружать в ваш index.php
*/
function WordCount($str){
	$result=str_word_count($str);
	return $result;
}
/*
находим самое популярное слово
*/
function PopularWord($str){
	$wordcount=substr_count("$str","QA");
	return $wordcount;
}
function FindWord($str1,$str2){
	$pos = strpos($str1, $str2);
	if ($pos === false) {
    echo "Строка ".$str2." не найдена в строке ".$str1."<br/>";
} else {
    echo "Строка ".$str2." найдена в строке ".$str1."<br/>";
    echo " в позиции $pos"."<br/>";
}
}
