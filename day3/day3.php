<?php


//$array = file("input.txt");
$array = file("input2.txt");
$total = 0;

//$total = partOne($array, $total);
$total = partTwo($array, $total);

function partOne($array, $total)
{
	foreach ($array as $value) {
		$value = trim($value);
		$length = strlen($value);
		$part1 = substr($value, 0, (int) $length / 2);
		$part2 = substr($value, (int) $length / 2, (int) $length / 2);
		$letter = findMatch($part1, $part2);
		$total = getAlphaValue($letter, $total);
	}
	return $total;
}

function partTwo($array, $total)
{
	for ($i = 0; $i < count($array); $i+=3) {
		$part1 = $array[$i];
		$part2 = $array[$i + 1];
		$part3 = $array[$i + 2];
		$parse = findMatch2($part1, $part2);
		$letter = findMatch($parse, $part3);
		$total = getAlphaValue($letter, $total);
	}
	return $total;
}

function findMatch ($part1, $part2): string
{
	$array1 = str_split($part1, 1);
	$array2 = str_split($part2, 1);
	foreach ($array1 as $value1) {
		foreach ($array2 as $value2) {
			if ($value1 === $value2) {
				return $value1;
			}
		}
	}
	return '';
}

function findMatch2 ($part1, $part2): string
{
	$word = '';
	$array1 = str_split($part1, 1);
	$array2 = str_split($part2, 1);
	foreach ($array1 as $value1) {
		foreach ($array2 as $value2) {
			if ($value1 === $value2) {
				$word .= $value1;
			}
		}
	}
	return $word;
}
function getAlphaValue ($letter, $total): int
{
	$letter = trim($letter);
	switch($letter) {
		case 'a':
			$total += 1;
			break;
		case 'b':
			$total += 2;
			break;
		case 'c':
			$total += 3;
			break;
		case 'd':
			$total += 4;
			break;
		case 'e':
			$total += 5;
			break;
		case 'f':
			$total += 6;
			break;
		case 'g':
			$total += 7;
			break;
		case 'h':
			$total += 8;
			break;
		case 'i':
			$total += 9;
			break;
		case 'j':
			$total += 10;
			break;
		case 'k':
			$total += 11;
			break;
		case 'l':
			$total += 12;
			break;
		case 'm':
			$total += 13;
			break;
		case 'n':
			$total += 14;
			break;
		case 'o':
			$total += 15;
			break;
		case 'p':
			$total += 16;
			break;
		case 'q':
			$total += 17;
			break;
		case 'r':
			$total += 18;
			break;
		case 's':
			$total += 19;
			break;
		case 't':
			$total += 20;
			break;
		case 'u':
			$total += 21;
			break;
		case 'v':
			$total += 22;
			break;
		case 'w':
			$total += 23;
			break;
		case 'x':
			$total += 24;
			break;
		case 'y':
			$total += 25;
			break;
		case 'z':
			$total += 26;
			break;
		case 'A':
			$total += 27;
			break;
		case 'B':
			$total += 28;
			break;
		case 'C':
			$total += 29;
			break;
		case 'D':
			$total += 30;
			break;
		case 'E':
			$total += 31;
			break;
		case 'F':
			$total += 32;
			break;
		case 'G':
			$total += 33;
			break;
		case 'H':
			$total += 34;
			break;
		case 'I':
			$total += 35;
			break;
		case 'J':
			$total += 36;
			break;
		case 'K':
			$total += 37;
			break;
		case 'L':
			$total += 38;
			break;
		case 'M':
			$total += 39;
			break;
		case 'N':
			$total += 40;
			break;
		case 'O':
			$total += 41;
			break;
		case 'P':
			$total += 42;
			break;
		case 'Q':
			$total += 43;
			break;
		case 'R':
			$total += 44;
			break;
		case 'S':
			$total += 45;
			break;
		case 'T':
			$total += 46;
			break;
		case 'U':
			$total += 47;
			break;
		case 'V':
			$total += 48;
			break;
		case 'W':
			$total += 49;
			break;
		case 'X':
			$total += 50;
			break;
		case 'Y':
			$total += 51;
			break;
		case 'Z':
			$total += 52;
			break;

		default:
			$total += 0;
	}
	return $total;
}
echo $total . "\n";


