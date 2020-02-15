<?php
$fizzbuzz = 1;
//sets our base number
while($fizzbuzz <=100){
	if($fizzbuzz % 3 == 0 && $fizzbuzz % 5 == 0){
		echo "Fizzbuzz! <br>";
	}
	//checks with modulous if base number is a factor of 3 & 5 if true prints Fizzbuzz!
  elseif($fizzbuzz % 3 ==0){
		echo "Fizz <br>";
	}
	elseif($fizzbuzz % 5 ==0){
		echo "buzz <br>";
	}
	//checks with modulous if number is a factor of 3 or 5 if true prints Fizz or Buzz
  else{
		echo $fizzbuzz."<br>";
	}
	$fizzbuzz++;
  //otherwize print base number and increments
}
?>
