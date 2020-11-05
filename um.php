<?php
	$r=rand(0,20);
	define("pi", 3.14,true);
	$a=0;

	function area($r,$pi){
		return pi * $r * $r;
	}

	$a = area($r,pi);
	echo "A area de um circulo é " .$a;
?>