<?php 
/* ================ STRING TO UPPER FUNCTION ================ */
echo  "<h3>String to Upper Function</h3>";
// Function Declare
function myStrToUpperFunction($string) {
	$ABC = 'A';
	$abc = 'a';
	$capitalAlphabet = '';
	$smallAlphabet = '';

	for ($x=0; $x < 26; $x++) { 
		$capitalAlphabet = $capitalAlphabet . $ABC++;
		$smallAlphabet = $smallAlphabet . $abc++;
	}
	for ($y=0; isset($string[$y]) ; $y++) { 
		for ($z=0; $z < 26 ; $z++) { 
			if($string[$y] == $capitalAlphabet[$z] OR $string[$y] == $smallAlphabet[$z]){
			$string[$y] = $capitalAlphabet[$z];		
			}
		}
	}
	echo $string;
}
// Function call
myStrToUpperFunction('convert me'); // FUNCTION CALL
echo "<hr/>";