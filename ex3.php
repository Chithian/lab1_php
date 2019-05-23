<?php 
	echo "<h1 style='color:green; '>Encode and Decode Caesar cipher with random nonsense text.</h1>"."<br>";
	$arr = range('A','Z');
	$str = "KILL JOHN";
	$gap = 4;
	$encodeStr = "";

	echo "String = ".$str."<br>";

	//Do Encoding
	echo "After Encode => ";
	for ($i = 0 ; $i < strlen($str) ; $i++){
		echo "<b>$str[$i]</b>";
		$encodeStr .= $str[$i];
		for ($j = 1 ; $j < $gap ; $j++){
			$r = $arr[rand(0,25)]; //$r = ramdom
			echo "<span style='color:blue;'>$r</span>";
			$encodeStr .= $r;
		}
	}

	//Do Decoding
	echo "<br>After Decode => ";
	for ($i = 0 ; $i < strlen($encodeStr) ; $i+=$gap){
		echo "<b>$encodeStr[$i]</b>";
	}
?>