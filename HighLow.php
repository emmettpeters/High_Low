<?php


$count = 1;
$numberRando = mt_rand(0,100);
echo $numberRando . PHP_EOL;
fwrite(STDOUT,PHP_EOL);

do {
	fwrite(STDOUT, 'Guess a number 0-100 : ');
	$numberInput = trim(fgets(STDIN));
	fwrite(STDOUT, "You have guessed $count times\n");

	if (is_numeric($numberInput)){
		

		if ($numberInput < $numberRando){
			fwrite(STDOUT, "Guess a higher number \n");
			$numberInput = fgets((STDIN));
			$count += 1;

		} else if ($numberInput > $numberRando){
			fwrite(STDOUT, "Guess a lower number \n");
			$numberInput = fgets((STDIN));
			$count += 1;

		} else if ($numberInput == $numberRando){
			fwrite(STDOUT, 'YOU GOT IT!!');
		}

	} else {
		fwrite(STDOUT, 'NOT A NUMBER DUMMY');
	}
} while ($numberInput != $numberRando);




