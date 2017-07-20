<?php

// if ($argc == 3){

	$numberRando = mt_rand($argv[1],$argv[2]);
	$count = 0;
		
	echo $numberRando . PHP_EOL;
	fwrite(STDOUT,PHP_EOL);

	fwrite(STDOUT, "Guess a number $argv[1] to $argv[2] : ");


	do {
		if ($argc != 3 || !(is_numeric($argv[1])) || !(is_numeric($argv[2]))){
			fwrite(STDOUT, "I Need 2 numbers for you to guess in-between fool!");
			die;
		}

		$count += 1;

		$numberInput =trim(fgets(STDIN));
		
		fwrite(STDOUT, "You have guessed $count times\n");

		if (is_numeric($numberInput)){

			if ($numberInput < $numberRando){
				fwrite(STDOUT, "Guess a higher number \n");
			}

			if ($numberInput > $numberRando){
				fwrite(STDOUT, "Guess a lower number \n");	
			}

			if ($numberInput == $numberRando){
				fwrite(STDOUT, 'YOU GOT IT!!');
			}

		} else {
			fwrite(STDOUT, 'NOT A NUMBER DUMMY');
		}
	} while ($numberInput != $numberRando);

// }


