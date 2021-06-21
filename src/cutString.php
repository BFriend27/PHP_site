<?php
//Обрезка строки, применяется в showTitle
function cutString($line, $length = 19, $appends = '...'): string
{
	if (strlen($line) > $length) {
		$rest = substr($line, 0, $length);
		return($rest.$appends);
	} else {
		return($line);
	}
}