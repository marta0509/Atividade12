<?php
	$n_rapazes=rand(0,15);
	$n_raparigas=rand(0,15);
	$turma =0;
	$perc_rapazes=0;
	$perc_raparigas=0;

	function turma ($n_rapazes,$n_raparigas){
		return $n_rapazes + $n_raparigas;
	}

	$turma=turma($n_rapazes,$n_raparigas);
	echo "A turma tem " .$turma. " alunos.<br>";

//percentagem dos rapazes

	function percentagem_rapazes($n_rapazes,$turma){
		return $n_rapazes/$turma*100;
	}

	$perc_rapazes=percentagem_rapazes($n_rapazes,$turma);
	echo "A percentagem dos rapazes é " .$perc_rapazes .". <br>";

//percentagem das raparigas

	function percentagem_raparigas($n_raparigas,$turma){
		return $n_raparigas/$turma*100;
	}

	$perc_raparigas=percentagem_raparigas($n_raparigas,$turma);
	echo "A percentagem das raparigas é " .$perc_raparigas .". <br>";
?>