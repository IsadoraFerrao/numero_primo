<html>
<head>
	<title>Desafio do é primo ou não?</title>
	<meta charset="UTF-8">
</head>
<body>

Números Primos<br>
Faça um algorítmo que dado um número digitado pelo usuário, <br>
verifique se é primo ou não.<br><br>

<font size="-1">by Renan Pantoja Vilas.</font><br><br>

<form action="" method="post">
	<input type="text" name="abc" /><br>
</form>

<?php

@$abc = $_POST['abc'];

if(isset($abc)){
	// criação da variavel de decisão
	$total = 0;
	//divide por todos os numeros até chegar nele mesmo
	for($n = 1; $n <= $abc; $n++) { 
		//pega o resto e guarda no array
		$results[$n] = $abc % $n;
		//fatora o numero ate 0 ou 1
		while($results[$n] > 1){
			$results[$n] = $results[$n] / 2;
		}
		//arredonda o numero para inteiro
		$results[$n] = round($results[$n]);
		//verifica se é 1
		if($results[$n] == 1){
			$total++;
		}
	}
	//o numero inteiro só é divisivel por 1 ou ele mesmo
	//então a quantidade de resto 1 tem que ser $abc-2
	if($total == ($abc - 2)){
		echo '<font color="green">O numero '.$abc.' é primo</font>';
	} else {
		echo '<font color="red">O numero '.$abc.' não é primo</font>';
	}

}else {}


?>

</body>
</html>
