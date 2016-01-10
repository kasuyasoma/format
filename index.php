<?php

$m = 71;
$n = 4;

if(($m <= 0) && ($n < 2))
{
    echo "m には正の整数を入力すること". '<br>';
    echo "n は2以上を入力すること";
}
elseif($m <= 0)
{
	echo "mは正の整数を入力してください";
}
elseif($n < 2)
{
	echo "nは2 以上の数を入力してください";
}
else
{
  // str_pad — 文字列を固定長の他の文字列で埋める
	$f = str_pad($m, $n, 0, STR_PAD_LEFT);

	echo $f;
}
