<?php
/**
 * PHPで「FizzBuzz」
 *
 * 概要:
 * 1～100までの数字で3で割り切れる時は「Fizz」
 * 5で割り切れる時は「Buzz」、両者で割り切れる時は「FizzBuzz」と出力する。
 *
 */

for ($i=1; $i<=100; $i++) {
	print str_pad($i, 3, " ", STR_PAD_LEFT)." ";
	if ( $i % 15 == 0 ) {
		print "FizzBuzz";
	} else if ($i % 3 == 0) {
		print "Fizz";
	} else if ($i % 5 == 0) {
		print "Buzz";
	}
	print "\n";
}

