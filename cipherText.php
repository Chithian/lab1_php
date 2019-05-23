<?php
	$array=range("A","Z");
	$i=0;
	foreach ($array as $key => $value) {
		$arrayName[$i]=$value;
		$i++;
	}
	$word="KHOOR";
	$n=strlen($word);
	$shilf=3;
	for ($i=0; $i <$n ; $i++) { 
		for ($j=0; $j < 26; $j++) { 
			if ( $word[$i] == $arrayName[$j] ) {
				$m=$j-$shilf;
				echo $arrayName[$m % 26];
			}
		}
	}
?>