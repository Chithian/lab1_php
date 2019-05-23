<?php 
	echo "<h1 style='color: green'>Decode the message using the same technic of group1</h1>"."<br>";
	$arr = range('A','Z');
	$cipher_text = "KHOOR ZRUOG, L DP FV.";
	$shift = 3;
	$count = 0;
	
	echo $cipher_text." => ";

	for ($i = 0 ; $i < strlen($cipher_text) ; $i++){
		for ($j = 0 ; $j < sizeof($arr) ; $j++){
			if ($cipher_text[$i] == $arr[$j]){
				if ($j >= $shift && $j <= 25){
					echo $arr[$j-$shift];
				}else{
					echo $arr[$j+(26 - $shift)]; //if $shift = 3 => $cipher_text[23] == $arr[0] => $arr[0 + 23] = 'X';
				}
				$count = 1;
			}	
		}

		if($count != 1){
			echo $cipher_text[$i];
		}else{
			$count = 0;
		}
	}
?>