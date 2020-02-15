<?php
//Took a bit of creativity with this challenge as I did not remember the modulos operator when I heard about it
$fizzbuzz= 1;
$fizz=1;
$buzz=1;
//sets 3 variables for our convenience
while($fizzbuzz <= 100){
	if($fizz == 3 && $buzz == 5){
		echo $fizzbuzz." FIZZBUZZ!!! YAY <br>";
		$fizz=0;
		$buzz=0;
	}
	//checks to see if both our divisive variables are at max if so it prints fizzbuzz along with base number resets fizz and buzz
  elseif($fizz == 3){
		echo $fizzbuzz." Fizz<br>";
		$fizz = 0;
	}
	elseif($buzz == 5){
		echo $fizzbuzz." buzz! <br>";
		$buzz = 0;
	}
  //checks to see if either of the divisive variables are at max if so resets that one, and prints fizz or buzz along with the number
	else{
		echo $fizzbuzz."<br>";
	}
  //echos base number
	$fizzbuzz++;
	$fizz++;
	$buzz++;
  //increments all variables
}
?>
