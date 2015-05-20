<?php
function AreaRectangle($a,$b){
	return $a*$b;
}

function AreaCircleRadius($r){
	return pi()*$r;
}
function AreaCirleDiametr($d){
	$aray=(pi()*$d)/4;
	$sum=round($aray,3);
	return $sum;
}
function AreaTringle($b,$h){
	return (1*$b*$h)/2;
}
function Geron($a,$b,$c){
	$p=($a+$b+$c)/2;
	$s=$p*($p-$a)*($p-$b)*($p-$c);
	$S=sqrt($s);
	return $S;
}


//Рекурсия

function factorial($number){
	if($number<=0){
		return 1;
	}else{
		return $number*factorial($number-1);
	}
}


