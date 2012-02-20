<?php
// ******************************************************************************************************
// Nai's Glory Official Website
// Copyright 2-2004 by Rachel A Ober
// http://mintkiss.net/
// ******************************************************************************************************
// functions.php
// All repeated functions computed and executed from this file.
// ******************************************************************************************************


// ******************************************************************************************************
// coinToss: simulates the coin toss for the first move in a battle
// ******************************************************************************************************
function coinToss(){
	$num = rand(0,1);
	if ($num > 1)
		$num = $num -1;
		
	if ($num == 1)
		echo ("Heads, your opponent goes first in battle!");
	elseif ($num == 0)
		echo("Tails, your creature attacks first in battle!");
} 
?>