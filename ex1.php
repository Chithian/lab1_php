<?php 
	echo "<h1 style='color: green'>Encode the message using shift Caesar cipher technic:</h1>"."<br>";
	$arr = range('A','Z');
	$plain = "HELLO WORLD, I AM CS.";
	$shift = 3;
	$count = 0;

	echo $plain." => ";

	for ($i = 0 ; $i < strlen($plain) ; $i++){
		for ($j = 0 ; $j < sizeof($arr) ; $j++){
			if ($plain[$i] == $arr[$j]){
				if ($j >= 0 && $j <= (25 - $shift)){
					echo $arr[$j+$shift];
				}else{
					echo $arr[($j+$shift)%26];
				}
				$count = 1;
			}	
		}

		if($count != 1){
			echo $plain[$i];
		}else{
			$count = 0;
		}
	}
?>