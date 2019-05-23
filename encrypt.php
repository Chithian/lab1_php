<?php
		$array=range("A","Z");
		$i=0;
		foreach ($array as $key => $value) {
			$arrayName[$i]=$value;
			$i++;
		}
		$word="ZOO";
		$n=strlen($word);
		$shilf=3;
		for ($i=0; $i <$n ; $i++) { 
			for ($j=0; $j < 26; $j++) { 
				if ( $arrayName[$j] == $word[$i] ) {
					$m=$j+$shilf;
					echo $arrayName[$m % 26];
				}
			}
		}
?>