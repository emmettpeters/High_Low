<?php
//argument check
if ($argc == 4){

	$correctNumber = $argv[3];

	fwrite(STDOUT, "Alright , Computer, Guess a number from $argv[1] to $argv[2] when I type go\n");

	$startInput = trim(fgets(STDIN));

	//checking for me to tell game to start w/ string of "go"
	if ($startInput == "go"){

		do {
			$numberRando = mt_rand($argv[1],$argv[2]);
			fwrite(STDOUT, "OK , Human, My guess is $numberRando\n");

			//checking if comp guess  is correct
			if ($numberRando == $correctNumber){
				fwrite(STDOUT, "HAHAHAHA,Silly Human, My guess is correct! I can guess 80000 times a second, you will never find a number I cant guess!\n");

				fwrite(STDOUT, `say "HA HA HA HA,Silly Human, My guess is correct! I can guess 80000 times a second, you will never find a number I cant guess!"`);


				fwrite(STDOUT, "Now it is your turn to start guessing! ill try and not fall asleep.\n");

				fwrite(STDOUT, `say "Now it is your turn to start guessing! ill try and not fall asleep."`);

				// $compChoice = 

			}

		} while ($numberRando != $correctNumber);

	} else {
		fwrite(STDOUT, "OK , Human, I want to start guessing but you have to tell me to 'go' first\n");
	}
}