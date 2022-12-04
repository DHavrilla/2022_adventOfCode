<?php


$array = file("input.txt");
$total = 0;

foreach ($array as $value) {
	$value = trim($value);
	switch($value) {
		case 'A X':
			$total += 3;
			break;
		case 'A Y':
			$total += 4;
			break;
		case 'A Z':
			$total += 8;
			break;
		case 'B X':
			$total += 1;
			break;
		case 'B Y':
			$total += 5;
			break;
		case 'B Z':
			$total += 9;
			break;
		case 'C X':
			$total += 2;
			break;
		case 'C Y':
			$total += 6;
			break;
		case 'C Z':
			$total += 7;
			break;
		default:
			echo "no\n";
	}
}
echo $total . "\n";


