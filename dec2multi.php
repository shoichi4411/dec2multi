<?php
/* Copyright 2013 Shoichi Takahashi
 * http://f-dev.jp
 *
 * This Program is MIT License
 */

function dec2multi($str, $charlist = '0123456789abcdefghijklmnopqrstuvwxyzaABCDEFGHIJKLMNOPQRSTUVWXYZ') {
	$charlist = mb_convert_encoding($charlist, "SJIS-win", "UTF-8");
	$charlen = strlen($charlist);
	$dst = '';
	while ($str) {
		$dst = $charlist[bcmod($str, $charlen)] . $dst;
		$str = bcdiv ($str, $charlen, 0);
	}
	$dst = mb_convert_encoding($dst, "UTF-8", "SJIS-win");
	return $dst;
}


function multi2dec($str, $charlist = '0123456789abcdefghijklmnopqrstuvwxyzaABCDEFGHIJKLMNOPQRSTUVWXYZ') {
	$str = mb_convert_encoding($str, "SJIS-win", "UTF-8");
	$charlist = mb_convert_encoding($charlist, "SJIS-win", "UTF-8");
	$charlen = strlen($charlist);
	$dst = 0;
	$cnt = strlen($str);
	for ($i = 0; $i < $cnt; $i++) {
		$dst = bcadd($dst, bcmul(strpos($charlist, $str[$i]), bcpow($charlen, $cnt - $i - 1)));
	}
	$dst = mb_convert_encoding($dst, "UTF-8", "SJIS-win");
	return $dst;
}
?>
