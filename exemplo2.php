<?php

	//$anoNascimento=1990;
	//$nomeCompleto= ""; 

	// Na linha de baixo temos uma váriavel com número no nome
	$nome1 ="João";

	$sobrenome = "Rangel";

	//2 " " serve para separar os nomes (Concatenar)

	$nomeCompleto = $nome1. " " .$sobrenome;

	echo $nomeCompleto; 

	exit;

//________________________________________________________________________

	echo $nome1;

	echo "<br/>";

	//unset serve para apagar uma variável.
	unset($nome1);

	//isset verifica uma variável se ela existe.
	if(isset($nome1)){

		echo $nome1;

	}

	

?>
