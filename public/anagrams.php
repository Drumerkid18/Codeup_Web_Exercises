<?php

$firstWords  = ['cinema', 'host', 'aba', 'train'];
$secondWords = ['iceman', 'shot', 'bab', 'rain'];


for ($i = 0; $i < count($firstWords); $i++) {
$a = str_split($firstWords[$i]);
$b = str_split($secondWords[$i]);
asort($a);
asort($b);

$aString = implode(",", $a);
$bString = implode(",", $b);

if ($aString === $bString) {
	echo "1\n";
}else{
	echo "0\n";
}

}
	



?>