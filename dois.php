<?php
	$num=rand(0,50);

	function atribuir($num)
	{
		if ($num % 2 == 0) {
			return true;
			
		}
		else{
			return false;
			
		}
	}
	if (atribuir($num)) {
		echo "O numero é par.";
	}
	else
	{
		echo "O numero é impar.";
	}

?>