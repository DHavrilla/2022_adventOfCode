<?php

use home\david\Documents\2022_adventofcode\Helper;

//$array = file("day1.txt");
$array = Helper::readInFileToArray("day1.txt");

foreach ($array as $value) {
	if ($value == "\n") {
		$elves[] = $sum;
		$sum = 0;
	} else {
		$sum += $value;
	}
}

echo max($elves) . " " . array_search(max($elves), $elves) . "\n";

$topThree = [];
$topValue = 0;

for ($i = 0; $i < 3; $i++) {
	$topThree[] = array_search(max($elves), $elves);
	$topValue += max($elves);
	$element = array_search(max($elves), $elves);
	$elves[$element] = 0;
	echo $topThree[$i] . "\n";
}
echo $topValue . "\n";

/*
$elves = [];
$amount = [];
foreach ($elves as $elf) {
	$food = 0;
	foreach ($elf as $value) {
		$food += $value;
	}
	$amount[] = $food;
}

echo max($amount) . " " . array_search(max($amount), $amount) . "\n";
*/
